<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 9/30/11
 * Time: 1:15 PM
 * To change this template use File | Settings | File Templates.
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

///validates if a user is an authenticated user or not
function validate_login() {
    $ci =& get_instance();
    if (!$ci->ion_auth->logged_in()) {
        //redirect them to the login page
        redirect('auth/login', 'refresh');
    }
}

function check($item) {
    //    $ci =& get_instance();
    //    $u_id = get_artist_email_and_id($item)->id;
    //    $ci->db->select('id');
    //    $ci->db->from('users_groups');
    //    $ci->db->where(array('user_id' => $u_id, 'group_id' => 1));
    //    $result = $ci->db->get()->row();
    if (is_admin()) {
        return true;
    } else {
        if (is_current_user($item)) {
            return true;
        } else {
            return false;
        }

    }
}



//gets current logged in username or null
function get_user_name() {
    $ci =& get_instance();
    if ($ci->ion_auth->logged_in()) {
        return $ci->ion_auth->user()->row()->username;
    }
    return null;
}

//gets current logged in user
function get_user() {
    $ci =& get_instance();
    if ($ci->ion_auth->logged_in()) {
        return $ci->ion_auth->user()->row();
    }
    return null;
}

function is_logged_in() {
    $ci =& get_instance();
    if ($ci->ion_auth->logged_in()) {
        return true;
    } else {
        return false;
    }

}

//check is current user admin
function is_admin() {
    $ci =& get_instance();
    if ($ci->ion_auth->is_admin()) {
        return true;
    } else {
        return false;
    }
}

//store previous url in sesssion
function pre_login() {
    $ci =& get_instance();
    //    $ci->session->unset_userdata('pre_login');
    $ci->session->set_userdata(array('pre_login' => current_url()));
}

/**
 * @param $type : Type can be 'success', 'error', 'info'
 * @param $message : The message to show
 */
function set_message($type, $message) {
    $ci =& get_instance();
    $ci->load->library('session');

    $ci->session->set_flashdata($type, $message);
}

/**
 * @return array which contains all message saved
 */
function get_message() {
    $ci =& get_instance();

    $ci->load->library('session');
    $data = array();

    $success_message = $ci->session->flashdata('success');
    $error_message = $ci->session->flashdata('error');
    $info_message = $ci->session->flashdata('info');

    if (!empty($success_message)) {
        $data['success'] = $success_message;
    }

    if (!empty($error_message)) {
        $data['error'] = $error_message;
    }

    if (!empty($info_message)) {
        $data['info'] = $info_message;
    }
    return $data;
}

function get_resize_image($path, $w, $h) {
    $ci =& get_instance();
    $upload_dir = $ci->config->item('upload_path');
    $ci->load->helper('file');
    if (!get_file_info($path)) {
        return;
    }

    if (!is_dir($upload_dir . $w . 'X' . $h)) {
        mkdir($upload_dir . $w . 'X' . $h, 0755);
    }

    $ci->load->helper('file');
    $info = pathinfo($path);
    $filename = $info['filename'];
    $extension = $info['extension'];
    $new_file = $filename . "-" . $w . "X" . $h . "." . $extension;
    $new_url = $upload_dir . $w . 'X' . $h . '/' . $new_file;

    if (!get_file_info($new_url)) {

        $ci->load->library('image_lib');

        //math for resize/crop without loss
        $o_size = _get_size($info['dirname'] . '/' . $info['basename']);

        $master_dim = ($o_size['width'] - $w < $o_size['height'] - $h ? 'width' : 'height');

        $perc = max((100 * $w) / $o_size['width'], (100 * $h) / $o_size['height']);

        $perc = round($perc, 0);

        $w_d = round(($perc * $o_size['width']) / 100, 0);
        $h_d = round(($perc * $o_size['height']) / 100, 0);

        // end math stuff

        /*
        *    Resize image
        */
        $config['image_library'] = 'gd2';
        $config['source_image'] = $path;
        $config['new_image'] = $new_url;
        $config['maintain_ratio'] = TRUE;
        $config['master_dim'] = $master_dim;
        $config['width'] = $w_d + 1;
        $config['height'] = $h_d + 1;

        $ci->image_lib->initialize($config);

        $ci->image_lib->resize();

        $size = _get_size($new_url);

        unset($config); // clear $config

        /*
        *    Crop image  in weight, height
        */

        $config['image_library'] = 'gd2';
        $config['source_image'] = $new_url;
        $config['new_image'] = $new_url;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $w;
        $config['height'] = $h;
        $config['y_axis'] = round(($size['height'] - $h) / 2);
        $config['x_axis'] = 0;

        $ci->image_lib->clear();
        $ci->image_lib->initialize($config);
        if (!$ci->image_lib->crop()) {
            echo $ci->image_lib->display_errors();
        }
    }

    return base_url() . $new_url;
}

function _get_size($image) {
    $img = getimagesize($image);
    return Array('width' => $img['0'], 'height' => $img['1']);
}

function valid_url($url) {
    if ($url == '') {
        return true;
    }
    return (preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url)) ? TRUE : FALSE;

}

// trim the sting
function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }

    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }

    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    if (!$last_space) {
        $trimmed_text = substr($input, 0, $length);
    } else {
        $trimmed_text = substr($input, 0, $last_space);

    }

    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }

    return $trimmed_text;
}

//html for search box
function search_box() {
    $ci =& get_instance();
    return $ci->load->view('artist/search_box', '', true);
}

// count number of visitor
function count_visitor() {
    $ci =& get_instance();
    $result = $ci->db->get('hits')->row();
    if ($result) {
        return $result->hits;
    } else {
        return 0;
    }

}

function get_config_value($key) {
    $ci =& get_instance();
    return $ci->config->item($key);
}

// add one on very new vistor
function new_visitor() {
    $ci =& get_instance();
    $number_of_visit = count_visitor();
    if (!$number_of_visit) {
        $ci->db->insert('hits', array('hits' => 1));
    } else {
        $ci->db->update('hits', array('hits' => $number_of_visit + 1));
    }
}


//captcha image
function captcha() {
    $ci =& get_instance();
    $ranStr = md5(microtime());
    $ranStr = substr($ranStr, 0, 6);

    $vals = array(
        'word' => $ranStr,
        'img_path' => './captcha/',
        'img_url' => base_url() . '/captcha/',
        'font' => base_url('assets/fonts/capture_it_2.ttf'),
        'img_width' => 140,
        'img_height' => 42,
        'expiration' => 60,
        "time" => time()
    );

    $data['cap'] = create_captcha($vals);

    $cap = array(
        'captcha_time' => $vals['time'],
        'ip_address' => $ci->input->ip_address(),
        'word' => $vals['word']
    );

    $ci->session->set_userdata($cap);
    echo  $data['cap']['image'];

}



