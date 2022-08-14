<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->library('session');
  }


  public function index()
  {
    if ($this->session->userdata('admin_login') == 1) redirect(base_url() . 'admin/dashboard', 'refresh');
    $this->load->view('backend/login');
  }


  function validate_login()
  {

    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $credential = array('email' => $email, 'password' => sha1($password));
    
    $query = $this->db->get_where('admin', $credential);
    if ($query->num_rows() > 0) {
      $row = $query->row();

      $this->session->set_userdata('login_type', 'admin');
      $this->session->set_userdata('admin_login', '1');
      $this->session->set_userdata('admin_id', $row->admin_id);
      $this->session->set_userdata('login_user_id', $row->admin_id);
      $this->session->set_userdata('name', $row->name);
      $this->session->set_flashdata('flash_message', get_phrase('Successfully Login'));
      redirect(base_url() . 'admin/dashboard', 'refresh');
    }
    $this->session->set_flashdata('error_message', get_phrase('invalid_login_details'));
    redirect(base_url() . 'login', 'refresh');
  }



  function logout()
  {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}
