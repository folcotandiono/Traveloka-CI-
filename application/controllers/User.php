<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $data = array(
      'negara' => $this->db->query("SELECT * FROM negara")->result()
    );
		$this->load->view('index', $data);
	}

  public function findticket()
  {
    $data = array(
      'from' => $this->input->get('from'),
      'to' => $this->input->get('to'),
      'dateFlight' => $this->input->get('dateFlight'),
      'banyakOrang' => $this->input->get('banyakOrang')
    );
    $this->load->view('findticket', $data);
  }
}
