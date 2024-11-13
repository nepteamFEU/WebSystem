<?php
namespace App\Models;
use CodeIgniter\Model;
class Users_model extends Model{
    protected $table = 'pnktable';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fullname',
        'purok',
        'grupo',
        'completeaddress',
        'contactnumber',
        'birthday'
    ];
    protected $returnType = 'object';
}
