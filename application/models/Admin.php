<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Model
{
    public $idadmine;
    public $nom;
    public $email;
    public $mtps;

    public function get_Admin($email, $mtps)
    {
        $sql = "SELECT * FROM `admine` WHERE email=%s and mtps=%s";
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($mtps));
        $queryResult = $this->db->query($sql);
        $result = $queryResult->result_array();
        $class = new Admin();
        foreach ($result as $res) {
            $class->idadmine = $res['idadmine'];
            $class->nom = $res['nom'];
            $class->email = $res['email'];
            $class->mtps = $res['mtps'];
        }
        return $class;
    }
}
