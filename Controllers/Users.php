<?php
namespace App\Controllers;

class Users extends BaseController{

    public function index(){
        $data['page_title'] = 'Viewing Users List';
        $data['title'] = 'Viewing Users List'; // this is to pass the value to title on view

         

        // Create an instance of your model
        $user_model = new \App\Models\Users_model();
        // Use the the built-in query builder of the model class
        $data['users'] = $user_model->findAll(); // show data from table

        return view('userslist_view', $data); // call this view with data to be pass
        }
        public function add()
{
    $data['title'] = 'Add New User';
    $data['page_title'] = 'Add New User';
    helper('form');

    if ($this->request->getMethod() == 'POST') {
        // Capture all data entered into the form
        $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);

        $rules = [
            'username' => 'required|is_unique[tblusers.username]',
            'password' => 'required|min_length[6]|max_length[16]',
            'fullname' => 'required',
            'email'    => 'required|valid_email|is_unique[tblusers.email]'
        ];

        if ($this->validateData($post_data, $rules)) {
            // If validation passed
            $user_model = new \App\Models\Users_model();
            $user_model->insert($post_data);
            return redirect()->to('users/index');
        } else {
            // If validation failed
            $data['errors'] = $this->validator;
        }
    }

    return view('adduser_view', $data);
}

        public function edit($id)
            {
            $data['title'] = 'Edit User';
            $data['page_title'] = 'Edit User';
            
            $user_model = new \App\Models\Users_model();
            $data['user'] = $user_model->find($id);
            
            if ($this->request->getMethod() == 'POST') {
            // Capture all data entered into the form
            $post_data = $this->request->getPost(['username', 'password', 'fullname', 'email']);
            
            // Update the user data
            $user_model->update($id, $post_data);
            return redirect()->to('users/index');
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