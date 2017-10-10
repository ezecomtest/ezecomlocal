<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_company_c extends CI_Controller {
	public $lang="", $get_lang ="";
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/career_m');
        $this->load->helper(array('form', 'url'));
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
		$this->our_company();
	}
	public function our_company(){
		if($this->lang==1){
		$data['title'] = "Our Company";
		$data['active'] = "Our Company";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['career'] = $this->career_m->get_career();
		$this->load->view('frontend/our_company',$data);
		}
		if($this->lang==2){
		$data['title'] = "អំពីក្រុមហ៊ុន";
		$data['active'] = "Our Company";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['career'] = $this->career_m->get_career();
		$this->load->view('frontend/our_company_kh_v',$data);
		}
		if($this->lang==3){
		$data['title'] = "Our Company";
		$data['active'] = "Our Company";
		$lan = $this->lang;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['career'] = $this->career_m->get_career();
		$this->load->view('frontend/our_company_ch_v',$data);
		}

		if($this->lang== ""){
		$data['title'] = "Our Company";
		$data['active'] = "Our Company";
		$lan = 1;
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['career'] = $this->career_m->get_career();
		$this->load->view('frontend/our_company',$data);
		}
		
	}
	
	public function company_profile(){
		if($this->lang==1){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/company_profile',$data);
		}
		if($this->lang==2){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/company_profile_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/company_profile_ch_v',$data);
		}

		if($this->lang== ""){
			$data['title'] = "Company Profile";
			$data['active'] = "Company Profile";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/company_profile',$data);
		}
	}
	
	public function qms(){
		if($this->lang==1){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/qms',$data);
		}
		if($this->lang==2){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/qms_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/qms_ch_v',$data);
		}

		if($this->lang== ""){
			$data['title'] = "Quality Management System";
			$data['active'] = "Quality Management System";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/qms',$data);
		}
	}
	
	public function childsafe(){
		if($this->lang==1){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/childsafe',$data);
		}
		if($this->lang==2){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/childsafe_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/childsafe_ch_v',$data);
		}

		if($this->lang== ""){
			$data['title'] = "Childsafe Certification";
			$data['active'] = "Childsafe Certification";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/childsafe',$data);
		}
	}
	
	public function partnerships(){
		if($this->lang==1){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/partnerships',$data);
		}
		if($this->lang==2){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/partnerships_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/partnerships_ch_v',$data);
		}

		if($this->lang== ""){
			$data['title'] = "Our Partnerships";
			$data['active'] = "Our Partnerships";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/partnerships',$data);
		}
	}
	
	public function social_responsibility(){
		if($this->lang==1){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/social_responsibility',$data);
		}
		if($this->lang==2){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/social_responsibility_kh_v',$data);
		}
		if($this->lang==3){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = $this->lang;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/social_responsibility_ch_v',$data);
		}

		if($this->lang== ""){
			$data['title'] = "Corporate Social Responsibility";
			$data['active'] = "Corporate Social Responsibility";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['career'] = $this->career_m->get_career();
			$this->load->view('frontend/social_responsibility',$data);
		}
	}
}
