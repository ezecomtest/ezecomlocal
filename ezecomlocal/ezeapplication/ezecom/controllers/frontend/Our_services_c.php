<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_services_c extends CI_Controller {
	 public $lang="", $get_lang ="";
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/homepage_m');
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
		$this->our_services();
	}

	public function our_services(){
		if($this->lang==1){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
		if($this->lang==2){
		$data['title'] = "អាជីវកម្ម";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_kh_v',$data);
		}
		if($this->lang==3){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_ch_v',$data);
		}

		if($this->lang== ""){
		$data['title'] = "Our Services";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_services_v',$data);
		}
	}

	public function enterprise_solutions(){
		if($this->lang ==1){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}
	if($this->lang==2){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_kh_v',$data);
		}
	if($this->lang==3){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_ch_v',$data);
		}
	if($this->lang == ""){
		$data['title'] = "Enterprise Solutions";
		$data['active'] = "Our Services";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/enterprise_solutions_v',$data);
	}

}

	public function beedoo_could_service_by_ezecom(){
		$data['title'] = "BeeDoo Could Service by Ezecom_ Don't just back up move forward!";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/beedoo_could_service_by_ezecom_v',$data);
	}
	
	public function iplc(){
		if($this->lang ==1){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}
		if($this->lang==2){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "IPLC";
			$data['active'] = "Our Services";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "IPLC";
			$data['active'] = "IPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/iplc',$data);
		}

	}
	
	public function dplc(){
		if($this->lang ==1){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
		if($this->lang==2){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "DPLC";
			$data['active'] = "DPLC";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/dplc',$data);
		}
	}
	
	public function mpls(){
		if($this->lang ==1){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
		if($this->lang==2){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "MPLS";
			$data['active'] = "MPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/mpls',$data);
		}
	}
	
	public function vpls(){
		if($this->lang ==1){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
		if($this->lang==2){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls_ch_v',$data);
		}
		if($this->lang == ""){
			$data['title'] = "VPLS";
			$data['active'] = "VPLS";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/vpls',$data);
		}
	}

	
}