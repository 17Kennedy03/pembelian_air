<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPembeli extends CI_Model
{
     function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData()
    {
        $this->db->from('user as a, pelanggan as b, pembeli as c');
        $this->db->where('a.id_login = `c`.`id_login`');
        $this->db->where('b.id_pelanggan = `c`.`id_pelanggan`');
        $query= $this->db->get();
        return $query->result();
    }

    function GetDataWhere($id,$nilai)
    {
        $this->db->from('user as a, pelanggan as b, pembeli as c');
        $this->db->where('a.id_login = `c`.`id_login`');
        $this->db->where('b.id_pelanggan = `c`.`id_pelanggan`');
        $this->db->where($id,$nilai);
        $query= $this->db->get();
        return $query;
    }
     function list_user()
     {
        return $this->db->get('user')->result();
     }

     function list_pelanggan()
     {
        return $this->db->get('pelanggan')->result();
     }
}