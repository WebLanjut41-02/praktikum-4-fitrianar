<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_daftar_m extends CI_Controller {
	public function index(){
        $data= $this->m_daftar_m->GetTable('masjid');
        $this->load->view('templates/header');
		$this->load->view('v_tampil', array('data'=>$data));
		$this->load->view('templates/footer');

	}
	public function insert()
	{
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$kode_masjid = $this->input->post('kode_masjid');
			$nama_m = $this->input->post('nama_m');
			$alamat_m = $this->input->post('alamat_m');
			$tahun_berdiri = $this->input->post('tahun_berdiri');
			$jumlah_tampungan = $this->input->post('jumlah_tampungan');
			$status_tanah = $this->input->post('status_tanah');

			$data = array('kode_masjid'=>$kode_masjid, 'nama_m'=>$nama_m, 'alamat_m'=>$alamat_m,'tahun_berdiri'=>$tahun_berdiri,'jumlah_tampungan'=>$jumlah_tampungan,'status_tanah'=>$status_tanah); //data yang akan di insert

			$this->m_daftar_m->InsertData('masjid', $data);
			
			redirect('c_daftar_m'); //
		}else{
			$this->load->view('v_insert'); //menampilkan views insertcrud
		}
	}

	public function delete(){
        $id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->m_daftar_m->DeleteData('masjid','kode_masjid',$kode_masjid); //menghapus data
        redirect('c_daftar_m'); //mengalihkan ke tampbali
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$kode_masjid = $this->input->post('kode_masjid');
			$nama_m = $this->input->post('nama_m');
			$alamat_m = $this->input->post('alamat_m');
			$tahun_berdiri = $this->input->post('tahun_berdiri');
			$jumlah_tampungan = $this->input->post('jumlah_tampungan');
			$status_tanah = $this->input->post('status_tanah');

			$data = array('kode_masjid'=>$kode_masjid, 'nama_m'=>$nama_m, 'alamat_m'=>$alamat_m,'tahun_berdiri'=>$tahun_berdiri,'jumlah_tampungan'=>$jumlah_tampungan,'status_tanah'=>$status_tanah); //data yang akan di update

			$this->m_daftar_m->UpdateData('masjid', $data,'kode_masjid',$kode_masjid); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('c_daftar_m'); //mengalihkan ke tampbali
		}else{
			$kode_masjid = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->m_daftar_m->getByID('masjid','kode_masjid',$kode_masjid)->row_array(); //menselect data yg akan di update
		
			$this->load->view('v_update',array('r'=>$data)); //menampilkan views updatecrud
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->m_daftar_m->cariDataPerusahaan($keyword);
    	$this->load->view('cari', $data);
    }



}
