<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$var=array();
 foreach ($_POST as $key => $value){       
                if(preg_match("/fio/",$key)){          $fio =  $value; }
                if(preg_match("/numtab/",$key)){   $numtab =  $value; }
                if(preg_match("/phone/",$key)){   $phone =  $value; }
}//POST
$query = $this->db->query("SELECT id FROM staff   WHERE  numtab='$numtab'");
$row = $query->row();
 if($row){ 
              // print "Sorry, такой табельный номер уже есть!"; 
              //print "<script>location='/editor_mysql_table_yes/';</script>";  <== POST

$post_submit = "<form  method='post' action='/editor_mysql_table/'>
    <input type='hidden' name='ntab' value='yes'> 
     </form>
   <script>document.forms[0].submit()</script>";
print $post_submit;

             }else{ 
$data = array(
        'fio' => $fio,
        'numtab' => $numtab,
        'phone' => $phone
);
$this->db->insert('staff', $data);
$this->db->close();
}//else
print "<script>location='/editor_mysql_table/';</script>";
?>	