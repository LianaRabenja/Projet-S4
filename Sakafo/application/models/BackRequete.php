<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BackRequete extends CI_Model
{


//Select 
	public function getAllSport($pos)
    {
        if($pos>1){
            $request="SELECT * FROM sport"; 
        }else{
            $request="SELECT * FROM sport where positive=".$pos; 
        }
        $request=sprintf($request,$pos);
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllPlat($pos)
    {
        if($pos>1){
            $request="SELECT * FROM plat"; 
        }else{
            $request="SELECT * FROM plat where positive=".$pos; 
        }
        $request=sprintf($request,$pos);
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllRegime()
    {
            $request="SELECT * FROM regime"; 
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllPlatRegime($id)
    {
            $request="SELECT * FROM listRegimePlat where idRegime=".$id; 
        
        $request=sprintf($request,$id);
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllCode($etat)
    {
        if($etat>1){
            $request="SELECT c.id as id, c.nom as nom, c.argent as argent ,
                            h.etat as etat, max(h.datehisto) as datehisto 
                        FROM code as c
                        join codehisto as h on c.id = h.idcode
                        group by id,nom,argent,etat ;";
        }else{
            $request="SELECT c.id as id, c.nom as nom, c.argent as argent ,
                            h.etat as etat, max(h.datehisto) as datehisto 
                        FROM code as c
                        join codehisto as h on c.id = h.idcode
                        where etat=".$etat."
                        group by id,nom,argent,etat ;"; 
        }
        $table = $this->db->query($request,$etat);
        $tableFin = $table->result_array();
        return $tableFin;
    }

    public function getAllCodeFinal()
    {
        $request="SELECT c1.idCode, c1.etat, c1.datehisto,c.nom,c.argent
                        FROM codehisto c1
                        LEFT JOIN codehisto c2 ON c1.idCode = c2.idCode AND c1.datehisto < c2.datehisto
                        join code as c on c1.idCode = c.id
                    WHERE c2.id IS NULL;"; 
        
        $table = $this->db->query($request);
        $tableFin = $table->result_array();
        return $tableFin;
    }
    
        






//Insertion

    public function insertPlat($nom,$typePlat,$poids,$prix,$type){
        $rqt = "INSERT INTO plat VALUES(DEFAULT,'%s',%d,%d,%d,%d)";
        $rqt = sprintf($rqt,$nom,$typePlat,$poids,$prix,$type);

        return $this->db->query($rqt);
    }

    public function insertSport($nom,$poids,$prix,$type){
        $rqt = "INSERT INTO sport VALUES(DEFAULT,'%s',%d,%d,%d)";
        $rqt = sprintf($rqt,$nom,$poids,$prix,$type);

        return $this->db->query($rqt);
    }

    public function insertRegime($nom){
        $rqt = "INSERT INTO regime VALUES(DEFAULT,'%s')";
        $rqt = sprintf($rqt,$nom);

        return $this->db->query($rqt);
    }

    public function insertRegimePlat($regime,$plat){
        $rqt = "INSERT INTO listeregimeplat VALUES(DEFAULT,'%s')";
        $rqt = sprintf($rqt,$nom,$poids,$prix,$type);

        return $this->db->query($rqt);
    }

    public function insertCode($nom,$code,$argent){
        $rqt = "INSERT INTO code VALUES(DEFAULT,'%s',%d,%d)";
        $rqt = sprintf($rqt,$nom,$code,$argent);

        return $this->db->query($rqt);
    }

    public function insertCodeHisto($nom,$code,$argent){
        $rqt = "INSERT INTO codeHisto VALUES(DEFAULT,%d,%d,now())";
        $rqt = sprintf($rqt,$nom,$code,$argent);

        return $this->db->query($rqt);
    }




//Update

    public function modifierPlat($id,$nom,$poids,$prix,$type){
        $rqt = "UPDATE plat set nom='%s', poids=%d, prix=%d, positive=%d where id=%d ";
        $rqt = sprintf($rqt,$nom,$poids,$prix,$type,$id);
        return $this->db->query($rqt);
    }

    public function modifierSport($id,$nom,$poids,$prix,$type){
        $rqt = "UPDATE sport set nom='%s', poids=%d, prix=%d, positive=%d where id=%d ";
        $rqt = sprintf($rqt,$nom,$poids,$prix,$type,$id);
        return $this->db->query($rqt);
    }

    public function modifierRegime($id,$nom){
        $rqt = "UPDATE regime set nom='%s' where id=%d ";
        $rqt = sprintf($rqt,$nom,$id);
        return $this->db->query($rqt);
    }

    public function modifierCode($id,$nom,$montant){
        $rqt = "UPDATE code set nom='%s', argent=%d where id=%d ";
        $rqt = sprintf($rqt,$nom,$argent,$id);
        return $this->db->query($rqt);
    }



//Delete

    public function supprimerPlat($id){
        $rqt = "DELETE FROM plat where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    public function supprimerSport($id){
        $rqt = "DELETE FROM sport where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    public function supprimerRegime($id){
        $rqt = "DELETE FROM regime where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }

    public function supprimerRegimePlat($id){
        $rqt = "DELETE FROM listeRegimePlat where id=%d ";
        $rqt = sprintf($rqt,$id);
        return $this->db->query($rqt);
    }
}