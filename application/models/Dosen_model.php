<?php
class Dosen_model extends CI_Model
{

  public function hariand3()
    {
    $tgl = date("d-m-Y");
    $this->db->select('perawatan.id,perawatan.id_mahasiswa, perawatan.id_dosen, perawatan.nama, perawatan.diagnosa,perawatan.keluhan, perawatan.kode_gigi, perawatan.tindakan, perawatan.tanggal, dosen.nama as dosen, mahasiswa.nama as mahasiswa');
    $this->db->from('perawatan');
    $this->db->join('dosen','dosen.id=perawatan.id_dosen');
    $this->db->join('mahasiswa','mahasiswa.id=perawatan.id_mahasiswa');
    $this->db->where('perawatan.tanggal', $tgl);
    $this->db->where('mahasiswa.jenjang', 'D3');
    $this->db->where('perawatan.tanggal', $tgl);
	$query=$this->db->get();
	return $query->result();
    }

    public function totald3()
    {
    $this->db->select('perawatan.id,perawatan.id_mahasiswa, perawatan.id_dosen, perawatan.nama, perawatan.diagnosa,perawatan.keluhan, perawatan.kode_gigi, perawatan.tindakan, perawatan.tanggal, dosen.nama as dosen, mahasiswa.nama as mahasiswa');
    $this->db->from('perawatan');
    $this->db->join('dosen','dosen.id=perawatan.id_dosen');
    $this->db->join('mahasiswa','mahasiswa.id=perawatan.id_mahasiswa');
    $this->db->where('perawatan.id_dosen',$this->session->userdata('ses_id'));
    $this->db->where('mahasiswa.jenjang', 'D3');
	$query=$this->db->get();
	return $query->result();
    }


    public function hariand4()
    {
    $tgl = date("d-m-Y");
    $this->db->select('perawatan.id,perawatan.id_mahasiswa, perawatan.id_dosen, perawatan.nama, perawatan.diagnosa,perawatan.keluhan, perawatan.kode_gigi, perawatan.tindakan, perawatan.tanggal, dosen.nama as dosen, mahasiswa.nama as mahasiswa');
    $this->db->from('perawatan');
    $this->db->join('dosen','dosen.id=perawatan.id_dosen');
    $this->db->join('mahasiswa','mahasiswa.id=perawatan.id_mahasiswa');
    $this->db->where('perawatan.tanggal', $tgl);
    $this->db->where('perawatan.id_dosen',$this->session->userdata('ses_id'));
    $this->db->where('mahasiswa.jenjang', 'D4');
	$query=$this->db->get();
	return $query->result();
    }

    public function totald4()
    {
    $this->db->select('perawatan.id,perawatan.id_mahasiswa, perawatan.id_dosen, perawatan.nama, perawatan.diagnosa,perawatan.keluhan, perawatan.kode_gigi, perawatan.tindakan, perawatan.tanggal, dosen.nama as dosen, mahasiswa.nama as mahasiswa');
    $this->db->from('perawatan');
    $this->db->join('dosen','dosen.id=perawatan.id_dosen');
    $this->db->join('mahasiswa','mahasiswa.id=perawatan.id_mahasiswa');
    $this->db->where('perawatan.id_dosen',$this->session->userdata('ses_id'));
    $this->db->where('mahasiswa.jenjang', 'D4');
	$query=$this->db->get();
	return $query->result();
    }
 
}