<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rhplusadmin_model extends CI_Model {
/************************* Méthode constructeur ******************************************************/
	public function __construct(){
	// Load la base de données
		$this->load->database();
    }//

/************************* Méthode valider utilisateur ******************************************************/
    function validCredentials($utilisateur,$mdp){
        // Cryptage du mot de passe avec germe :
        $mdp = crypt($mdp,'N5Oi$?auf673?&95&&/"$%NGFASfvh*%724G');

        // Get_where car les charactères sont réchappés
        $query = $this->db->get_where('admin', array('utilisateur' => $utilisateur,'mdp' => $mdp));

        if($query->num_rows() > 0){
              $r = $query->result();
              $session_data = array('utilisateur' => $r[0]->utilisateur,'logged_in' => true);
              $this->session->set_userdata($session_data);
              return true;
        } 
        else 
            return false;
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

/************************* Méthode ajouter ******************************************************/
	public function ajouter($data,$table){
		return $this->db->insert($table,$data);
	}//

/************************* Méthode modifier ******************************************************/	
	public function modifier($table, $id){
		$this->db->where('id', $id);
		return $this->db->get($table)->result();
	}//

/************************* Méthode modifier BD ******************************************************/
	public function modifier_bd($data,$table,$id){
		$this->db->where('id', $id);
		return $this->db->update($table, $data);
	}//

/************************* Méthode supprimer ******************************************************/	
	public function supprimer($table, $id){
		return $this->db->delete($table, array('id' => $id));
	}//

/************************* Méthode voir tout le contenu d'une table ******************************************************/	
	public function voir($table){
		$this->db->order_by('id');
		return $this->db->get($table)->result();
	}//

/************************* Méthode pour chercher tout le contenu d'une row ******************************************************/	
	public function get($table,$id){
		return $this->db->get_where($table,array('id'=>$id))->result();
	}//

/************************* Méthode chercher les menus principaux et les afficher selon leur ordre *********************************************************/
	public function get_menu_prin($order, $table, $col1, $value1, $col2, $value2)
	{
		$this->db->order_by($order);
		return $this->db->get_where($table,array($col1 => $value1, $col2 => $value2))->result();
	}//

/************************* Méthode chercher les menus secondaires et les afficher selon leur ordre *********************************************************/
	public function get_menu_sec($order, $table, $col, $value)
	{
		$this->db->order_by($order);
		return $this->db->get_where($table,array($col => $value))->result();
	}//

/************************* Méthode compter le nombre de rows correspondant à une valeur *************/
    public function compter($table, $col, $value)
    {
		$this->db->where($col, $value);
		return $this->db->count_all_results($table);
    }//

/************************* Méthode changer l'ordre des menus ******************************************************/
	public function changer_ordre($table,$ordre,$id){
		//$mysqli->query("update reverie64_menu set ordre = $i+1 where id='$positionmenu[$i]'") or die ($mysqli->error);
		$this->db->set('ordre', $ordre);
		$this->db->where('id', $id);
		return $this->db->update($table);
	}//

}