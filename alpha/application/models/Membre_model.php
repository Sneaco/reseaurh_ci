<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membre_model extends CI_Model {
/************************* Méthode constructeur ******************************************************/
	public function __construct(){
	// Load la base de données
		$this->load->database();
    }//

/************************* Méthode "est connecté" ******************************************************/
    function isLoggedIn(){
        if($this->session->userdata('logged_in'))
            return true;
        else
            return false;
    }//

 /************************* Méthode déconnexion ******************************************************/
    function logout(){
        $this->session->sess_destroy();
        return true;
    }//

/* Variable pour nom de la table du menu principal */
    private $table="menu";
/* Variable pour savoir à quel site appertient le menu */
    private $site="prive";
    
/************************* Méthode Menu prinicpal ******************************************************/
    public function menuPrincipaux(){
        $this->db->order_by('ordre');
        return $this->db->get_where($this->table,array("parent"=>0,"site"=>$this->site))->result();
    }//

/************************* Méthode Sous menu ******************************************************/
    public function sousMenu($id){
        $this->db->order_by('ordre');
        return $this->db->get_where($this->table,array("parent"=>$id,"site"=>$this->site))->result();
    }//

/************************* Méthode Voir page standard ******************************************************/
    public function voirStandardPage($id){
        return $this->db->get_where($this->table,array("id"=>$id,"site"=>$this->site))->result();
    }//

/************************* Méthode Voir page personnalisée ******************************************************/
    public function voirCustomPage($table){
        return $this->db->get($table)->result();
    }//

}