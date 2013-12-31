<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backbone extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('backbone_model','', TRUE);
	}

	public function index()
	{
		$data['userdata']=$this->backbone_model->getData();
		$this->load->view('backbone_view',$data);
	}
}