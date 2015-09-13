<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $this->data['posts'] = $this->select->select();  
         // get data from database from select.php file in models

		$this->load->view('blog_view',$this->data);
	}

	public function save(){
		// function to save post
		$this->load->database(); 
		$title = $this->input->post('title');
			$post = $this->input->post('post');


		$data = array(
	   'title' => $title ,
	   'post' => $post 

		);



	$this->db->insert('Posts', $data); 
	// insert data in databse
		redirect('/'); // redirect to homepage
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */