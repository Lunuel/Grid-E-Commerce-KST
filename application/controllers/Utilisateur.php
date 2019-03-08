<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function profil() {
         $data = array('nom' => 'Lunuel');

        // On stocke notre page dans la variable $page
        $page = $this->load->view('utilisateur/profil', $data, true);

        // On affiche notre page avec le template
        $this->load->view('template', array('page' => $page));
    }

}
