<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IsiUlang extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataIsiUlang()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_ulang=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('isi_ulang','id_ulang',$id_ulang)->row();
			        $data['detail']['id_ulang']= $tampil->id_ulang;
            		$data['detail']['tanggal']= $tampil->tanggal;
			$data['content']='IsiUlang/VFormUpdateIsiUlang';
		}
		else
		{	
			$data['DataIsiUlang']=$this->MSudi->GetData('Isi_ulang');
			$data['content']='IsiUlang/VIsiUlang';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddIsiUlang()
	{
		$data['content']='IsiUlang/VFormAddIsiUlang';
		$this->load->view('VBackend',$data);
	}
	public function AddDataIsiUlang()
	{
		 	 $add['id_ulang']=$this->input->post('id_ulang');
         	 $add['tanggal']= $this->input->post('tanggal');
         	 $this->MSudi->AddData('isi_ulang',$add);
        	 redirect(site_url('IsiUlang/DataIsiUlang'));
	}



	public function UpdateDataIsiUlang()
	{
		 $id_ulang=$this->input->post('id_ulang');
		 	 $update['tanggal']= $this->input->post('tanggal');
          	 $this->MSudi->UpdateData('isi_ulang','id_ulang',$id_ulang,$update);
		 redirect(site_url('IsiUlang/DataIsiUlang'));
	}


	public function DeleteDataIsiUlang()
	{
		 $id_ulang=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('isi_ulang','id_ulang',$id_ulang);
        	 redirect(site_url('IsiUlang/DataIsiUlang'));
	}

}