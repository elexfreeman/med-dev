<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31.03.2016
 * Time: 18:41
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/*контроллер главной страницы*/

class Mongotest extends CI_Controller
{
    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Mongo_db');
    }

    public function index()
    {
        /*иначе подгружаем интерфейс админа*/
        /*todo подумать об инетрефейсе админа*/
        $this->load->view('nf/nf_head', $this->data);
        $this->load->view('navbar/nf_admin_topnav', $this->data);
        /*шаблон страницы*/
        $this->data['colection'] = $this->someclass->get('unicorns');
        $this->load->view('mongo');


        $this->load->view('navbar/nf_admin', $this->data);

        $this->load->view('nf/nf_footer', $this->data);
    }


}