<?php
namespace App\Models;
use CodeIgniter\Model;
class Products_model extends Model{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    protected $allowedFields = [
        'ProductName',
        'ProductAmount'
    ];
    protected $returnType = 'object';
}
