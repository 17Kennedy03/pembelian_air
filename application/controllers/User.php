<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}


public function DataUser()
	{

		

		if($this->uri->segment(4)=='view')
		{
			$id_login=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('user','id_login',$id_login)->row();
			        $data['detail']['id_login']= $tampil->id_login;
            		$data['detail']['username']= $tampil->username;
            		$data['detail']['password']= $tampil->password;
            		$data['detail']['level']= $tampil->level;
            		$data['detail']['nama_karyawan']= $tampil->nama_karyawan;
			$data['content']='USer/VFormUpdateUser';
		}
		else
		{	
			$data['DataUser']=$this->MSudi->GetData('user');
			$data['content']='User/VUser';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddUser()
	{
		$data['content']='User/VFormAddUser';
		$this->load->view('VBackend',$data);
	}
	public function AddDataUser()
	{
		 	 $add['id_login']=$this->input->post('id_login');
         	 $add['username']= $this->input->post('username');
         	 $add['password']= $this->input->post('password');  
         	 $add['level']= $this->input->post('level');
         	 $add['nama_karyawan']= $this->input->post('nama_karyawan');
        	 $this->MSudi->AddData('user',$add);
        	 redirect(site_url('User/DataUser'));
	}



	public function UpdateDataUser()
	{
		 $id_login=$this->input->post('id_login');
		 	 $update['username']= $this->input->post('username');
         	 $update['password']= $this->input->post('password');
         	 $update['level']= $this->input->post('level');
         	 $update['nama_karyawan']= $this->input->post('nama_karyawan');
          	 $this->MSudi->UpdateData('user','id_login',$id_login,$update);
		 redirect(site_url('User/DataUser'));
	}


	public function DeleteDataUser()
	{
		 $id_login=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('user','id_login',$id_login);
        	 redirect(site_url('User/DataUser'));
	}

}