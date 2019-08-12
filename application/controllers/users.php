<?php


class Users extends CI_Controller
{
    
    // public function show($user_id)
    // {
    //     $data['results'] = $this->user_model->get_users($user_id, 'rico');
        
    //     $this->load->view('user_view', $data);
    // }

    // public function insert()
    // {
    //     $user_name = 'peter';
    //     $password = 'secrete';
    //     $this->user_model->create_users(
    //         [
    //             'user_name' => $user_name,
    //             'password' => $password,
    //         ]
    //     );
    // }

    // public function update()
    // {
    //     $id = 3;
    //     $user_name = 'william';
    //     $password = 'not so secrete';
    //     $this->user_model->update_users(
    //         [
    //             'user_name' => $user_name,
    //             'password' => $password,
    //         ],
    //         $id
    //     );
    // }

    // public function delete(){
    //     $id = 3;
    //     $this->user_model->delete_users($id);
    // }

    public function login()
    {
        // $this->load->view();
        // echo "this works";
        // echo $_POST["user_name"];
        // echo $this->input->post('user_name');
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required|mini_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|mini_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|mini_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data =  [
                'errors' => validation_errors()
            ];
            
            $this->session->set_flashdata($data);

            redirect('home');
        }
    }
}