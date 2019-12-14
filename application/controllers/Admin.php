<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Pakaian_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pakaian'] = $this->Pakaian_model->getAllProduct();
        $data['title'] =  'Product Management';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pakaian'] = $this->db->get('pakaian')->result_array();
        // $this->form_validation->set_rules('Nama_Pakaian', 'Nama_Pakaian', 'required');
        // $this->form_validation->set_rules('Merk_Pakaian', 'Merk_Pakaian', 'required');
        // $this->form_validation->set_rules('Tipe_Pakaian', 'Tipe_Pakaian', 'required');
        // $this->form_validation->set_rules('Harga_Pakaian', 'Harga_Pakaian', 'required');
        // $this->form_validation->set_rules('Deskripsi_Pakaian', 'Deskripsi_Pakaian', 'required');

        // if ($this->form_validation->run() == false) {
        $data['title'] =  'Product Management';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');


        // } else {
        //$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
        //redirect('admin/index');
        $config['upload_path'] = './assets/img/pakaian/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['Gambar_Pakaian']['name'];
        $this->upload->initialize($config);

        if (!empty($_FILES['Gambar_Pakaian']['name'])) {
            if ($this->upload->do_upload('Gambar_Pakaian')) {
                $foto = $this->upload->data();
                $this->Pakaian_model->tambahDataPakaian($foto);
            }
        }
        redirect('admin');

        // }
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] =  'Role';

        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] =  'Role Access';

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
