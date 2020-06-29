<?php namespace App\Controllers;

class Home extends BaseController
{	
	public function index()
	{
		helper(['form', 'url']);

		$validate = [
            'nombre' => 'required|min_length[4]|max_length[100]',
            'rut'  => 'required|min_length[9]|max_length[10]',
            'correo' => 'required|'
        ];

        if (! $this->validate($validate))
        {
            echo view('welcome_message', [
                'validation' => $this->validator
            ]);
        }
        else
        {
            return view('welcome_message');
        }		
	}

	//--------------------------------------------------------------------

	public function save_form()
	{
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
		$insert_result = $this->database->table('form_data')->insert($data);
				 
		echo true;
	}
}
