<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_traffice_camera_c extends CI_Controller {
	 public $lang="", $get_lang ="";
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->helper(array('form', 'url'));
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/live_camera_m');
        date_default_timezone_set("Asia/Bangkok");
		// get language from url
		$this->get_lang = $this->input->get("lang");
		  if($this->get_lang=="en"){
			  $this->lang = 1;
		  }
		   if($this->get_lang=="kh"){
			  $this->lang = 2;
		  }
		   if($this->get_lang=="ch"){
			  $this->lang = 3;
		  }
		  if($this->get_lang==""){
			  $this->lang = "";
		  }
    }

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->Live_traffice_camera();
	}
	public function Live_traffice_camera(){
		$data['title'] = "Live Traffic Camera";
		$data['active']="Live Traffic Camera";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['get_cameras']= $this->live_camera_m->get_camera_display();
		$this->load->view('frontend/live_traffice_camera_v',$data);

	}
	public function set_session_camera(){

		$page_session['rtmp'] = $this->input->post("rtmp");
		$page_session['token'] = $this->input->post("token");

		$page_session['name_camera'] = $this->input->post("camera_name");
        $this->session->set_userdata($page_session);
        echo $this->session->userdata("name_camera");

	}

}
