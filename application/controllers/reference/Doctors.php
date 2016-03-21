<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {


    public $settings;
    public $data;



    public function __construct()
    {
        parent::__construct();

        /*AUTH*/
        $this->load->library('ion_auth');
        $this->load->library('session');


        $this->load->model('doctors_model');

        $this->load->helper('url_helper');

        /*загружаем настройки*/
        $this->load->model('settings_model');
        $this->settings=$this->settings_model->get();

        //Загружаем языки
        $this->lang->load('doctors');
        //Описывает в лангве для страницы
        $this->data['pagetitle']=$this->lang->line('pagetitle');

        /*загружаем navbar*/
        $this->load->model('navbar_model');
        $this->data['navbar']=$this->navbar_model->Get();


        $this->data['text_h1']=$this->lang->line('text_h1');
        $this->data['text_description']=$this->lang->line('text_description');
        $this->data['pagetitle']=$this->lang->line('pagetitle');
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

            $this->load->view('reference/doctors',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }
        else
        {
            $this->data['doctors']=$this->doctors_model->GetAll();
            /*Заголовок общтй для всех*/
            $this->load->view('head',$this->data);
            /*навбар*/
            $this->load->view('navbar/admin_navbar',$this->data);

            $this->load->view('reference/doctors',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }

    }

}