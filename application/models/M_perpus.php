<?php
// defined('BASEPATH') or exit('No direct Script access allowed');

class M_perpus extends CI_Model
{
   function validate()
   {
    $arr['username'] = $this->input->post('admin_username');
    $arr['password'] = md5($this->input->post('admin_password'));
    return $this->db->get_where('admin','$arr')->row();
   }
}
?>