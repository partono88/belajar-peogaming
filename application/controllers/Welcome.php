<?php 

class Welcome extends Ci_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('admin'))
            redirect('admin');
    }
    function index()
    {
        $this->load->view('login');
    }
    function veryfy()
    {
        $this->load->model('M_perpus');
        $chek = $this->M_perpus->validate();
        if($chek)
        {
            $this->session->set_userdata('admin','1');
            redirect('admin');
        }
        else
        {
            redirect('admin');
        }
    }
}
 ?>
