<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_daftar_m extends CI_Model {

	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
    }
    public function InsertData($tabel, $data) {
        $res = $this->db->insert($tabel, $data);
        return $res;
    }
    public  function getByID($tabel,$pk,$kode_masjid){
        $this->db->where($pk,$kode_masjid);
        return $this->db->get($tabel);
    }
    public function UpdateData($tabel, $data, $pk, $kode_masjid) {
        $this->db->where($pk,$kode_masjid);
        $res = $this->db->update($tabel,$data);
        return $res;
    }
    public function DeleteData($tabel, $pk, $kode_masjid) {
        $this->db->where($pk,$kode_masjid);
        $res = $this->db->delete($tabel);
        return $res;
    }


    public function cariDataPerusahaan($keyword)
 {
  $this->db->like('kode_masjid', $keyword);
  $query = $this->db->get('masjid');
  return $query->result();
 }


 public function getAllPerusahaan()
 {
  return $this->db->get('masjid')->result_array();
 }





}
