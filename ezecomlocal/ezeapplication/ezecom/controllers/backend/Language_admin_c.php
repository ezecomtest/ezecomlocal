<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_admin_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("backend/language_admin_m");
		if($this->session->userdata('level') !== 'superuser'){
        	redirect('administrator');
        }
	}

	public function language_list()
	{
		$data['title'] = "Language";
		$data['languages'] = $this->language_admin_m->get_language();
		$this->load->view('backend/language/language_list_admin_v', $data);
	}

	public function form_add_language()
	{
		$data['title'] = "Language";
		$this->load->view('backend/language/language_add_admin_v', $data);
	}

	public function add_language()
	{
		$data = $this->input->post();
		if ($this->language_admin_m->insert_language($data)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been added!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to add!</div>');
		}
		redirect('backend/language_admin_c/language_list');
	}

	public function form_edit_language($id)
	{
		$data['title'] = "Language";
		$data['language']=$this->language_admin_m->get_language_byID($id);
		$this->load->view('backend/language/language_edit_admin_v', $data);
	}

	public function update_language($id)
	{
		$data = $this->input->post();
		$cri = array('lang_id'=>$id);
		if ($this->language_admin_m->update_language($data,$cri)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been updated!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to update!</div>');
		}
		redirect('backend/language_admin_c/language_list');
	}

	public function delete_language($id)
	{
		$data = array('lang_is_delete'=>1);
		$cri = array('lang_id'=>$id);
		if ($this->language_admin_m->update_language($data,$cri)==true){
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in">Success: Data has been deleted!</div>');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in">Error: Data has been fail to delete!</div>');
		}
		redirect('backend/language_admin_c/language_list');
	}
}