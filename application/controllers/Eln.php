<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eln extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        $client = new
        SoapClient(
            "http://smevtest.fss.ru/ln/ln?wsdl"
        );


        /*Функция saveLN
        1	ogrn	ОГРН МО	+	Текст
2	inn	ИНН МО	+	Текст
3	licenseNumber	Номер лицензии МО	+	Текст
4	lnInfo	Список номеров и контрольных сумм ЭЛН, передаваемых во вложении	+	Список

        */
		//$data['xml']= $client->saveLn('234234234','232323','123','123123,5454,4545,4545');
		$data['xml']= 'test';

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('eln_main',$data);
		$this->load->view('footer');
	}
}
