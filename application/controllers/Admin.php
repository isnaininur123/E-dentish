<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');

		if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
	}

	function index(){
		$data['jml_dosen'] = $this->Admin_model->jumlahdosen();
		$data['jml_mahasiswa'] = $this->Admin_model->jumlahmahasiswa();
		$data['jml_pasien'] = $this->Admin_model->jumlahpasien();
		$this->load->view('admin/v_index',$data);
	}
	function show_dosen(){
		$data['dosen']=$this->Admin_model->show_dosen();
		$this->load->view('admin/v_dosen', $data);
	}

	function add_dosen(){
		$this->load->view('admin/v_add_dosen');
	}

	function save_dosen(){
	    $nama = $this->input->post('nama');
	    $username = $this->input->post('username');
	    $password = md5($this->input->post('password'));
	    $level = $this->input->post('level');
	    $nip = $this->input->post('nip');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $no_telepon = $this->input->post('no_telepon');
	    $tanggal = $this->input->post('tanggal');
    $this->Admin_model->save_dosen($nama,$username,$password,$level,$nip,$tempat,$ttl,$alamat,$no_telepon,$tanggal);
    $this->session->set_flashdata('flash', 'Di Tambahkan');
    redirect('admin/show_dosen');
  }

  	function delete_dosen(){
	    $id = $this->uri->segment(3);
	    $this->Admin_model->delete_dosen($id);
	    $this->session->set_flashdata('flash', 'Di Hapus');
	    redirect('admin/show_dosen');
	}

	function edit_dosen(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->edit_dosen($id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'id'    => $i['id'],
            'username'  => $i['username'],
            'nama'  => $i['nama'],
            'password'     => $i['password'],
            'level'  => $i['level'],
            'nip'     => $i['nip'],
            'tempat'  => $i['tempat'],
            'ttl'  => $i['ttl'],
            'alamat'     => $i['alamat'],
            'no_telepon'  => $i['no_telepon'],
            'tanggal'     => $i['tanggal']
        );
        $this->load->view('admin/v_edit_dosen',$data);
    }else{
        echo "Data Was Not Found";
    }
}

	function update_dosen(){
	    $id = $this->input->post('id');
		$nama = $this->input->post('nama');
	    $username = $this->input->post('username');
	    $password = md5($this->input->post('password'));
	    $level = $this->input->post('level');
	    $nip = $this->input->post('nip');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $no_telepon = $this->input->post('no_telepon');
	    $tanggal = $this->input->post('tanggal');
	    $this->Admin_model->update_dosen($id,$nama,$username,$password,$level,$nip,$tempat,$ttl,$alamat,$no_telepon,$tanggal);
	    $this->session->set_flashdata('flash', 'Di Update');
    redirect('admin/show_dosen');
  }




  	function show_mahasiswa(){
		$data['mahasiswa']=$this->Admin_model->show_mahasiswa();
		$this->load->view('admin/v_mahasiswa', $data);
	}

	function add_mahasiswa(){
		$this->load->view('admin/v_add_mahasiswa');
	}

	function save_mahasiswa(){
	    $nama = $this->input->post('nama');
	    $username = $this->input->post('username');
	    $password = md5($this->input->post('password'));
	    $nim = $this->input->post('nim');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $no_telepon = $this->input->post('no_telepon');
	   	$jenjang = $this->input->post('jenjang');
	    $tanggal = $this->input->post('tanggal');
    $this->Admin_model->save_mahasiswa($nama,$username,$password,$jenjang,$nim,$tempat,$ttl,$alamat,$no_telepon,$tanggal);
    $this->session->set_flashdata('flash', 'Di Tambahkan');
    redirect('admin/show_mahasiswa');
  }

  function edit_mahasiswa(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->edit_mahasiswa($id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'id'    => $i['id'],
            'username'  => $i['username'],
            'nama'  => $i['nama'],
            'password'     => $i['password'],
            'jenjang'  => $i['jenjang'],
            'nim'     => $i['nim'],
            'tempat'  => $i['tempat'],
            'ttl'  => $i['ttl'],
            'alamat'     => $i['alamat'],
            'no_telepon'  => $i['no_telepon'],
            'tanggal'     => $i['tanggal']
        );
        $this->load->view('admin/v_edit_mahasiswa',$data);
    }else{
        echo "Data Was Not Found";
    }
}
function update_mahasiswa(){
	    $id = $this->input->post('id');
		$nama = $this->input->post('nama');
	    $username = $this->input->post('username');
	    $password = md5($this->input->post('password'));
	    $jenjang = $this->input->post('jenjang');
	    $nim = $this->input->post('nim');
	    $tempat = $this->input->post('tempat');
	    $ttl = $this->input->post('ttl');
	    $alamat = $this->input->post('alamat');
	    $no_telepon = $this->input->post('no_telepon');
	    $tanggal = $this->input->post('tanggal');
	    $this->Admin_model->update_mahasiswa($id,$nama,$username,$password,$jenjang,$nim,$tempat,$ttl,$alamat,$no_telepon,$tanggal);
	    $this->session->set_flashdata('flash', 'Di Update');
    redirect('admin/show_mahasiswa');
  }

  function delete_mahasiswa(){
	    $id = $this->uri->segment(3);
	    $this->Admin_model->delete_mahasiswa($id);
	    $this->session->set_flashdata('flash', 'Di Hapus');
	    redirect('admin/show_mahasiswa');
	}


//	-------------- DIAGNOSA -------------
	function show_diagnosa(){
		$data['diagnosa']=$this->Admin_model->show_diagnosa();
		$this->load->view('admin/v_diagnosa', $data);
	}

	function add_diagnosa(){
		$this->load->view('admin/v_add_diagnosa');
	}

	function save_diagnosa(){
	    $kode = $this->input->post('kode');
	    $nama = $this->input->post('nama');
    $this->Admin_model->save_diagnosa($kode,$nama);
    $this->session->set_flashdata('flash', 'Di Tambahkan');
    redirect('admin/show_diagnosa');
  }

  function delete_diagnosa(){
	    $id = $this->uri->segment(3);
	    $this->Admin_model->delete_diagnosa($id);
	    $this->session->set_flashdata('flash', 'Di Hapus');
	    redirect('admin/show_diagnosa');
	}

	function edit_diagnosa(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->edit_diagnosa($id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'id'    => $i['id'],
            'kode'  => $i['kode'],
            'nama'  => $i['nama']
        );
        $this->load->view('admin/v_edit_diagnosa',$data);
    }else{
        echo "Data Was Not Found";
    }
}

	function update_diagnosa(){
	    $id = $this->input->post('id');
		$kode = $this->input->post('kode');
	    $nama = $this->input->post('nama');
	    $this->Admin_model->update_diagnosa($id,$kode,$nama);
	    $this->session->set_flashdata('flash', 'Di Update');
    redirect('admin/show_diagnosa');
  }

}