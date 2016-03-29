<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 18.03.16
 * Time: 18:30
 */


class Patient_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*все что нужно в навбаре*/
    public function GetAll()
    {
            $query = $this->db->get('patient');
            return $query->result_array();
    }

    /*Информация об одном пациенте*/
    public function Get($patient_id)
    {
        $query = $this->db->get_where('patient', array('id' => $patient_id));

        /*выбираем одну строчку*/
        $patient=$query->result();
        if(count($patient)>0) $patient=$patient[0];

        /*паспортные данные*/
        $query = $this->db->get_where('patient_doc', array('id' => $patient_id));
        $this->db->limit(1);
        $patient->patient_doc=$query->result();
        if(count($patient->patient_doc)>0) $patient->patient_doc=$patient->patient_doc[0];



        return $patient;
    }

    public function insert()
    {
        $this->name    = $_POST['name']; // please read the below note
        $this->surname  = $_POST['surname'];
        $this->secname  = $_POST['secname'];
        $this->sex  = $_POST['sex'];
        $this->birthday     = date( 'Y-m-d', strtotime($_POST['birthday']) );

        $this->db->insert('patient', $this);
    }

    public function update($id)
    {
        $this->db->where('id', $id);
        $this->name    = $_POST['name']; // please read the below note
        $this->surname  = $_POST['surname'];
        $this->secname  = $_POST['secname'];
        $this->sex  = $_POST['sex'];
        $this->birthday     = date( 'Y-m-d', strtotime($_POST['birthday']) );

        $this->db->update('patient', $this);
    }


}