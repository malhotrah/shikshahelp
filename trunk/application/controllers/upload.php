<?php

class Upload extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->template->build('upload_paper', array('error' => ' '));
    }

    function do_upload()
    {
        $semester = $this->input->post('semester');
        $subject = $this->input->post('subject');
        $year = $this->input->post('year');
        $term = $this->input->post('term');
        $config['upload_path'] = './assets/uploads'; //if the files does not exist it'll be created
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4000'; //size in kilobytes
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $uploaded = $this->upload->up(); //Pass true if you want to create the index.php files

        if (!empty($uploaded)) {

            if (!empty($uploaded['error']) && empty($uploaded['success'])) {
                foreach ($uploaded['error'] as $row) {
                    set_message('error', $row['error_msg'] . 'file 1');
                    redirect('upload');
                }

            } else {
                //call model and enter file details to database.

               $uploadModel=new Upload_Model();
                $uploadModel->insert_paper($subject,$term,$year,$uploaded['success']);

            set_message('success', "Thanks for uploading papers...");
            redirect('upload');
            }

        } else {

            set_message('info', "You have choosen No file");
            redirect('upload');

        }

    }


    public function find_subject_name()
    {
        $semester_selected = $this->input->post('q');
        $this->db->select('subjects.id,subjects.subjects');
        $this->db->from('subjects');
        $this->db->join('semester', 'semester.id=subjects.semester_id');
        $this->db->where('semester.id', $semester_selected);
        $result = $this->db->get()->result();

        foreach ($result as $row) {
            $subjects[] = $row->subjects;
            $values[] = $row->id;

        }
        $mydata['subjects'] = $subjects;
        $mydata['svalues'] = $values;
        echo json_encode($mydata);

    }

    public function test()
    {

        $this->db->select('subjects.subjects,subjects.values');
        $this->db->from('subjects');
        $this->db->join('semester', 'semester.id=subjects.semester_id');
        $this->db->where('semester.name', 'semester1');
        var_dump($this->db->get()->result());
    }

    public function ggsipu_previous_year_paper()
    {

        $this->template->build('find_paper');


    }

    }

?>