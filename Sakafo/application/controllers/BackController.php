<?php
    defined('BASEPATH') OR exit('No directscript access allowed');

    class BackController extends CI_Controller {
        /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/BackHome');
	}

    //View 
    

	public function liste()
	{
		$this->load->model('BackRequete');
        $data['sport'] = $this->BackRequete->getAllSport(2);
        $data['regime'] = $this->BackRequete->getAllRegime(2);
        $data['plat'] = $this->BackRequete->getAllPlat(2);
        $data['code'] = $this->BackRequete->getAllCodeFinal();

        $this->load->view('Back/BackHeader');
		$this->load->view('Back/BackListe',$data); 
	}
	
	public function stat(){
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/BackStatistique');
	}


	public function insert(){
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/NavNew');
		$this->load->view('Back/NewSport');
	}

	public function insertPlat(){
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/NavNew');
		$this->load->view('Back/NewPlat');
	}

	public function insertCode(){
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/NavNew');
		$this->load->view('Back/NewCode');
	}

	public function insertRegime(){
		$this->load->view('Back/BackHeader');
		$this->load->view('Back/NavNew');
		$this->load->view('Back/NewRegime');
	}


    public function allCodeFinal(){
        $this->load->model('BackRequete');
        $data['code'] = $this->BackRequete->getAllCodeFinal();

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allCodeSpec(){
        $spect = $this->input->get('code');

        $this->load->model('BackRequete');
        $data['code'] = $this->BackRequete->getAllCode($spect);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allSportSpect(){
        $spect = $this->input->get('sport');

        $this->load->model('BackRequete');
        $data['sport'] = $this->BackRequete->getAllSport($spect);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allPlatSpect(){
        $spect = $this->input->get('plat');

        $this->load->model('BackRequete');
        $data['plat'] = $this->BackRequete->getAllPlat($spect);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allRegime(){

        $this->load->model('BackRequete');
        $data['regime'] = $this->BackRequete->getAllRegime(1);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allPlatRegimeSpect(){
        $spect = $this->input->get('regime');
        $this->load->model('BackRequete');

        $this->load->model('BackRequete');
        $data['platRegime'] = $this->BackRequete->getAllPlatRegime($spect);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function allRegimeSpect(){
        $spect = $this->input->get('regime');
        $this->load->model('BackRequete');

        $this->load->model('BackRequete');
        $data['regime'] = $this->BackRequete->getAllRegime($spect);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }




//Modifier
    public function modifSport(){
        $id = $this->input->get('id');
        $nom = $this->input->get('nom');
        $poids = $this->input->get('poids');
        $prix = $this->input->get('prix');
        $type = $this->input->get('type');


        $this->load->model('BackRequete');
        $this->BackRequete->modifierSport($id,$nom,$poids,$prix,$type);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function modifPlat(){
        $id = $this->input->get('id');
        $nom = $this->input->get('nom');
        $poids = $this->input->get('poids');
        $prix = $this->input->get('prix');
        $type = $this->input->get('type');


        $this->load->model('BackRequete');
        $this->BackRequete->modifierPlat($id,$nom,$poids,$prix,$type);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function modifCode(){
        $id = $this->input->get('id');
        $nom = $this->input->get('nom');
        $montant = $this->input->get('montant');


        $this->load->model('BackRequete');
        $this->BackRequete->modifierCode($id,$nom,$montant);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }

    public function modifRegime(){
        $id = $this->input->get('id');
        $nom = $this->input->get('nom');


        $this->load->model('BackRequete');
        $this->BackRequete->modifierRegime($id,$nom);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');
    }


//Delete

    public function supprPlat($id){

        $this->load->model('BackRequete');
        $this->BackRequete->supprimerPlat($id);

        $this->liste();  
    }

    public function supprSport($id){

        $this->load->model('BackRequete');
        $this->BackRequete->supprimerSport($id);

        $this->liste();  
    }

    public function supprRegime($id){
        

        $this->load->model('BackRequete');
        $this->BackRequete->supprimerRegime($id);

        $this->liste();    
    }

    public function supprCode($id){
        

        $this->load->model('BackRequete');
        $this->BackRequete->supprimerRegime($id);

        $this->load->view('header');
        $this->load->view(' ',$data);
        $this->load->view('footer');   
    }

    public function supprimer(){
        $id = $this->input->get('id');
        $types = $this->input->get('types');

        
        if($types==2){
            $this->supprSport($id);
        }
        if($types==3){
            $this->supprPlat($id);
        }
        if($types==4){
            $this->supprRegime($id);
        }
    }



    //Insert

    public function insertionCode(){
        $name = $this->input->get('name');
        $validation = $this->input->get('validation');
        $account = $this->input->get('account');

        $this->load->model('BackRequete');
        $this->BackRequete->insertCode($name,$validation,$account);
        // $this->BackRequete->insertCodeHisto($validation,$account);
        
        $this->liste();
    }

    public function insertionPlat(){
        $name = $this->input->get('name');
        $poids = $this->input->get('poids');
        $prix = $this->input->get('prix');
        $typePlat = $this->input->get('typePlat');

        if($poids>0){
            $type=1;
        }else{
            $type=0;
        }
        $this->load->model('BackRequete');
        $this->BackRequete->insertPlat($name,$typePlat,$poids,$prix,$type);
        
        $this->liste();
    }

    public function insertionSport(){
        $name = $this->input->get('name');
        $poids = $this->input->get('poids');
        $duree = $this->input->get('duree');

        if($poids>0){
            $type=1;
        }else{
            $type=0;
        }
        $this->load->model('BackRequete');
        $this->BackRequete->insertSport($name,$poids,$duree,$type);
        
        $this->liste();
    }

    public function insertionRegime(){
        $name = $this->input->get('name');
        $plat = $this->input->get('plat');
        $sport = $this->input->get('sport');

        if($poids>0){
            $type=1;
        }else{
            $type=0;
        }
        $this->load->model('BackRequete');
        $this->BackRequete->insertRegime($name);
        
        $this->liste();
    }
    
}

