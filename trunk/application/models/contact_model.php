<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hitanshu
 * Date: 12/21/12
 * Time: 8:57 PM
 * To change this template use File | Settings | File Templates.
 */
class Contact_Model extends CI_Model
{

    public function contact_insert($name, $phone, $email, $msg)
    {
        date_default_timezone_set('Asia/Kolkata');
        $entry_date=date("y-m-d H:i:s");
        $data = array(

            'name' => $name,
            'phone_no' => $phone,
            'email' => $email,
            'message' => $msg,
            'entry_date'=>$entry_date
        );

        $this->db->insert('contact_us',$data);
        return $this->db->insert_id();


    }
}
