<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MPembeli');
	}


public function DataPembeli()
	{

		if($this->uri->segment(4)=='view')
		{
			$id_pembeli=$this->uri->segment(3);
			$tampil=$this->MPembeli->GetDataWhere('id_pembeli',$id_pembeli)->row();
			        $data['detail']['id_pembeli']= $tampil->id_pembeli;
            		$data['detail']['id_login']= $tampil->id_login;
            		$data['detail']['jumlah']= $tampil->jumlah;
            		$data['detail']['id_pelanggan']= $tampil->id_pelanggan;
            		$data['detail']['tanggal_pembelian']= $tampil->tanggal_pembelian;
			$data['content']='Pembeli/VFormUpdatePembeli';
		}
		else
		{	
			$data['DataPembeli']=$this->MPembeli->GetData();
			$data['content']='Pembeli/VPembeli';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPembeli()
	{
		$data['content']='Pembeli/VFormAddPembeli';
		$data['list_user'] = $this->MPembeli->list_user();
		$data['list_pelanggan'] = $this->MPembeli->list_pelanggan();
		$this->load->view('VBackend',$data);
	}
	public function AddDataPembeli()
	{
		 	 $add['id_pembeli']=$this->input->post('id_pembeli');
         	 $add['id_login']= $this->input->post('id_login');
         	 $add['jumlah']= $this->input->post('jumlah');  
         	 $add['id_pelanggan']= $this->input->post('id_pelanggan');
         	 $add['tanggal_pembelian']= $this->input->post('tanggal_pembelian');
        	 $this->MPembeli->AddData('pembeli',$add);
        	 redirect(site_url('Pembeli/DataPembeli'));
	}



	public function UpdateDataPembeli()
	{
		 $id_pembeli=$this->input->post('id_pembeli');
		 	 $update['id_login']= $this->input->post('id_login');
         	 $update['jumlah']= $this->input->post('jumlah');
         	 $update['id_pelanggan']= $this->input->post('id_pelanggan');
         	 $update['tanggal_pembelian']= $this->input->post('tanggal_pembelian');
          	 $this->MPembeli->UpdateData('pembeli','id_pembeli',$id_pembeli,$update);
		 redirect(site_url('Pembeli/DataPembeli'));
	}


	public function DeleteDataPembeli()
	{
		 $id_pembeli=$this->uri->segment('3');
        	 $this->MPembeli->DeleteData('pembeli','id_pembeli',$id_pembeli);
        	 redirect(site_url('Pembeli/DataPembeli'));
	}

}