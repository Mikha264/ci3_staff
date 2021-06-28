<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeleditormysqltable extends CI_Model
{
    public function func_editor_mysql_table()
    {
$out = "";
$query = $this->db->query('SELECT * FROM staff');
foreach ($query->result_array() as $row)
{
 $out .= "<tr>
<td align=left valign=top><input type='text' name='fio;".$row['id']."'         value='".$row['fio']."'>       </td>
<td align=left valign=top><input type='text' name='numtab;".$row['id']."' value='".$row['numtab']."' readonly></td>
<td align=left valign=top><input type='text' name='phone;".$row['id']."'    value='".$row['phone']."' type='number'></td>
</tr>";
}
        $this->db->close();
        return $out;
    }
}
