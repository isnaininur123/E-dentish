<?php
class Admin_model extends CI_Model
{
    public function show_dosen()
    {
      $this->db->from('dosen');
      $this->db->where('level', '2');
  		$query=$this->db->get();
  		return $query->result();
    }

  function save_dosen($nama,$username,$password,$level,$nip,$tempat,$ttl,$alamat,$no_telepon,$tanggal){
    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'level' => $level,
      'nip' => $nip,
      'tempat' => $tempat,
      'ttl' => $ttl,
      'alamat' => $alamat,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal
    );
    $this->db->insert('dosen',$data);
  }

    public function delete_dosen($id){
      $this->db->where('id', $id);
      $this->db->delete('dosen');
    }

    function edit_dosen($id){
    $query = $this->db->get_where('dosen', array('id' => $id));
    return $query;
}

    function update_dosen($id,$nama,$username,$password,$level,$nip,$tempat,$ttl,$alamat,$no_telepon,$tanggal){
    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'level' => $level,
      'nip' => $nip,
      'tempat' => $tempat,
      'ttl' => $ttl,
      'alamat' => $alamat,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal
    );
    $this->db->where('id', $id);
    $this->db->update('dosen', $data);
}

  
  public function show_mahasiswa()
    {
      $this->db->from('mahasiswa');
      $query=$this->db->get();
      return $query->result();
    }

  function save_mahasiswa($nama,$username,$password,$jenjang,$nim,$tempat,$ttl,$alamat,$no_telepon,$tanggal){
    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'jenjang' => $jenjang,
      'nim' => $nim,
      'tempat' => $tempat,
      'ttl' => $ttl,
      'alamat' => $alamat,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal
    );
    $this->db->insert('mahasiswa',$data);
  }

  function edit_mahasiswa($id){
    $query = $this->db->get_where('mahasiswa', array('id' => $id));
    return $query;
}

  function update_mahasiswa($id,$nama,$username,$password,$jenjang,$nim,$tempat,$ttl,$alamat,$no_telepon,$tanggal){
    $data = array(
      'nama' => $nama,
      'username' => $username,
      'password' => $password,
      'jenjang' => $jenjang,
      'nim' => $nim,
      'tempat' => $tempat,
      'ttl' => $ttl,
      'alamat' => $alamat,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal
    );
    $this->db->where('id', $id);
    $this->db->update('mahasiswa', $data);
}

public function delete_mahasiswa($id){
      $this->db->where('id', $id);
      $this->db->delete('mahasiswa');
    }

function save_diagnosa($kode,$nama){
    $data = array(
      'kode' => $kode,
      'nama' => $nama
    );
    $this->db->insert('diagnosa',$data);
  }
public function delete_diagnosa($id){
      $this->db->where('id', $id);
      $this->db->delete('diagnosa');
    }

function edit_diagnosa($id){
    $query = $this->db->get_where('diagnosa', array('id' => $id));
    return $query;
}

function update_diagnosa($id,$kode,$nama){
    $data = array(
      'kode' => $kode,
      'nama' => $nama
    );
    $this->db->where('id', $id);
    $this->db->update('diagnosa', $data);
}

  public function jumlahdosen(){   
    $this->db->from('dosen');
    $this->db->where('level', '2');
    $query=$this->db->get();
    
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahmahasiswa(){   
    $this->db->from('mahasiswa');
    $query=$this->db->get();
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahpasien(){   
    $this->db->from('pasien');
    $query=$this->db->get();
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function show_diagnosa()
    {
      $this->db->from('diagnosa');
      $query=$this->db->get();
      return $query->result();
    }


}