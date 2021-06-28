<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_mysql_table extends CI_Controller 
{
	public function index()
	{
    $this->load->library('table');
    $this->load->database();
               $this->load->model('modelstaffmysqltable');
               $data = $this->modelstaffmysqltable->func_staff_mysql_table();
    $this->load->view('staff_mysql_table', ['data' => $data,]);
	}
}
