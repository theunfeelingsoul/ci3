<?php 

	class Chaty extends CI_Model {
	
	    function __construct()
	    {
	        parent::__construct();
	    }

	    function insert(){
	        $data = array(
	                    'user_id' => $this->input->post('user_id'),
						'chat' => $this->input->post('chat')
	                );
	        return $this->db->insert("chat",$data);
	    }
	}


 ?>