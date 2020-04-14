<?php
class Mahasiswa_model extends CI_Model
{

  public function pasien()
    {
    $this->db->from('pasien');
		$query=$this->db->get();
		return $query->result();
    }

   function save_pasien($nama,$no_telepon,$tanggal,$alamat,$kelamin,$tempat,$ttl){
    $data = array(
      'nama' => $nama,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal,
      'alamat' => $alamat,
      'kelamin' => $kelamin,
      'tempat' => $tempat,
      'ttl' => $ttl
    );
    $this->db->insert('pasien',$data);
  }

  	public function delete_pasien($id){
      $this->db->where('id', $id);
      $this->db->delete('pasien');
    }

    function edit_pasien($id){
    $query = $this->db->get_where('pasien', array('id' => $id));
    return $query;
}	

	function update_pasien($id,$nama,$no_telepon,$tanggal,$alamat,$kelamin,$tempat,$ttl){
    $data = array(
      'nama' => $nama,
      'no_telepon' => $no_telepon,
      'tanggal' => $tanggal,
      'alamat' => $alamat,
      'kelamin' => $kelamin,
      'tempat' => $tempat,
      'ttl' => $ttl
    );
    $this->db->where('id', $id);
    $this->db->update('pasien', $data);
}

function perawatan_pasien($id){
    $query = $this->db->get_where('pasien', array('id' => $id));
    return $query;
}

function save_perawatan($id_mahasiswa,$tindakan,$kode_gigi,$tanggal,$diagnosa,$keluhan,$id_dosen,$nama){
    $data = array(
      'id_mahasiswa' => $id_mahasiswa,
      'nama' => $nama,
      'tindakan' => $tindakan,
      'kode_gigi' => $kode_gigi,
      'tanggal' => $tanggal,
      'diagnosa' => $diagnosa,
      'keluhan' => $keluhan,
      'id_dosen' => $id_dosen
    );
    $this->db->insert('perawatan',$data);
  }

  public function laporan()
    {
    $this->db->select('perawatan.id,perawatan.id_mahasiswa, perawatan.id_dosen, perawatan.nama, perawatan.diagnosa,perawatan.keluhan, perawatan.kode_gigi, perawatan.tindakan, perawatan.tanggal, dosen.nama as dosen, diagnosa.nama as diagnosaa');
    $this->db->from('perawatan');
    $this->db->join('dosen','dosen.id=perawatan.id_dosen');
    $this->db->join('diagnosa','diagnosa.id=perawatan.diagnosa');
    $this->db->where('id_mahasiswa',$this->session->userdata('ses_id'));
		$query=$this->db->get();
		return $query->result();
    }

    public function dosen()
    {
    $this->db->from('dosen');
    $this->db->where('level', '2');
    $query=$this->db->get();
    return $query->result();
    }

    public function diagnosa()
    {
    $this->db->from('diagnosa');
    $query=$this->db->get();
    return $query->result();
    }

    public function kode()
    {
    $this->db->from('gigi');
    $query=$this->db->get();
    return $query->result();
    }

    function get_gigi($kode){
    $hsl=$this->db->query("SELECT * FROM gigi WHERE kode_gigi='$kode_gigi'");
    if($hsl->num_rows()>0){
      foreach ($hsl->result() as $data) {
        $hasil=array(
          'kode_gigi' => $data->kode_gigi,
          'deskripsi' => $data->deskripsi,
          );
      }
    }
    return $hasil;
  }
 
}