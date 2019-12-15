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
        $data['title'] =  'Product Management';

        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/tubesRekweb/admin/index';
        $config['total_rows'] = $this->Pakaian_model->countAllProduct();
        $config['per_page'] = 3;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&raquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['pakaian'] = $this->Pakaian_model->getProduct($config['per_page'], $data['start']);
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
        // $data['title'] =  'Product Management';
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('admin/index', $data);
        // $this->load->view('templates/footer');


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
