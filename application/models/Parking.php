<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Parking extends CI_Model
{
    public $idparking;
    public $nom;
    public $disponibilite;
    public $couleur;

    public function get_Parking()
    {
        $sql = "select*from parking";
        $queryResult = $this->db->query($sql);
        $result = $queryResult->result_array();
        $value = array();
        foreach ($result as $res) {
            $class = new Parking();
            $class->idparking = $res['idparking'];
            $class->nom = $res['nom'];
            $class->disponibilite = $res['disponibilite'];
            $class->couleur = $this->couleur($res['disponibilite']);
            array_push($value, $class);
        }
        return $value;
    }

    public function couleur($disponibilite){
        if($disponibilite==0){
            return "white";
        }
        if($disponibilite==1){
            return "success";
        }
    }

    public function todispo($idparking)
    {
        $sql = "update parking set disponibilite=1 where idparking=%s";
        $sql = sprintf($sql, $this->db->escape($idparking));
        $query = $this->db->query($sql);
        return $query;
    }
    public function inserte()
    {
        $sql = "insert into parking(nom,disponibilite) values('Parking',true)";
        $query = $this->db->query($sql);
        return $query;
    }
}
