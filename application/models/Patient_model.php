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

    /*список всех, без join таблиц*/
    public function GetAll()
    {
            $query = $this->db->get('patient');
            return $query->result_array();
    }

    /*Информация об одном пациенте*/
    public function Get($patient_id)
    {
        /*
        [Patient] => Array
            (
                [id] => 1
                [name] => Александр
                [surname] => Полозов
                [secname] => Андреевич
                [sex] => 1
                [birthday] => 1984-09-04
                [snils] =>
                [enp] =>
                [mpi] =>
                [patient_doc] => Array
                    (
                        [id] => 1
                        [patient_id] => 1
                        [doc_type] => 1
                        [doc_series] => 3304
                        [doc_number] => 458569
                        [doc_source] =>
                        [doc_date] =>
                        [citizenship] =>
                        [doc_type_caption] => Паспорт
                    )
            )
        */
        $query = $this->db->get_where('patient', array('id' => $patient_id));

        /*выбираем одну строчку*/
        $patient=$query->result();
        if(count($patient)>0) $patient=$patient[0];
        $this->db->reset_query();

        /*паспортные данные*/
        $query = $this->db->get_where('patient_doc', array('id' => $patient_id));
        $this->db->limit(1);
        $patient->patient_doc=$query->result();
        if(count($patient->patient_doc)>0) $patient->patient_doc=$patient->patient_doc[0];
        $this->db->reset_query();

        /*Список типов документов*/
        $this->load->model('reference_model');
        $patient->doc_type=$this->reference_model->Info('doc_type');
        foreach($patient->doc_type as $i=>$doc)
        {
            $patient->doc_type[$i]->doc=false;
            if($doc->id==$patient->patient_doc->doc_type)
            {
                /*проставляем тип документа*/
                $patient->patient_doc->doc_type_caption=$doc->caption;
                /*проставляем для списка выбора*/
                $patient->doc_type[$i]->doc=true;
            }
        }

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
        $this->patient = new stdClass;
        $this->db->where('id', $id);
        $this->patient->name    = $_POST['name']; // please read the below note
        $this->patient->surname  = $_POST['surname'];
        $this->patient->secname  = $_POST['secname'];
        $this->patient->sex  = $_POST['sex'];
        $this->patient->birthday     = date( 'Y-m-d', strtotime($_POST['birthday']) );
        $this->db->update('patient', $this->patient);
        $this->db->reset_query();
        $this->patient = null;
        $this->patient = new stdClass;

    }


}