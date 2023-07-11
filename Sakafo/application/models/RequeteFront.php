<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RequeteFront extends CI_Model
{
    public function get_infoMembre()
    {
	// On simule l'envoi d'une requête
	    return $this->db->query("SELECT * FROM userp");
    }
    public function insert_membre($nom,$prenom,$mail,$mdp,$dtn)
    {
	    $rqt = "INSERT INTO userp(nom,prenom,email,mdp,dateinscription) VALUES ('%s','%s','%s','%s','%s')";
	    $rqt = sprintf($rqt,$nom,$prenom,$mail,$mdp,$dtn);
        echo $rqt;
	    return $this->db->query($rqt);
    }
    public function get_Aliment($positive,$debut,$fin){
        $rqt = "select * from regime where positive = ".$positive." order by id desc limit
        ".$debut.",".$fin;
        return $this->db->query($rqt);
    }
    public function get_sport($id){
        $rqt = "select * from sport where id=".$id;
        return $this->dbs->query($rqt);
    }
  
    public function get_sportRegime($id, $positive){
        $rqt = "select r.nom as nomr,s.nom as noms,s.duree,s.poids from listeRegimeSport l
        JOIN regime r ON l.idRegime=r.id
        JOIN sport s ON l.idSport=s.id where l.idRegime=".$id." and s.positive=".$positive;
        return $this->db->query($rqt);
    }
    public function get_platRegime($id){
        $rqt = "select r.nom as nomr,p.nom as nomp,p.poids,p.prix from listeRegimePlat l
        JOIN regime r ON l.idRegime=r.id
        JOIN plat p ON l.idPlat=p.id where l.idRegime=".$id;
        return $this->db->query($rqt);
    }
   
    
    public function get_PetitDejeune($idRegime, $positive){
        $rqt = "select r.nom as nomr,p.nom as nomp,p.poids,p.prix from listeRegimePlat l
        JOIN regime r ON l.idRegime=r.id
        JOIN plat p ON l.idPlat=p.id where l.idRegime=".$idRegime." and p.positive=".$positive." and p.typeplat=1";
        return $this->db->query($rqt);
    }
    public function get_Dejeune($idRegime, $positive){
        $rqt = "select r.nom as nomr,p.nom as nomp,p.poids,p.prix from listeRegimePlat l
        JOIN regime r ON l.idRegime=r.id
        JOIN plat p ON l.idPlat=p.id where l.idRegime=".$idRegime." and p.positive=".$positive." and p.typeplat=2";
        return $this->db->query($rqt);
    }
    public function get_Diner($idRegime, $positive){
        $rqt = "select r.nom as nomr,p.nom as nomp,p.poids,p.prix from listeRegimePlat l
        JOIN regime r ON l.idRegime=r.id
        JOIN plat p ON l.idPlat=p.id where l.idRegime=".$idRegime." and p.positive=".$positive." and p.typeplat=3";
        return $this->db->query($rqt);
    }
    public function getAllCredit(){
        return $this->db->query("SELECT * FROM code");
    }
    public function getAllCodeFinal()
    {
        $request="SELECT c1.idCode, c1.etat, c1.datehisto,c.code,c.argent
                        FROM codehisto c1
                        LEFT JOIN codehisto c2 ON c1.idCode = c2.idCode AND c1.datehisto < c2.datehisto
                        join code as c on c1.idCode = c.id
                    WHERE c2.id IS NULL;"; 
        
        return $this->db->query($request);
        
    }

    public function getAllCodeFinal1($id)
    {
        $request="SELECT c1.idCode, c1.etat, c1.datehisto,c.code,c.argent
                        FROM codehisto c1
                        LEFT JOIN codehisto c2 ON c1.idCode = c2.idCode AND c1.datehisto < c2.datehisto
                        join code as c on c1.idCode = c.id
                    WHERE c2.id IS NULL and c1.idCode=".$id; 
        
        return $this->db->query($request);
        
    }

    public function insert_credit($vola,$id)
    {
	    $rqt = "INSERT INTO compteuser(vola,iduser) VALUES (%d,%d)";
	    $rqt = sprintf($rqt,$vola,$id);
        echo $rqt;
	    return $this->db->query($rqt);
    }
}