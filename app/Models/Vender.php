<?php 
namespace App\Models;
use CodeIgniter\Model;
class Vender extends Model {
    protected $table      = 'productos_vendidos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cantidad','precio'];
    protected $belongsTo = [
        'libro' => [
            'model' => 'Libro',
            'foreign_key' => 'id_libros'
        ],
        'venta' => [
            'model' => 'Venta',
            'foreign_key' => 'id_venta'
        ]
    ];
}