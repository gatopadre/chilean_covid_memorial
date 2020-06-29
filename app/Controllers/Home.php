<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper(['form', 'url']);
		$database = \Config\Database::connect();
		$isPost = $this->request->getMethod() == 'post';

		if ($isPost) {
			$form_data = $this->request->getRawInput();
			$recaptcha_validation = $this->validate_recaptcha($form_data['g-recaptcha-response']);

			$validations = $this->validate([
				'nombre' => 'required|min_length[4]|max_length[100]',
				'rut'  => 'required|min_length[9]|max_length[10]',
				'email' => 'required|valid_email',
				'telefono' => 'required|min_length[9]|max_length[12]',
				'relacion' => 'required',
				'g-recaptcha-response' => 'required'
			]);

			if (!$validations) {
				echo view('welcome_message', [
					'validation' => $this->validator,
					'isPost' => $isPost
				]);
			} else {

				$data = [
					'nombre' => $form_data['nombre'],
					'rut' => $form_data['rut'],
					'email' => $form_data['email'],
					'telefono' => $form_data['telefono'],
					'relacion' => $form_data['relacion'],
					'mensaje' => $form_data['mensaje'],
				];
				$database->table('form_data')->insert($data);
				if ($database->affectedRows() > 0) {
					#TODO: mejorar redaccion mensaje
					$succes = "Formulario guardado exitosamente, recibiras un correo con la confirmacion.";
					$isPost = false;
				}
				return view('welcome_message', [
					'isPost' => $isPost,
					'success' => $succes
				]);
			}
		} else {
			return view('welcome_message', ['isPost' => $isPost]);
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

	public function validate_recaptcha($recaptcha)
	{
		$google_url = "https://www.google.com/recaptcha/api/siteverify";
		$secret = 'IN_HERE_YOU_PLACE_YOUR_SECRET_KEY_NOT_THE_SITE_KEY';
		$ip = $_SERVER['REMOTE_ADDR'];
		$url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$res = curl_exec($curl);
		curl_close($curl);
		$res = json_decode($res, true);
		//reCaptcha success check
		if ($res['success']) {
			return TRUE;
		} else {
			$this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
			return FALSE;
		}
	}
}
