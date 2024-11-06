<?php
namespace App\Controllers;

class Users extends BaseController{

    public function index()
        {
        $data['page_title'] = 'Viewing Users List';
        $data['title'] = 'Viewing Users List'; 
        $user_model = new \App\Models\Users_model();
        $data['users'] = $user_model->findAll(); 
        return view('userslist_view', $data); 
        }

    public function login()
    {
        return view('login_view');
    }
    public function add(){
    $data['title'] = 'Add New User';
    $data['page_title'] = 'Add New User';
    helper('form');

    if ($this->request->getMethod() == 'POST') 
        {
            $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);

            $rules = 
            [
                'username' => 'required|is_unique[tblusers.username]',
                'password' => 'required|min_length[6]|max_length[16]',
                'fullname' => 'required',
                'email'    => 'required|valid_email|is_unique[tblusers.email]'
            ];

            if ($this->validateData($post_data, $rules)) 
            {
                $user_model = new \App\Models\Users_model();
                $user_model->insert($post_data);
                return redirect()->to('users/index');
            } 
            else 
            {
                $data['errors'] = $this->validator;
            }
        }
    return view('adduser_view', $data);
}

    public function edit($id){
        $data['title'] = 'Edit User';
        $data['page_title'] = 'Edit User';
        helper('form');
        
        $user_model = new \App\Models\Users_model();
        $data['user'] = $user_model->find($id);
        
        if ($this->request->getMethod() == 'POST') {
            $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);
            $rules = [
            'username' => 'required|is_unique[tblusers.username]',
            'password' => 'required|min_length[6]|max_length[16]',
            'fullname' => 'required',
            'email'    => 'required|valid_email|is_unique[tblusers.email]'
        ];
        if( $this->validateData($post_data,$rules))
        {
            // Update the user data
            $user_model->update($id, $post_data);
            return redirect()->to('users/index');
        }
        else
        {
            $data['errors'] = $this -> validator;
        }
    }
        return view('edituser_view', $data); // Create this view to edit user data
        }
    public function delete($id)
    {
        $user_model = new \App\Models\Users_model();
        
        // Delete the user with the given ID
        $user_model->delete($id);
        
        return redirect()->to('users/index');
    }
 }
?>