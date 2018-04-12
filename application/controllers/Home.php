<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Método principal do mini-crud
	 * @param nenhum
	 * @return view
	 */
	 public function __construct()
	 {
			 parent::__construct();
			 $this->load->model('m_cadastros');
	 }

	public function index()
	{

		 $data['cadastros'] = $this->m_cadastros->get();
    //$variaveis['cadastros'] = $this->load->model('m_cadastros');
		$this->load->view('v_home', $data);

	}
}
