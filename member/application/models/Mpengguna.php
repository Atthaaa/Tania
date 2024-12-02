<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengguna extends CI_Model
{
    // Function untuk generate ID pengguna otomatis
    public function generate_id()
    {
        $this->db->select('id_pengguna');
        $this->db->order_by('id_pengguna', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengguna');

        if ($query->num_rows() > 0) {
            $last_id = $query->row()->id_pengguna;
            $last_number = (int) substr($last_id, 1);
            $new_number = $last_number + 1;
            return 'P' . str_pad($new_number, 3, '0', STR_PAD_LEFT);
        } else {
            return 'P001';
        }
    }

    public function validate_user($username, $password) {
        // Query to check user credentials
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        
        if ($query->num_rows() == 1) {
            $user = $query->row();
            
            // Verify password (assuming password_hash is used)
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        
        return false;
    }

    // Function untuk menyimpan data pengguna
    public function save($data)
    {
        return $this->db->insert('pengguna', $data);
    }
}
