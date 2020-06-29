<?php namespace App\Controllers;

class Home extends BaseController
{	
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function save_form()
	{
		$db = \Config\Database::connect();
		$form_data = $this->request->getRawInput();
		// $files = $this->request->getFiles();
		// var_dump($form_data, $files); die();

		// aqui guardara la data en la bd
		$data = [
			'nombre' => $form_data['nombre'],
			'rut' => $form_data['rut'],
			'email' => $form_data['email'],
			'telefono' => $form_data['telefono'],
			'relacion' => $form_data['relacion'],
			'mensaje' => $form_data['mensaje'],
		];
		$insert_result = $db->table('form_data')->insert($data);
				 
		echo true;
	}
}
