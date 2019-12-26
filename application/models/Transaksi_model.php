<?php

class Transaksi_model extends CI_model
{
    public function getTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function tambahTransaksi()
    {
        $data = [
            "Nama_Pakaian" => $this->input->post('Nama_Pakaian'),
            "Jenis_Pakaian" => $this->input->post('Jenis_Pakaian'),
            "Ukuran_Pakaian" => $this->input->post('Ukuran_Pakaian'),
            "Jumlah_Pakaian" => $this->input->post('Jumlah_Pakaian'),
            "Total_Harga" => $this->input->post('Total_Harga') * $this->input->post('Jumlah_Pakaian'),
        ];
        return $this->db->insert('transaksi', $data);
    }

    public function hapusDataTransaksi($Id)
    {
        $this->db->where('Id_Transaksi', $Id);
        $this->db->delete('transaksi');
    }

    public function hapusProduk()
    {
        $query = "TRUNCATE TABLE transaksi";
        $this->db->query($query);
    }
}
