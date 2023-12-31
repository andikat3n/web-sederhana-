<?php
/* 
 * Generated by CRUDigniter v3.4 
 * www.crudigniter.com
 */
 
class Dosen extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    } 

    /*
     * Listing of dosen
     */
    function index()
    {
        $data['dosen'] = $this->Dosen_model->get_all_dosen();
        
        $data['_view'] = 'dosen/index';
         $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
         $this->load->view('layouts/main',$data);
        $this->load->view('templates/footer');
        
    }

    /*
     * Adding a new dosen
     */
    function add()
    {   
        $data['_view'] = 'dosen/Tambah_data';
         $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
         $this->load->view('dosen/add');
        $this->load->view('templates/footer');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_dosen' => $this->input->post('nama_dosen'),
				'jurusan' => $this->input->post('jurusan'),
                'nidn'=> $this->input->post('nidn')
            );
            
            $dosen_id = $this->Dosen_model->add_dosen($params);
            redirect('dosen/index');
        }
        else
        {            
            $data['_view'] = 'dosen/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a dosen
     */
    function edit($nidn)
    {   
        $data['_view'] = 'dosen/Edit_data';
        // check if the dosen exists before trying to edit it
        $data['dosen'] = $this->Dosen_model->get_dosen($nidn);

         $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
         $this->load->view('dosen/edit');
        $this->load->view('templates/footer');
        
        if(isset($data['dosen']['nidn']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_dosen' => $this->input->post('nama_dosen'),
					'jurusan' => $this->input->post('jurusan'),
                    'nidn' => $this ->input->post('nidn') 
                );

                $this->Dosen_model->update_dosen($nidn,$params);            
                redirect('dosen/index');
            }
            else
            {
                $data['_view'] = 'dosen/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The dosen you are trying to edit does not exist.');
    } 

    /*
     * Deleting dosen
     */
    function remove($nidn)
    {
        $dosen = $this->Dosen_model->get_dosen($nidn);

        // check if the dosen exists before trying to delete it
        if(isset($dosen['nidn']))
        {
            $this->Dosen_model->delete_dosen($nidn);
            redirect('dosen/index');
        }
        else
            show_error('The dosen you are trying to delete does not exist.');
    }
    
}
