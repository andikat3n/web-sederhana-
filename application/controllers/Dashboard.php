<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 defined('BASEPATH') OR exit ('NO direct script access allowed');
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $data['_view']='Dashboard';
   
     $this->load->view('templates/header',$data);
     $this->load->view('templates/sidebar',$data);
    $this->load->view('layouts/main',$data);
     $this->load->view('templates/footer');
      
     
    }
}