<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class TraitementFront extends CI_Controller{
        public function __construct()
	    {
		    parent::__construct();
	    }
	    public function index()
	    {
		    $this->accueil();
	    }
        //Connection user
        public function checkUser(){
            $this->load->model('RequeteFront');
		    $nom = $this->input->post('email');
		    $mdp = $this->input->post('mdp');
		    $data = $this->RequeteFront->get_infoMembre();
            if($nom == "admin" && $mdp = "admin"){
                
                return 0;
            }
		    foreach ($data->result_array() as $row) {
                
 			    if($row['email'] == $nom && $row['mdp'] == $mdp){
 				    $this->load->library('session');
 				    $this->session->set_userdata('user',$row);
 				    
 				    return 1;
 			    }
		    } 
		    return -1;
        }
        
        //validation User
        public function validationUser(){
            if($this->checkUser()==0){
                $this->load->view('Back/BackHeader');
		        $this->load->view('Back/BackHome');
            }
            if($this->checkUser()==1){
                $id = $this->session->userdata('user')['id'];
                $data['session'] = $id;
                $this->load->view('Home');
            }
            if($this->checkUser()==-1){
                $erreur['error'] = 'Verifier votre compte!!!';
                
			    $this->load->view('login',$erreur);
            }
        }
        public function inscri(){
            $this->load->view('sign_up');
        }
        //inscription user
        public function inscription()
	    {
		    $mail = $this->input->post('email');
		    $nom = $this->input->post('nom');
            $prenom = $this->input->post('prenom');
		    $mdp = $this->input->post('mdp');
		    $dtn = $this->input->post('date');
		    $data = $this->RequeteFront->insert_membre($nom,$prenom,$mail,$mdp,$dtn);
		    $this->load->view('login');
	    }
        //
        public function suggestion(){
            $this->load->model('RequeteFront');
            $credit = $this->RequeteFront->getAllCodeFinal();
            $info = $this->input->get('info');
            //$kilo = $this->input->get('kilo');
            $kilo =  $this->input->get('poids');
            $reg = 1;
            $somme = 0; $k = 0; $i = 0; $x = 0;
            $petit = $this->RequeteFront->get_PetitDejeune($reg, $info)->result_array();
            $dejeune = $this->RequeteFront->get_Dejeune($reg, $info)->result_array();
            $diner = $this->RequeteFront->get_Diner($reg, $info)->result_array();
            $listeSport = $this->RequeteFront->get_sportRegime($reg, $info)->result_array();
            /*echo $petit[0]['prix'];
            echo $dejeune[0]['prix'];
            echo $diner[0]['prix'];
            echo $petit[1]['prix'];
            echo $dejeune[1]['prix'];
            //echo $diner[1]['prix'];
            echo $listeSport[0]['poids'];*/
            $liste = array();
            $total = 0;
            while($somme<=$kilo){
                $somme = $somme + $petit[$i]['poids'] + $dejeune[$i]['poids']+$diner[$i]['poids']+$listeSport[$k]['poids'];
                $price = $petit[$i]['prix']+$dejeune[$i]['prix']+$diner[$i]['prix'];
                $total = $total + $price;
                /*echo "somme : ".$price;
                echo "petit : ".$petit[$i]['nomp'];
                echo "dejeune : ".$dejeune[$i]['nomp'];
                echo "diner : ".$diner[$i]['nomp'];
                echo "sport : ".$listeSport[$k]['noms'];
                echo "duree : ".$listeSport[$k]['duree'];*/
                $i++; $k++;
                if($i == count($petit)){
                    $i=0;
                }
                if($k == count($listeSport)){
                    $k = 0;
                }
                $liste[$x] = array($petit[$i]['nomp']."  ".$petit[$i]['prix'],$dejeune[$i]['nomp']."  ".$dejeune[$i]['prix'],$diner[$i]['nomp']."  ".$diner[$i]['prix'],$listeSport[$k]['noms'],$listeSport[$k]['duree'],$price);
                $x++;
            }
            $data['suggere'] = $liste;
            $data['montant'] = $total;
            $data['credit'] = $credit;
            $this->load->view('suggestion',$data);
        }

        public function verificationcarte(){
            $this->load->model('RequeteFront');
            $id = $this->session->userdata('user')['id'];
            $id = $this->input->get('credit');
            $credit = $this->RequeteFront->getAllCodeFinal1($id)->result_array();
            if($credit[0]['etat'] == 1){
                $v = $credit[0]['argent'];
                $insert = $this->RequeteFront->insert_credit($v,$id);
                echo "Vous avez credite votre numero";
            }else{
                echo "Cette carte est deja utilser";
            }

        }

    }
?>