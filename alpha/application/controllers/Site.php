<?php
defined ('BASEPATH') OR exit ('No  direct   script   access   allowed');

class Site extends CI_Controller {

/**************** Constructeur *********************/	
	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url','asset'));
        $this->load->model('site_model');
        $this->load->library('session');
    } //

/**************** Méthode index *********************/
	public function index ($page='accueil') {
		
		$data["menuPrincipaux"]=$this->site_model->menuPrincipaux();
		$this->load->view ('site/head',$data);
		if($page!='accueil')
			$this->load->view ('site/navbar',$data);
		if(is_numeric($page)){
			$data["result"]=$this->site_model->voirStandardPage($page);
			$this->load->view('site/standardPage',$data);
		}
		else{
			switch ($page) {
				case "activites":
					$data["info"]=$this->site_model->voirCustomPage('activite');
					break;
			}
			$this->load->view('site/'.$page,$data);
		}
		$this->load->view ('site/foot');
	}//

/**************** Méthode index *********************/
	public function form_activite ($id) {
		
		$data["menuPrincipaux"]=$this->site_model->menuPrincipaux();
		$data["info"]=$this->site_model->get('activite',$id);
		$this->load->view ('site/head',$data);
		$this->load->view ('site/navbar',$data);
		$this->load->view ('site/form_activite',$data);
		$this->load->view ('site/foot');
	}//

/************************* Méthode connexion *********************************************************/
// Methode AJAX afin que l'usager reste sur le modal lors d'un échec la connexion, avec message d'erreur
    function login(){
    //Traitement du formulaire de login
        if($this->site_model->validCredentials($this->input->post('utilisateur'),$this->input->post('mdp')))
            redirect(site_url().'membre');
        else
            redirect(site_url().'site');
    }//
}