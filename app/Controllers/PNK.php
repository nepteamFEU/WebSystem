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
        $data['page_title'] = 'Gardenia Masterlist';
        $data['title'] = 'Gardenia Masterlist'; 
        $user_model = new \App\Models\PNK_model();
        $data['bata'] = $user_model->findAll(); 
        return view('masterlist_view', $data); 
        }

    /* public function login() 
    {
        if(session()->get('islogged'))
        {
            return redirect()->to('users/index');
        }
        $data['title'] = 'Log in';
        $data['page_title'] = 'Log in';
        $user_model = new \App\Models\PNK_model();
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
    */
    public function add()
    {
    $data['title'] = 'Add New Record';
    $data['page_title'] = 'Add New Record';
    helper('form');

    if ($this->request->getMethod() == 'POST') 
        {
            $post_data = $this->request->getPost(['fullname', 'purok','grupo','completeaddress','birthday']);

            $rules = 
            [
                'fullname' => 'required',
                'purok' => 'required|min_length[1]|max_length[2]',
                'grupo' => 'required|min_length[1]|max_length[2]',
                'completeaddress' => 'required',
                'birthday' => 'required'

            ];

            if ($this->validateData($post_data, $rules)) 
            {
                $user_model = new \App\Models\PNK_model();
                $user_model->insert($post_data);
                return redirect()->to('users/index');
            } 
            else 
            {
                $data['errors'] = $this->validator;
            }
        }
    return view('addbata_view', $data);
    }

    public function edit($id){
        $data['title'] = 'Edit Record';
        $data['page_title'] = 'Edit Record';
        helper('form');
        
        $user_model = new \App\Models\PNK_model();
        $data['bata'] = $PNK_model->find($id);
        
        if ($this->request->getMethod() == 'POST') {
            $post_data = $this->request->getPost(['fullname', 'purok','grupo','completeaddress','birthday']);
            $rules = [
                'fullname' => 'required',
                'purok' => 'required|min_length[1]|max_length[2]',
                'grupo' => 'required|min_length[1]|max_length[2]',
                'completeaddress' => 'required',
                'birthday' => 'required'
        ];
        if( $this->validateData($post_data,$rules))
        {
            // Update the user data
            $PNK_model->update($id, $post_data);
            return redirect()->to('PNK/index');
        }
        else
        {
            $data['errors'] = $this -> validator;
        }
    }
        return view('editbata_view', $data); // Create this view to edit user data
        }
    public function delete($id)
    {
        $PNK_model = new \App\Models\PNK_model();
        
        // Delete the user with the given ID
        $PNK_model->delete($id);
        
        return redirect()->to('PNK/index');
    }
 }
?>