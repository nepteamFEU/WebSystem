<?php
namespace App\Controllers;

class Products extends BaseController {
    
    public function index() {
        $data['page_title'] = 'Viewing Products List';
        $data['title'] = 'Viewing Products List';
        $product_model = new \App\Models\Products_Model();
        $data['products'] = $product_model->findAll();
        return view('productslist_view', $data);
    }

    public function add()
        {
        $data['title'] = 'Add New Product';
        $data['page_title'] = 'Add New Product';
        if ($this->request->getMethod() == 'POST') 
        {
            $post_data = $this->request->getPost(['ProductName', 'ProductAmount']);
            $product_model = new \App\Models\Products_Model();
            $product_model-> insert($post_data);
            return redirect()->to('products/index'); // Redirect to products index
        }
        return view('addproduct_view', $data);
    }

    public function view($ProductID)
{
    $data['title'] = 'Viewing Product Details';
    $data['page_title'] = 'Viewing Product Details';
    $product_model = new \App\Models\Products_model();
    $data['product'] = $product_model->find($ProductID);

    if (!$data['product']) 
    {
        return redirect()->to(base_url('products'))->with('error', 'Product not found');
    }

    return view('productdetails_view', $data);
}


    public function edit($ProductID)
    {
        $data['title'] = 'Edit User';
        $data['page_title'] = 'Editing User';
        $product_model = new \App\Models\Products_model();
        $data['product'] = $product_model->find($ProductID);
        if ($this->request->getmethod()== 'POST')
            {
                $post_data = $this->request->getPost(['ProductName','ProductAmount']);
                $product_model->update($ProductID,$post_data);
                return redirect()->to('products/index');
            }
        return view('editproduct_view',$data);
    }
    public function delete($ProductID)
    {
        $product_model = new \App\Models\Products_model();
        $product_model ->delete($ProductID);
        return redirect()->to('products/index');
    }
}

