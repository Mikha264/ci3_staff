<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor_mysql_table extends CI_Controller {
	public function index()
	{
    $this->load->library('table');
    $this->load->database();
               $this->load->model('modeleditormysqltable');
               $data = $this->modeleditormysqltable->func_editor_mysql_table();
    $this->load->view('editor_mysql_table', ['data' => $data,]);
	}

	public function saveform()
	{
    $this->load->database();
   $this->load->view('saveform');
	}

	public function addmen()
	{
    $this->load->database();
   $this->load->view('addmen');
	}


}



