<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Utilisateur extends CI_Model
{
    public $idutilisateur;
    public $nom;
    public $prenom;
    public $email;
    public $mtps;

    public function get_Utilisateur($email, $mtps)
    {
        $sql = "SELECT * FROM `utilisateur` WHERE email=%s and mtps=%s";
        $sql = sprintf($sql, $this->db->escape($email), $this->db->escape($mtps));
        $queryResult = $this->db->query($sql);
        $result = $queryResult->result_array();
        $class = new Utilisateur();
        foreach ($result as $res) {
            $class->idutilisateur = $res['idutilisateur'];
            $class->nom = $res['nom'];
            $class->prenom = $res['prenom'];
            $class->email = $res['email'];
            $class->mtps = $res['mtps'];
        }
        return $class;
    }

    public function get_All()
    {
        $sql = "SELECT * FROM `utilisateur` ";
        $queryResult = $this->db->query($sql);
        $result = $queryResult->result_array();
        $value = array();
        foreach ($result as $res) {
            $class = new Utilisateur();
            $class->idutilisateur = $res['idutilisateur'];
            $class->nom = $res['nom'];
            $class->prenom = $res['prenom'];
            $class->email = $res['email'];
            $class->mtps = $res['mtps'];
            array_push($value, $class);
        }
        return $value;
    }

    public function delete($idutilisateur)
    {
        $sql = "DELETE from utilisateur WHERE idutilisateur=%s";
        $sql = sprintf($sql, $this->db->escape($idutilisateur));
        $query = $this->db->query($sql);
        return $query;
    }

    public function create($nom, $prenom, $email, $mtps)
    {
        $sql = "insert into utilisateur(nom,prenom,email,mtps) values (%s,%s,%s,%s)";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($prenom), $this->db->escape($email), $this->db->escape($mtps));
        $query = $this->db->query($sql);
        return $query;
    }

}
