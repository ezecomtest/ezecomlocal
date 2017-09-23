<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	 public function __construct()
    {
        parent::__construct();

    }

    public function get_level_user(){
    	$query = $this->db->get_where('tbl_user_level',array('level_published'=>1));
    	return $query->result();
    }

    public function do_saving_user($data){

    	$this->db->insert('tbl_user',$data);
    	$result = $this->db->affected_rows();
    	return $result;
    }
    public function do_published_user($id){
        $data = array(
        'user_published' => 0
        );
        $this->db->where('userid', $id);
        $this->db->update('tbl_user', $data);
        $result = $this->db->affected_rows();
        return $result;
    }
    public function do_profile_user($id){
        $query = $this->db->get_where('tbl_user',array('userid' => $id));
        return $query->row_array();
    }

    public function do_edit_user($id){
      
        $query = $this->db->query("SELECT *FROM tbl_user INNER JOIN tbl_user_level ON tbl_user.user_level_id = tbl_user_level.levelid WHERE tbl_user.user_published = 1 AND tbl_user_level.level_published = 1 AND tbl_user.userid = $id ");
        return $query->row_array();
    }
    public function do_update_password_user($id,$password,$user_modified_date){

        $data = array(
        'user_modified_date' => $user_modified_date,
        'user_password' => $password
        );

        $this->db->where('userid', $id);
        $this->db->update('tbl_user', $data);
        $result = $this->db->affected_rows();
        return $result;
    }
    // public function do_delete_user(){

    // }

    public function lists_all_user(){
        $query = $this->db->query("SELECT *FROM tbl_user INNER JOIN tbl_user_level ON tbl_user.user_level_id = tbl_user_level.levelid WHERE tbl_user.user_published = 1 AND tbl_user_level.level_published = 1");
        return $query->result();
    }
}
