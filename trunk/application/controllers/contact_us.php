<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hitanshu
 * Date: 3/2/13
 * Time: 6:26 PM
 * To change this template use File | Settings | File Templates.
 */
class Contact_Us extends CI_Controller
{
    public function index() {
        $this->template->title('Contact Us');
        $this->template->build('contact_us/contact_us');
    }

    public function submit()
    {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $model = new Contact_Model();
        $insert_id=$model->contact_insert($name, $phone, $email, $message);
        if ($insert_id) {
            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'message' => $message
            );
            $this->load->library('email');

            $message_body = $this->load->view('contact_us/email/contact_us_email_tpl', $data, true);
            $this->email->from('shikshahelp@gmail.com');
            $this->email->to('shikshahelp@gmail.com');
            $this->email->subject("Contact entry at ggsipu-shikshahelp - ".$insert_id);
            $this->email->message($message_body);
            $this->email->send();

            redirect('contact_us/success');
        }

    }

    public function success()
    {
        $this->template->build('contact_us/contact_success');

    }
}
