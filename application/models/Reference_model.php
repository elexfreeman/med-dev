<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 18.03.16
 * Time: 18:30
 */


class Reference_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Список справочников в системе
    /*в виде массива объектов*/
    public function GetList()
    {
        /*todo сделать универсальным для любой БД*/
        $query = $this->db->query( "
select TABLE_NAME, TABLE_COMMENT Comment, REPLACE(TABLE_NAME, '".$this->db->dbprefix."reference_', '') Name from
(
SELECT * FROM `information_schema`.`TABLES`  my_tables
where (my_tables.TABLE_SCHEMA='".$this->db->database."')and(TABLE_NAME LIKE 'med_reference_%')
) reference

");
        return $query->result_array();
    }




    /*список строк в справочнике с таблицей $reference*/
    public function Info($reference)
    {
        $reference = $this->security->xss_clean($reference);

        $query = $this->db->get('reference_'.$reference);
        return $query->result();
    }

    public function GetName($reference)
    {
        $reference = $this->security->xss_clean($reference);
        /*todo сделать универсальным для любой БД*/
        $query = $this->db->query( "
select TABLE_NAME, TABLE_COMMENT Comment, REPLACE(TABLE_NAME, '".$this->db->dbprefix."reference_', '') Name from
(
SELECT * FROM `information_schema`.`TABLES`  my_tables
where
(my_tables.TABLE_SCHEMA='".$this->db->database."')
and(TABLE_NAME LIKE 'med_reference_".$reference."')

) reference

");
        return $query->row();
    }

}