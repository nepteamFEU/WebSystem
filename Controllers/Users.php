<?php
namespace App\Controllers;

class Users extends BaseController{

    public function index(){
        helper(['form']);
        if(!session()->get('islogged'))
        {
            $data['title'] = 'Log in';
            $data['page_title'] = 'Log in';
            return view('login', $data);
        }
        $data['page_title'] = 'Viewing Users List';
        $data['title'] = 'Viewing Users List'; 
        $user_model = new \App\Models\Users_model();
        $data['users'] = $user_model->findAll(); 
        return view('userslist_view', $data); 
        }

    public function login()
    {
        if(session()->get('islogged'))
        {
            return redirect()->to('users/index');
        }
        $data['title'] = 'Log in';
        $data['page_title'] = 'Log in';
        $user_model = new \App\Models\Users_model();
        helper('form');

        if($this->request->is('post'))
        {
            $login_data = $this->request->getPost(['username','password']);
            $user = $user_model->where('username',$login_data['username'])
                ->where('password', $login_data['password'])
                ->first();
            if(!$user)
            {
                session()->setFlashdata('nouser','Username and/or password is incorrect');
                return view('login',$data);
            }
            else
            {
                $data = [
                    'id'=> $user->id,
                    'fullname' => $user->fullname,
                    'islogged' => true
                ];
                session()->set($data);
                return redirect()->to('users/index');
            }
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('users'));
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