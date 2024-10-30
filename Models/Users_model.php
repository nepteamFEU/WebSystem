<?php
namespace App\Models;
use CodeIgniter\Model;
class Users_model extends Model{
    protected $table = 'tblusers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'password',
        'fullname',
        'email'
    ];
    protected $returnType = 'object';
}
