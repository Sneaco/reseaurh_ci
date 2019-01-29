<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model {
/************************* Méthode constructeur ******************************************************/
	public function __construct(){
        $this->load->database();
    }//

/************************* Méthode valider utilisateur ******************************************************/
    function validCredentials($utilisateur,$mdp){
        // Cryptage du mot de passe avec germe :
        $mdp = crypt($mdp,'WF9!#(=dskk63vmdsJJnkdNJfv936@');

        // Get_where car les charactères sont réchappés
        $query = $this->db->get_where('login_prive', array('utilisateur' => $utilisateur,'mdp' => $mdp));

        if($query->num_rows() > 0){
              $r = $query->result();
              $session_data = array('utilisateur' => $r[0]->utilisateur,'logged_in' => true);
              $this->session->set_userdata($session_data);
              return true;
        } 
        else 
            return false;
    }//
    
/* Variable pour nom de la table du menu principal */
    private $table="menu";
/* Variable pour savoir à quel site appertient le menu */
    private $site="publique";
	
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
/************************* Méthode pour chercher tout le contenu d'une row ******************************************************/  
    public function get($table,$id){
        return $this->db->get_where($table,array('id'=>$id))->result();
    }//

}