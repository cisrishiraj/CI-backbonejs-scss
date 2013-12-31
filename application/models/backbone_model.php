<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backbone_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function getData(){

        $sql = 'SELECT * FROM user';
        $query = $this->db->query($sql);
        $usersdata = $query->result_array();
        return $usersdata[0];
	}

	public function getImageGal(){
		$query = $this->db->get('image');
		return $query->result() ;
	}
}