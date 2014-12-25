<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 19/11/2014
 * Time: 10:09
 */

require 'AppController.php';

use \Michelf\Markdown;


class Pages extends AppController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
        $data['text'] = "Bonjour les gens j'essai le **markdown**";
        $data['textParse'] = Markdown::defaultTransform($data['text']);
        $this->layout->view('pages/index', $data);
    }

    public function login() {
        // Load library
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[60]|alpha_dash|encode_php_tags|xss_clean');
        $this->form_validation->set_rules('mdp', '"Mot de passe"',          'trim|required|min_length[5]|max_length[60]|alpha_dash|encode_php_tags|xss_clean');

        if ($this->form_validation->run()){
            $this->session->set_flashdata('login', 'Vous êtes connecté');
            redirect('pages/login');
        } else {
            $this->layout->view('pages/login');
        }
    }

}