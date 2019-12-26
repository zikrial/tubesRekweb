<?php

class User_model extends CI_model
{
    public function topSaldo($total)
    {
        $data = [
            "saldo" => $this->input->post('saldo')
        ];
        return $this->db->insert('user', $data);
    }

    public function getSaldo()
    {
        $this->db->select('saldo');
        return $this->db->get('user');
    }
}
