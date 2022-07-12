<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Voiture extends CI_Model
{
    public $idvoiture;
    public $matriculation;
    public $marque;
    public $idutilisateur;

    public function create_voiture($matriculation, $marque, $idutilisateur)
    {
        $sql = "insert into voiture(matriculation,marque,idutilisateur) values(%s,%s,%s)";
        $sql = sprintf($sql, $this->db->escape($matriculation), $this->db->escape($marque), $this->db->escape($idutilisateur));
        $query = $this->db->query($sql);
        return $query;
    }
}
