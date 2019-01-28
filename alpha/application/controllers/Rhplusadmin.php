<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // Ligne pour protéger le fichier

class Rhplusadmin extends CI_Controller{
/************************* Méthode constructeur ******************************************************/
	public function __construct(){
    // Mettre les Helpers, les Librairies et les Modèles içi :
        parent::__construct();
        $this->load->model('rhplusadmin_model');
        $this->load->helper(array('url','form','asset'));
        
    // Pour protéger le site :
        //var_dump(crypt('',"N5Oi$?auf673?&95&&/'$%NGFASfvh*%724G")); <-- Le germe pour crypter les mots de passes
        $this->load->library('session');
        if(!$this->rhplusadmin_model->isLoggedIn())
            $this->load->view('rhplusadmin/login');
    }//

/************************* Méthode index *************************************************************/
    function index($page='accueil'){
     //Redirige vers le panel admin si session existe
        if($this->rhplusadmin_model->isLoggedIn()){
            $this->load->view('rhplusadmin/head');
            $this->load->view('rhplusadmin/sidebar');
            switch ($page){
                case "accueil":
                    $data['info1']=$this->rhplusadmin_model->voir('message_jour');
                    $data['info2']=$this->rhplusadmin_model->voir('partenaire');
                    $this->load->view('rhplusadmin/'.$page,$data);
                    break;
                case "activite":
                    $data['info']=$this->rhplusadmin_model->voir('activite');
                    $this->load->view('rhplusadmin/'.$page,$data);
                    break;
                case "appel":
                    $data['info']=$this->rhplusadmin_model->voir('appel');
                    $this->load->view('rhplusadmin/'.$page,$data);
                    break;
                case "commentaire":
                    $data['info1']=$this->rhplusadmin_model->voir('appel');
                    $data['info2']=$this->rhplusadmin_model->voir('commentaire_appel');
                    $this->load->view('rhplusadmin/'.$page,$data);
                    break;
                case "membre":
                    $data['info1']=$this->rhplusadmin_model->voir('membre');
                    $data['info2']=$this->rhplusadmin_model->voir('region');
                    $this->load->view('rhplusadmin/'.$page,$data);
                    break;
                default:
                    $this->load->view('rhplusadmin/'.$page);
                    break;
            }
            $this->load->view('rhplusadmin/foot');
        }
    }//

/************************* Méthode Page menus principaux et menus secodnaires **************************************************/
    public function menu($type){
        if($this->rhplusadmin_model->isLoggedIn()){        
            $this->load->view('rhplusadmin/head');
            $this->load->view('rhplusadmin/sidebar');
            $data['info1']=$this->rhplusadmin_model->get_menu_prin('ordre','menu','parent','0','site','publique');
            $data['info2']=$this->rhplusadmin_model->get_menu_prin('ordre','menu','parent','0','site','prive');
            $this->load->view('rhplusadmin/menu_'.$type,$data);
            $this->load->view('rhplusadmin/foot');
        }
    }//

/************************* Méthode Page formulaire modifier un élément d'une table *************************************************/
    public function modifier($table,$id,$type=""){
        if($this->rhplusadmin_model->isLoggedIn()){    
            $this->load->view('rhplusadmin/head');
            $this->load->view('rhplusadmin/sidebar');
            $data['info']=$this->rhplusadmin_model->get($table,$id);
            // Boucle pour la gestion des menus: détermine si le menu/page est standard ou personnalisé/est un menu principal
            if ($type != ""){
                $data['type']=$type;
            }
            $this->load->view('rhplusadmin/modif_'.$table,$data);
            $this->load->view('rhplusadmin/foot');
        }
    }//

/************************* Méthode connexion *********************************************************/
    function login(){
    //Traitement du formulaire de login
        if($this->rhplusadmin_model->validCredentials($this->input->post('utilisateur'),$this->input->post('mdp')))
            redirect(site_url().'rhplusadmin');
        else {
            redirect(site_url().'rhplusadmin');
        }
    }//

/************************* Méthode Ajouter/Modifier *********************************************************/
    public function ajout_modif($table,$id=''){
        if($this->rhplusadmin_model->isLoggedIn()){
            $action=$this->input->post("action");
            $parent=$this->input->post("parent");
            // Pour personnaliser le message de réussite selon l'élément à ajouter/modifier :
            $element= array("abonne_infolettre" => "un courriel d'un abonné à l'infolettre", "activite" => "une activité", "appel" => "un appel", "commentaire_appel" => "un commentaire", "membre" => "le profil du membre", "menu" => "une page", "message_jour" => "le message du jour", "partenaire" => "un partenaire");
			foreach ($this->input->post()as$name=>$value)
	            if($name!="action")
	                $data_bd["$name"]=$this->input->post("$name");
            // S'il faut ajouter une page :
            if($element=="une page"&&$action=="Ajouter"){
                $ordre=$this->rhplusadmin_model->compter('menu','parent',$parent);
                $data_bd["ordre"]=$ordre+1;
            }
            $data['message']='Vous avez bien ';
			$this->load->view('rhplusadmin/head');
            $this->load->view('rhplusadmin/sidebar');
			if($action=='Ajouter'){
	        	if($this->rhplusadmin_model->ajouter($data_bd, $table)){
					$data['message'].='ajouté '.$element[$table].' !';
					$this->load->view('rhplusadmin/succes',$data);
				}
	        	else
					$this->load->view('rhplusadmin/echec');
	        }
	        else{
	        	if($this->rhplusadmin_model->modifier_bd($data_bd,$table,$id)){
					$data['message'].='modifié '.$element[$table].' !';
					$this->load->view('rhplusadmin/succes',$data);
				}
				else
					$this->load->view('rhplusadmin/echec');
	        }
			$this->load->view('rhplusadmin/foot');
        }
    }//

/************************* Méthode Changer ordre d'un menu *********************************************************/
    public function changer_ordre($table){
        if($this->rhplusadmin_model->isLoggedIn()){
            $positionmenu=$this->input->post("positionmenu");
            for ($i=0;$i<count($positionmenu);$i++)
                $this->rhplusadmin_model->changer_ordre($table,$i+1,$positionmenu[$i]);
            echo"L'ordre a bien été changé.";
        }
    }//

/************************* Méthode Supprimer *********************************************************/
    public function supprimer($table,$id){
        if($this->rhplusadmin_model->isLoggedIn()){
            // Pour personnaliser le message de réussite selon l'élément à supprimer :
            $element= array("abonne_infolettre" => "un courriel d'un abonné à l'infolettre", "activite" => "une activité", "appel" => "un appel", "commentaire_appel" => "un commentaire", "membre" => "le profil du membre", "menu" => "une page", "message_jour" => "le message du jour", "partenaire" => "un partenaire");
            $data['message']='Vous avez bien ';
            $this->load->view('rhplusadmin/head');
            $this->load->view('rhplusadmin/sidebar');
            if($this->rhplusadmin_model->supprimer($table,$id)){
                $data['message'].='supprimé '.$element[$table].' !';
                $this->load->view('rhplusadmin/succes',$data);
            }
            else
                $this->load->view('rhplusadmin/echec');
            $this->load->view('rhplusadmin/foot');
        }
    }//

/************************* Méthode AJAX afficher menu secondaire *************************************************/
    public function afficher_menu_sec($parent){
        if($this->rhplusadmin_model->isLoggedIn()){    
            $data=$this->rhplusadmin_model->get_menu_sec('ordre','menu','parent', $parent);
            echo json_encode($data);
        }
    }//

/************************* Méthode AJAX get *************************************************/
    public function ajax_get($table,$id){
        if($this->rhplusadmin_model->isLoggedIn()){    
            $data=$this->rhplusadmin_model->get($table,$id);
            echo json_encode($data);
        }
    }//
    
/************************* Méthode déconnexion *******************************************************/
    function logout(){
    //Déconnexion de l'administrateur
        $this->rhplusadmin_model->logout();
        redirect(site_url().'rhplusadmin');
    }//
    
}