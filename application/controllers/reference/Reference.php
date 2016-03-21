<?php

/*Универсальный конртроллер для спаравочников*/

/*
CREATE TABLE IF NOT EXISTS `med_reference_patient_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `caption` text COLLATE utf8_bin,
  `description` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Категория больного';
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {

    /*тут хранятся настройки, закгружаются в конструкторе*/
    public $settings;
    public $data;

    public function __construct()
    {
        parent::__construct();

        /*AUTH*/
        $this->load->library('ion_auth');
        $this->load->library('session');

        $this->load->helper('url_helper');

        //Загружаем языки
        $this->lang->load('reference');

        $this->load->model('reference_model');


        $this->data['text_h1']=$this->lang->line('text_h1');
        $this->data['text_description']=$this->lang->line('text_description');
        $this->data['pagetitle']=$this->lang->line('pagetitle');

        /*загружаем настройки*/
        $this->load->model('settings_model');
        $this->settings=$this->settings_model->get();



        /*загружаем navbar*/
        $this->load->model('navbar_model');
        $this->data['navbar']=$this->navbar_model->Get();
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
            $this->data['reference_list']=$this->reference_model->GetList();;
            $this->load->view('reference/reference',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }
        else
        {
            /*Заголовок общтй для всех*/
            $this->load->view('head',$this->data);
            /*навбар*/
            $this->load->view('navbar/admin_navbar',$this->data);
            $this->data['reference_list']=$this->reference_model->GetList();;
            $this->load->view('reference/reference',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }

    }

    /*вывод справочника по названию таблицы*/
    public function info($reference_name='')
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
            $this->data['reference_name']=$this->reference_model->Info($reference_name);
            $this->data['text_h1']=$this->reference_model->GetName($reference_name);
            $this->load->view('reference/reference_info',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }
        else
        {
            /*Заголовок общтй для всех*/
            $this->load->view('head',$this->data);
            /*навбар*/
            $this->load->view('navbar/admin_navbar',$this->data);

            $this->data['reference']=$this->reference_model->Info($reference_name);
            $dscr=$this->reference_model->GetName($reference_name);

            $this->data['text_h1']=$dscr->Comment;
            $this->data['text_description']=$dscr->Name;

            $this->load->view('reference/reference_info',$this->data);
            /*футер общий для всех*/
            $this->load->view('footer');
        }
    }

}