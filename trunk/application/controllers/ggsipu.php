<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hitanshu
 * Date: 2/16/13
 * Time: 1:55 PM
 * To change this template use File | Settings | File Templates.
 */
class GGSIPU extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
    }

    public function previous_year_paper()
    {
        $this->template->build('find_paper',array('error' => ' '));
    }

    public function find_paper()
    {
        $semester = $this->input->post('semester');
        $subject = $this->input->post('subject');
        $year = $this->input->post('year');
        $term = $this->input->post('term');

        $model=new Upload_Model();
        $papers=$model->find_paper($subject,$term,$year);


        if(empty($papers))
        $this->template->build('sorry_no_paper');
        $data['papers']=$papers;
       $this->template->build('show_paper',$data);



    }
}
