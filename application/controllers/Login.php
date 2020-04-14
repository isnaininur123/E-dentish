<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('v_login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->login_model->auth_dosen($username,$password);
 
        if($cek_dosen->num_rows() > 0){
                $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id']);
                    $this->session->set_userdata('ses_username',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['id']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('dosen');
                 }
 
        }else{ 
                    $cek_mahasiswa=$this->login_model->auth_mahasiswa($username,$password);
                    if($cek_mahasiswa->num_rows() > 0){
                    $data=$cek_mahasiswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','2');
                            $this->session->set_userdata('ses_id',$data['id']);
                            $this->session->set_userdata('ses_username',$data['username']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('mahasiswa');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url('login');
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah !!');
                            redirect($url);
                    }
        }
 
    }

    function register(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password1]',['matches' => 'Masukkan Password Yang Sama!!', 'min_length' => 'Password Terlalu Pendek!!']);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[6]|matches[password]');
        if ($this->form_validation->run() == false){
            $this->load->view('v_register');

        }else{
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
            ];
            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"> This is a primary alert—check it out!
</div>');
            redirect('login');
        }
        
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}