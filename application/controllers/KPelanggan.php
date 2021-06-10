<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KPelanggan extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataPelanggan()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_pelanggan=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('pelanggan','id_pelanggan',$id_pelanggan)->row();
			        $data['detail']['id_pelanggan']= $tampil->id_pelanggan;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['no_tlp']= $tampil->no_tlp;
            		$data['detail']['alamat']= $tampil->alamat;
			$data['content']='LevelKaryawan/VFormUpdatePelanggan';
		}
		else
		{	
			$data['DataPelanggan']=$this->MSudi->GetData('pelanggan');
			$data['content']='LevelKaryawan/VPelanggan';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPelanggan()
	{
		$data['content']='LevelKaryawan/VFormAddPelanggan';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPelanggan()
	{
		 	 $add['id_pelanggan']=$this->input->post('id_pelanggan');
         	 $add['nama']= $this->input->post('nama');
         	 $add['no_tlp']= $this->input->post('no_tlp');  
         	 $add['alamat']= $this->input->post('alamat');
        	 $this->MSudi->AddData('pelanggan',$add);
        	 redirect(site_url('KPelanggan/DataPelanggan'));
	}



	public function UpdateDataPelanggan()
	{
		 $id_pelanggan=$this->input->post('id_pelanggan');
		 	 $update['nama']= $this->input->post('nama');
         	 $update['no_tlp']= $this->input->post('no_tlp');
         	 $update['alamat']= $this->input->post('alamat');
          	 $this->MSudi->UpdateData('pelanggan','id_pelanggan',$id_pelanggan,$update);
		 redirect(site_url('KPelanggan/DataPelanggan'));
	}


	public function DeleteDataPelanggan()
	{
		 $id_pelanggan=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('pelanggan','id_pelanggan',$id_pelanggan);
        	 redirect(site_url('KPelanggan/DataPelanggan'));
	}

}