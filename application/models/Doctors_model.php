<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 18.03.16
 * Time: 18:30
 */


class Doctors_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*все что нужно в навбаре*/
    public function GetAll()
    {
            $query = $this->db->get('doctors');
            return $query->result_array();
    }

    //Список справочников в системе
    /*в виде массива объектов*/
    public function ReferenceGetList()
    {
        /*todo сделать универсальным для любой БД*/
        $query = $this->db->query( "
            select TABLE_NAME, TABLE_COMMENT Comment, REPLACE(TABLE_NAME, '".$this->db->dbprefix."reference_', '') Name
            from
            (
            SELECT * FROM `information_schema`.`TABLES`  my_tables
            where (my_tables.TABLE_SCHEMA='".$this->db->database."')and(TABLE_NAME LIKE 'med_reference_%')
            ) reference

");
        $res=array();
        foreach ($query->result_array() as $reference)
        {
            $obj=new stdClass();
            $obj->tabel_name=$reference['TABLE_NAME'];
            $obj->Name=$reference['Name'];
            $obj->Comment=$reference['Comment'];
            $res[]=$obj;
        }
        return $res;
    }
}