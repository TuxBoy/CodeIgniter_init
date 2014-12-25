<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AppController extends CI_Controller{

    public function __construct() {
        parent::__construct();


        // Load libraries
        $this->load->library('layout');
        $this->load->library('form_validation');
        $this->load->helper('form');

        // Load assets
        $this->layout->add_css('bootstrap');
        $this->layout->add_css('bootstrap-theme');
        $this->layout->add_js('bootstrap');
    }

}