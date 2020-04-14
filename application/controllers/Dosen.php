<?php 

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Dosen_model');

		if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
	}

	function index(){
		$this->load->view('dosen/v_index');
	}

	function harian_d3(){
		$data['hariand3']=$this->Dosen_model->hariand3();
		$this->load->view('dosen/v_hariand3', $data);
	}
	function filter_d3(){
		
		$this->load->view('dosen/v_filterd3');
	}

	function total_d3(){
		$data['totald3']=$this->Dosen_model->totald3();
		$this->load->view('dosen/v_totald3', $data);
	}

	function harian_d4(){
		$data['hariand4']=$this->Dosen_model->hariand4();
		$this->load->view('dosen/v_hariand4', $data);
	}

	function filter_d4(){
		
		$this->load->view('dosen/v_filterd4');
	}

	function total_d4(){
		$data['totald4']=$this->Dosen_model->totald4();
		$this->load->view('dosen/v_totald4', $data);
	}
}