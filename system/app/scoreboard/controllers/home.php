<?php
/*
*
* $Id home.php $
*/


class Home extends CI_Controller{

        function index(){   // To enable splash page configure it on config/config.inc.php set default_controller to splash
        $this->load->helper('url');
        $this->load->view('home');
        }
}

?>
