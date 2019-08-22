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




    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[3]');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);

        } else {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'user_name' => $this->input->post('user_name'),
                'password' => $this->input->post('password'),
            ];
            $this->user_model->create($data);
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data =  [
                'errors' => validation_errors()
            ];
            
            $this->session->set_flashdata($data);

            redirect('home');
        } else {
            $user_name = $this->input->post('user_name');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($user_name, $password);

            if ($user_id) {
                $user_data = [
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'logged_in' => true
                ];

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'You are now logged in');

                $data['main_view'] = 'admin_view';

                $this->load->view('layouts/main', $data);
                // redirect('home/index');

            } else {
                $this->session->set_flashdata('login_failed', 'Sorry your login failed');
                redirect('home/index');
            }

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}