<?php 
	
	/**
	* 
	*/

	class Chat extends CI_Controller {

		public function index()
		{	

			$query = $this->db->get('chat')->result();

			$this->load->view('chat',array('data'=>$query));
		}

		public function send()
		{
			$data = array(
				'user_id' => $this->input->post('user_id'),
				'chat' => $this->input->post('chat')
			);

			$this->db->insert('chat', $data); 

			$query = $this->db->get('chat')->result();

			$this->load->view('chat',array('data'=>$query));

		}

		public function ajax_insert(){

			$this->load->model("Chaty");
	        if(isset($_POST['user_id'])){
	            return $this->Chaty->insert();

	        }
		}
	}



 ?>