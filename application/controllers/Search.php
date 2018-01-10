<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller
{
	public function index()
    {
        $json = [];

        $this->load->database();

        
        if(!empty($this->input->get("q"))){
            $this->db->like('name', $this->input->get("q"));
            $query = $this->db->select('parent_id,name as text')
                        ->limit(10)
                        ->get("parent");
            $json = $query->result();
        }

        
        echo json_encode($json);
    }
}