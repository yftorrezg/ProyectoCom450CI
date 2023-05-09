<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Vender;
class Venders extends Controller{
    public function index()
	{
		$ventas = new Vender(); // se crea un objeto de la clase Libro
		$datos['ventas'] = $ventas->orderBy('id', 'ASC')->findAll(); // se obtienen todos los registros de la tabla libros

		$datos['cabecera'] = view('template/cabecera'); // se carga la vista cabecera 
		$datos['pie'] = view('template/pie'); // se carga la vista pie */
		return view('vender/vender', $datos); // se carga la vista listar con los datos
	}
	
}