<?php


class User_model extends CI_Model
{
    // public function get_users($user_id, $user_name)
    // {
    //     $this->db->where(
    //         [
    //             'id' => $user_id,
    //             'user_name' => $user_name,
    //         ]
    //     );
    //     $query = $this->db->get('users');
    //     // $query = $this->db->query('SELECT * FROM users;');
    //     return $query->result();
    // }    
    
    // public function create_users($data)
    // {
    //     $this->db->insert('users', $data);
    // }

    // public function update_users($data, $id)
    // {
    //     $this->db->where(['id' => $id]);
    //     $this->db->update('users', $data);
    // }

    // public function delete_users($id)
    // {
    //     $this->db->where(['id' => $id]);
    //     $this->db->delete('users');
    // }
    public function login_user($user_name, $password)
    {
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);

        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function create($data)
    {
        $this->db->insert('users', $data);
    }


    public function check_same_account($data)
    {
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('email', $data['email']);
    }
}