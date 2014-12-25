<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 19/11/2014
 * Time: 14:45
 */

class Layout {

    private $CI;
    private $var    = array();
    private $theme  = 'default';

    public function __construct() {
        $this->CI =& get_instance();
        $this->var['output']  = '';
        $this->var['title']   = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
        $this->var['charset'] = $this->CI->config->item('charset');
        $this->var['css']     = array();
        $this->var['js']      = array();
    }

    /*
     * Permet de charger les vues
     */
    public function view($name, $data = array()) {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
        //var_dump($this->var);
        $this->CI->load->view('../theme/' . $this->theme, $this->var);
    }

    public function parse($name, $data = []) {
        $this->var['output'] = $this->CI->parser->parse($name, $data, true);
        $this->CI->parser->parse('../theme/' . $this->theme, $this->var);

    }

    public function views($name, $data = array()) {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
        return $this;
    }

    /*
     * Permet de modifier les variables envoyé au layout
     */
    public function set_title($title) {
        if (is_string($title) && !empty($title)){
            $this->var['title'] = $title;
            return true;
        }
        return false;
    }

    public function set_charset($charset) {
        if (is_string($charset) && !empty($charset)){
            $this->var['charset'] = $charset;
            return true;
        }
        return false;
    }


    public function add_css($nom) {
        if (is_string($nom) && !empty($nom) && file_exists('./assets/css/' . $nom . '.css')){
            $this->var['css'][] = css_url($nom);
            return true;
        }
        return false;
    }

    public function add_js($nom) {
        if (is_string($nom) && !empty($nom) && file_exists('./assets/js/' . $nom . '.js')){
            $this->var['js'][] = js_url($nom);
            return true;
        }
        return false;
    }

    public function set_theme($theme) {
        if (is_string($theme) && !empty($theme) && file_exists('./application/layout/' . $theme . '.php')){
            $this->theme = $theme;
            return true;
        }
        return false;
    }

}