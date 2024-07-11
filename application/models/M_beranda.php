<?php

class M_beranda extends CI_Model
{
    public $table = 'tbl_beranda';

    //crud
    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function getbyid($id)
    {
        $this->db->where('id_profil', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }


    public function update($id, $data)
    {
        $this->db->where('id_profil', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id_profil', $id);
        $this->db->delete($this->table);
    }
}
