<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
//https://web-answers.ru/php/kak-peredat-dannye-iz-modeli-v-kontroller.html
$var=array();
 foreach ($_POST as $key => $value){       
 if(preg_match("/;/",$key)){  
                                    $fld=preg_split("/;/",$key);
                                    $id=$fld[1];  
                                   $data = array($fld[0] => $value);
$this->db->where('id', $id);
$this->db->update('staff', $data);
                                   }
}//POST
$this->db->close();
 print "<script>location='/editor_mysql_table/';</script>";

?>
	