<?php
defined('BASEPATH') or exit('no direct script access allowed');
class ModelUser extends CI_model
{
    public function simpanData($data = null)
    {
        $this-> db -> insert ('user',$data);
    }
    public function cekData($where = null)
    {
        return $this-> db -> get_where('user',$where);
    }
    public function getUserWhere($where = null)
    {
        return $this-> db -> get_where('user',$where);
    }

    public function cekUserAccess($where = null)
    {
        $this-> db ->select('*');
        $this-> db ->from('access_menu');
        $this-> db -> where($where);
        $this-> db ->get(); 
    }
    public function getUserLimit($where = null)
    {
        $this-> db ->select('*');
        $this-> db ->from('user');
        $this-> db -> limit(10, 0);
        $this-> db ->get(); 
    }




}