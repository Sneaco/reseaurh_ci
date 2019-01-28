<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // Ligne pour protéger le fichier

class Membre extends CI_Controller{
/************************* Méthode constructeur ******************************************************/
	public function __construct(){
    // Mettre les Helpers, les Librairies et les Modèles içi :
        parent::__construct();
        $this->load->model('membre_model');
        $this->load->helper(array('url','form','asset'));
        //var_dump(crypt('test',"WF9!#(=dskk63vmdsJJnkdNJfv936@"));

    // Pour protéger le section privée :
        $this->load->library('session');
        if(!$this->membre_model->isLoggedIn()){
            redirect(site_url().'site');
        }         
    }//

/************************* Méthode index *************************************************************/
    function index($page='accueil'){
    //Redirige vers le panel admin si session existe
        if($this->membre_model->isLoggedIn()){
            $data["menuPrincipaux"]=$this->membre_model->menuPrincipaux();
            $this->load->view ('membre/head',$data);
            $this->load->view ('membre/sidebar',$data);

            if(is_numeric($page)){
                $data["result"]=$this->membre_model->voirStandardPage($page);
                $this->load->view('membre/standardPage',$data);
            }
            else{
                switch ($page) {
                    case "accueil":
                        $data["info1"]=$this->membre_model->voirCustomPage('message_jour');
                        $data["info2"]=$this->membre_model->voirCustomPage('appel');
                        $data["info3"]=$this->membre_model->voirCustomPage('activite');
                        break;
                    case "activites":
                        $data["info"]=$this->membre_model->voirCustomPage('activite');
                        break;
                    case "appels_liste":
                        $data["info1"]=$this->membre_model->voirCustomPage('appel');
                        $data["info2"]=$this->membre_model->voirCustomPage('membre');
                        break;
                    case "membres_liste":
                        $data["info"]=$this->membre_model->voirCustomPage('membre');
                        break;
                    case "aide_faq":
                        $data["info"]=$this->membre_model->voirCustomPage('faq');
                        break;
                }
                $this->load->view('membre/'.$page,$data);
            }
            $this->load->view ('membre/foot');
        }
    }//
    
/************************* Méthode déconnexion *******************************************************/
    function logout(){
    //Déconnexion de l'administrateur
        $this->membre_model->logout();
        redirect(site_url().'membre');
    }//
    
}