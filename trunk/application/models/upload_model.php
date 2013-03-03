<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hitanshu
 * Date: 2/16/13
 * Time: 11:55 AM
 * To change this template use File | Settings | File Templates.
 */
class Upload_Model extends CI_Model
{
    public function insert_paper($subject_id, $term, $year, $uploadFiles)
    {
        $bulkPapers = array();
        foreach ($uploadFiles as $files) {
            $paper = array();
            $paper['subject_id'] = $subject_id;
            $paper['term'] = $term;
            $paper['year'] = $year;
            $paper['path'] = 'assets/uploads/' . $files['file_name'];
            $bulkPapers[] = $paper;
        }
        $this->db->insert_batch('papers', $bulkPapers);
    }

    public function find_paper($subject_id, $term, $year)
    {
        $this->db->select('subjects,term,path,year');
        $this->db->from('papers');
        $this->db->join('subjects','papers.subject_id=subjects.id');
        $this->db->where('subject_id', $subject_id);
        $this->db->where('term', $term);
        $this->db->where('year', $year);
        $results = $this->db->get()->result();
        return $results;


    }
}
