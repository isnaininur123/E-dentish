<?php 

class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }

	}
	function index(){
		$this->load->view('mahasiswa/v_index');
	}

	function pasien(){
		$data['pasien']=$this->Mahasiswa_model->pasien();
		$this->load->view('mahasiswa/v_pasien', $data);
	}

	function add_pasien(){
		$data['dosen']=$this->Mahasiswa_model->dosen();
		$this->load->view('mahasiswa/v_add_pasien', $data);
	}

	function save_pasien(){
	    $nama = $this->input->post('nama');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $kelamin = $this->input->post('kelamin');
	    $no_telepon = $this->input->post('no_telepon');
	    $tanggal = $this->input->post('tanggal');
    	$this->Mahasiswa_model->save_pasien($nama,$no_telepon,$tanggal,$alamat,$kelamin,$tempat,$ttl);
    	$this->session->set_flashdata('flash', 'Di Tambahkan');
    redirect('mahasiswa/pasien');
  }

  function delete_pasien(){
	    $id = $this->uri->segment(3);
	    $this->Mahasiswa_model->delete_pasien($id);
	    $this->session->set_flashdata('flash', 'Di Hapus');
	    redirect('mahasiswa/pasien');
	}

	function edit_pasien(){
    $id = $this->uri->segment(3);
    $result = $this->Mahasiswa_model->edit_pasien($id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'id'    => $i['id'],
            'nama'  => $i['nama'],
            'no_telepon'  => $i['no_telepon'],
            'tanggal'     => $i['tanggal'],
            'alamat'  => $i['alamat'],
            'kelamin'     => $i['kelamin'],
            'tempat'  => $i['tempat'],
            'ttl'  => $i['ttl']
        );
        $this->load->view('mahasiswa/v_edit_pasien',$data);
    }else{
        echo "Data Was Not Found";
    }
}	
	
	function update_pasien(){
	    $id = $this->input->post('id');
		$nama = $this->input->post('nama');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $kelamin = $this->input->post('kelamin');
	    $no_telepon = $this->input->post('no_telepon');
	    $tanggal = $this->input->post('tanggal');
	    $this->Mahasiswa_model->update_pasien($id,$nama,$no_telepon,$tanggal,$alamat,$kelamin,$tempat,$ttl);
	    $this->session->set_flashdata('flash', 'Di Update');
    redirect('mahasiswa/pasien');
  }

  function perawatan_pasien(){
    $id = $this->uri->segment(3);
    $result = $this->Mahasiswa_model->perawatan_pasien($id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'nama'  => $i['nama']
        );
        $data['dosen']=$this->Mahasiswa_model->dosen();
        $data['diagnosa']=$this->Mahasiswa_model->diagnosa();
        $data['kode']=$this->Mahasiswa_model->kode();
        $this->load->view('mahasiswa/v_perawatan_pasien',$data,);
    }else{
        echo "Data Was Not Found";
    }
}
	
	function save_perawatan(){
	    $id_mahasiswa = $this->input->post('id_mahasiswa');
	    $id_dosen = $this->input->post('id_dosen');
	    $nama = $this->input->post('nama');
	    $diagnosa = $this->input->post('diagnosa');
	    $keluhan = $this->input->post('keluhan');
	    $kode_gigi = $this->input->post('kode_gigi');
	    $tindakan = $this->input->post('tindakan');
	    $tanggal = $this->input->post('tanggal');
    	$this->Mahasiswa_model->save_perawatan($id_mahasiswa,$tindakan,$kode_gigi,$tanggal,$diagnosa,$keluhan,$id_dosen,$nama);
    	$this->session->set_flashdata('flash', 'Di Tambahkan');
    redirect('mahasiswa/pasien');
  }

  function laporan(){
		$data['laporan']=$this->Mahasiswa_model->laporan();
		$this->load->view('mahasiswa/v_laporan', $data);
	}

	function get_gigi(){
		$kode=$this->input->post('kode_gigi');
		$data=$this->Mahasiswa_model->get_gigi($kode_gigi);
		echo json_encode($data);
	}
	
}