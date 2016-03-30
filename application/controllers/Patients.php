<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		/*AUTH*/
		$this->load->library('ion_auth');
		$this->load->library('session');

		$this->load->helper('url_helper');

		/*описания*/
		$this->lang->load('patients');

		$this->data['text_h1']=$this->lang->line('text_h1');
		$this->data['text_description']=$this->lang->line('text_description');
		$this->data['pagetitle']=$this->lang->line('pagetitle');

		/*загружаем настройки*/
		$this->load->model('settings_model');
		$this->settings=$this->settings_model->get();

		//Описывает в лангве для страницы
		$this->data['pagetitle']=$this->lang->line('pagetitle');

		/*загружаем navbar*/
		$this->load->model('navbar_model');
		$this->load->model('navbar_model');
		$this->data['navbar']=$this->navbar_model->Get();

		/*Пациент*/
		$this->load->model('patient_model');

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		/*Настройки валидатора*/
		$this->form_validation->set_rules('surname', 'Фамилия', 'required');
		//$this->form_validation->set_rules('doc_date', 'Дата выдачи документа', 'required');
		$this->form_validation->set_rules('secname', 'Отчество', 'required');
		$this->form_validation->set_rules('name', 'Имя', 'required',
			array('required' => 'Поле %s, должно быть заполненно .')
		);

	}
	public function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('http://'.$_SERVER['SERVER_NAME'].'/auth/login', 'refresh');
		}
		/*Если не админ то подгружаем user view*/
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			/*Заголовок общтй для всех*/
			$this->load->view('head',$this->data);
			/*навбар*/
			$this->load->view('navbar/admin_navbar',$this->data);

			$this->load->view('patients/index',$this->data);
			/*футер общий для всех*/
			$this->load->view('footer');
		}
		else
		{
			$this->data['patients']=$this->patient_model->GetAll();;
			/*иначе подгружаем интерфейс админа*/
			/*todo подумать об инетрефейсе админа*/
			$this->load->view('nf/nf_head',$this->data);
			$this->load->view('navbar/nf_admin_topnav',$this->data);
			/*шаблон страницы*/
			$this->load->view('patients/index',$this->data);

			$this->load->view('navbar/nf_admin',$this->data);

			$this->load->view('nf/nf_footer',$this->data);


		}
	}

	/*редактирование пациента*/
	function edit($patient_id)
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('http://' . $_SERVER['SERVER_NAME'] . '/auth/login', 'refresh');
		} /*Если не админ то подгружаем user view*/
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{

		}
		else {

			/*Получаем текущее значение из базы*/
			$patient=$this->patient_model->get($patient_id);

			$this->data['patient']=$patient;
			$this->data['surname'] = $this->form_validation->set_value('surname', $patient->surname);
			$this->data['secname'] =$this->form_validation->set_value('secname', $patient->secname);
			$this->data['name'] = $this->form_validation->set_value('name', $patient->name);
			//$this->data['doc_date'] = $this->form_validation->set_value('doc_date', $patient->patient_doc->doc_date);
			$this->data['sex'] = $patient->sex;


			if ($this->form_validation->run() == FALSE) {
				$this->load->view('nf/nf_head',$this->data);
				$this->load->view('navbar/nf_admin_topnav',$this->data);
				/*шаблон страницы*/
				$this->load->view('patients/edit', $this->data);

				$this->load->view('navbar/nf_admin',$this->data);

				$this->load->view('nf/nf_footer',$this->data);


			}
			else
			{
				$this->patient_model->update($patient_id);
				/*Редиректим на список выбора*/
				redirect('/patients');
			}
		}
	}

	/*редактирование пациента*/
	function add()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('http://' . $_SERVER['SERVER_NAME'] . '/auth/login', 'refresh');
		} /*Если не админ то подгружаем user view*/
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{

		}
		else {


			if ($this->form_validation->run() == FALSE) {
				/*иначе подгружаем интерфейс админа*/
				/*todo подумать об инетрефейсе админа*/
				$this->load->view('nf/nf_head',$this->data);
				$this->load->view('navbar/nf_admin_topnav',$this->data);
				/*шаблон страницы*/
				$this->load->view('patients/add');

				$this->load->view('navbar/nf_admin',$this->data);

				$this->load->view('nf/nf_footer',$this->data);


			}
			else
			{
				$this->patient_model->insert();
				redirect('/patients');
			}
		}
	}

}
