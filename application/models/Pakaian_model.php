<?php

class Pakaian_model extends CI_model
{
    public function getAllProduct()
    {
        return $this->db->get('pakaian')->result_array();
    }
    
    public function getAllProductJenis($jenis)
    {
        return $this->db->get_where('pakaian', ['Jenis_Pakaian'=> $jenis])->result_array();
    }

    
    public function getProduct($limit, $start)
    {
        return $this->db->get('pakaian', $limit, $start)->result_array();
    }

    public function countAllProduct()
    {
        return $this->db->get('pakaian')->num_rows();
    }

    public function tambahDataPakaian($foto)
    {
        $data = [
            "Nama_Pakaian" => $this->input->post('Nama_Pakaian'),
            "Merk_Pakaian" => $this->input->post('Merk_Pakaian'),
            "Jenis_Pakaian" => $this->input->post('Jenis_Pakaian'),
            "Harga_Pakaian" => $this->input->post('Harga_Pakaian'),
            "Deskripsi_Pakaian" => $this->input->post('Deskripsi_Pakaian'),
            'Gambar_Pakaian'  => $foto['file_name'],
        ];
        return $this->db->insert('pakaian', $data);
    }

<<<<<<< HEAD
    public function hapusDataAdmin($Id_Pakaian) 
    {
        $this->db->where('Id_Pakaian', $Id_Pakaian);
        $this->db->delete('pakaian');
    }

=======
    public function getPakaianbyid($id){
        return $this->db->get_where('pakaian', ['Id_Pakaian'=> $id])->row_array();
    }
>>>>>>> 385fd12c41c91feedcb71f4a15b812190b80c168
}
