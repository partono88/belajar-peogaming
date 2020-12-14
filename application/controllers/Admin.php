<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // cek login
        if ($this->session->userdata('status') != "login") {
            redirect(base_url() . 'welcome?pesan=belumlogin');
        }
    }
    function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi order by id_pinjam desc limit 10")->result();
        $data['anggota'] = $this->db->query("SELECT * FROM anggota order by id_anggota desc limit 10")->result();
        $data['buku'] = $this->db->query("SELECT * FROM buku order by id_buku desc limit 10")->result();

        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'welcome?pesan=logout');
    }
}
