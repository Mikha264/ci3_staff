<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelstaffmysqltable extends CI_Model
{
    public function func_staff_mysql_table()
    {
$query = $this->db->query('SELECT * FROM staff');
$data = $this->table->generate($query);
        $this->db->close();
        return $data;
    }
}
