<?php


class Users extends CI_Controller
{
    
    public function show($user_id)
    {
        $data['results'] = $this->user_model->get_users($user_id, 'rico');
        
        $this->load->view('user_view', $data);
    }

    public function insert()
    {
        $user_name = 'peter';
        $password = 'secrete';
        $this->user_model->create_users(
            [
                'user_name' => $user_name,
                'password' => $password,
            ]
        );
    }

    public function update()
    {
        $id = 3;
        $user_name = 'william';
        $password = 'not so secrete';
        $this->user_model->update_users(
            [
                'user_name' => $user_name,
                'password' => $password,
            ],
            $id
        );
    }

    public function delete(){
        $id = 3;
        $this->user_model->delete_users($id);
    }
}