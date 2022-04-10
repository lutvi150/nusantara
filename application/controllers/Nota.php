<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nota extends CI_Controller
{

    public function index()
    {
        $data = null;
        $this->load->view('nota', $data, false);

    }

}

/* End of file  Nota.php */
