<?php
 include("../bd.php");
 $i=0;
 $result=mysql_query("SELECT * FROM settings",$db) or die(mysql_error());     
 do {
 $row[] = mysql_fetch_assoc($result); $row[$i]['value']=intval($row[$i]['value']);
 } while ($i++<512);


 $settings=array(
    array(0,0,0x138,null,'list',$row[0x138+8]['value'],$row[0x138+16]['value'],
       $row[0x138]['value'],(($row[0x138+8]['value']==$row[0x138+16]['value']) || $row[0x138]['value']==255)?'off':'on'),
    array(0,1,0x139,null,'list',$row[0x139+8]['value'],$row[0x139+16]['value'],
       $row[0x139]['value'],(($row[0x139+8]['value']==$row[0x139+16]['value']) || $row[0x139]['value']==255)?'off':'on'),
    array(0,2,0x13A,null,'ac',$row[0x13A+8]['value'],$row[0x13A+16]['value'],
       $row[0x13A]['value'],(($row[0x13A+8]['value']==$row[0x13A+16]['value']) || $row[0x13A]['value']==255)?'off':'on'),
    array(0,3,0x13B,null,'list',$row[0x13B+8]['value'],$row[0x13B+16]['value'],
       $row[0x13B]['value'],(($row[0x13B+8]['value']==$row[0x13B+16]['value']) || $row[0x13B]['value']==255)?'off':'on'),
    array(0,4,0x13C,null,'list',$row[0x13C+8]['value'],$row[0x13C+16]['value'],
       $row[0x13C]['value'],(($row[0x13C+8]['value']==$row[0x13C+16]['value']) || $row[0x13C]['value']==255)?'off':'on'), 
    array(0,5,0x13D,null,'dc_dop',$row[0x13D+8]['value'],$row[0x13D+16]['value'],
       $row[0x13D]['value'],(($row[0x13D+8]['value']==$row[0x13D+16]['value']) || $row[0x13D]['value']==255)?'off':'on'),
    array(0,6,0x13E,null,'number',$row[0x13E+8]['value'],$row[0x13E+16]['value'],
       $row[0x13E]['value'],(($row[0x13E+8]['value']==$row[0x13E+16]['value']) || $row[0x13E]['value']==255)?'off':'on'),
    array(0,7,0x13F,null,'list',$row[0x13F+8]['value'],$row[0x13F+16]['value'],
       $row[0x13F]['value'],(($row[0x13F+8]['value']==$row[0x13F+16]['value']) || $row[0x13F]['value']==255)?'off':'on'), 
    array(1,0,0x150,null,'list',$row[0x150+8]['value'],$row[0x150+16]['value'],
       $row[0x150]['value'],(($row[0x150+8]['value']==$row[0x150+16]['value']) || $row[0x150]['value']==255)?'off':'on'), 
    array(1,1,0x151,null,'list',$row[0x151+8]['value'],$row[0x151+16]['value'],
       $row[0x151]['value'],(($row[0x151+8]['value']==$row[0x151+16]['value']) || $row[0x151]['value']==255)?'off':'on'), 
    array(1,2,0x152,$row[0x107]['value'],'power_dop',$row[0x152+8]['value'],$row[0x152+16]['value'],
       $row[0x152]['value'],(($row[0x152+8]['value']==$row[0x152+16]['value']) || $row[0x152]['value']==255)?'off':'on'), 
    array(1,3,0x156,null,'list',$row[0x156+8]['value'],$row[0x156+16]['value'],
       $row[0x156]['value'],(($row[0x156+8]['value']==$row[0x156+16]['value']) || $row[0x156]['value']==255)?'off':'on'), 
    array(1,4,0x157,null,'number',$row[0x157+8]['value'],$row[0x157+16]['value'],
       $row[0x157]['value'],(($row[0x157+8]['value']==$row[0x157+16]['value']) || $row[0x157]['value']==255)?'off':'on'), 
    array(2,0,0x168,$row[0x107]['value'],'power_dop',$row[0x168+8]['value'],$row[0x168+16]['value'],
       $row[0x168]['value'],(($row[0x168+8]['value']==$row[0x168+16]['value']) || $row[0x168]['value']==255)?'off':'on'), 
    array(2,1,0x169,null,'ac',$row[0x169+8]['value'],$row[0x169+16]['value'],
       $row[0x169]['value'],(($row[0x169+8]['value']==$row[0x169+16]['value']) || $row[0x169]['value']==255)?'off':'on'), 
    array(2,2,0x16A,null,'ac',$row[0x16A+8]['value'],$row[0x16A+16]['value'],
       $row[0x16A]['value'],(($row[0x16A+8]['value']==$row[0x16A+16]['value']) || $row[0x16A]['value']==255)?'off':'on'), 
    array(2,3,0x16B,null,'list',$row[0x16B+8]['value'],$row[0x16B+16]['value'],
       $row[0x16B]['value'],(($row[0x16B+8]['value']==$row[0x16B+16]['value']) || $row[0x16B]['value']==255)?'off':'on'), 
    array(2,4,0x16C,$row[0x103]['value'],'dc_dop',$row[0x16C+8]['value'],$row[0x16C+16]['value'],
       $row[0x16C]['value'],(($row[0x16C+8]['value']==$row[0x16C+16]['value']) || $row[0x16C]['value']==255)?'off':'on'), 
    array(2,5,0x16D,null,'time',$row[0x16D+8]['value'],$row[0x16D+16]['value'],
       $row[0x16D]['value'],(($row[0x16D+8]['value']==$row[0x16D+16]['value']) || $row[0x16D]['value']==255)?'off':'on'), 
    array(2,6,0x16E,null,'time',$row[0x16E+8]['value'],$row[0x16E+16]['value'],
       $row[0x16E]['value'],(($row[0x16E+8]['value']==$row[0x16E+16]['value']) || $row[0x16E]['value']==255)?'off':'on'), 
    array(2,7,0x16F,null,'number',$row[0x16F+8]['value'],$row[0x16F+16]['value'],
       $row[0x16F]['value'],(($row[0x16F+8]['value']==$row[0x16F+16]['value']) || $row[0x16F]['value']==255)?'off':'on'), 
    array(3,0,0x180,null,'list',$row[0x180+8]['value'],$row[0x180+16]['value'],
       $row[0x180]['value'],(($row[0x180+8]['value']==$row[0x180+16]['value']) || $row[0x180]['value']==255)?'off':'on'), 
    array(3,1,0x181,null,'capacity',$row[0x181+8]['value'],$row[0x181+16]['value'],
       $row[0x181]['value'],(($row[0x181+8]['value']==$row[0x181+16]['value']) || $row[0x181]['value']==255)?'off':'on'), 
    array(3,2,0x182,null,'current_c',$row[0x182+8]['value'],$row[0x182+16]['value'],
       $row[0x182]['value'],(($row[0x182+8]['value']==$row[0x182+16]['value']) || $row[0x182]['value']==255)?'off':'on'), 
    array(3,3,0x183,null,'current_c',$row[0x183+8]['value'],$row[0x183+16]['value'],
       $row[0x183]['value'],(($row[0x183+8]['value']==$row[0x183+16]['value']) || $row[0x183]['value']==255)?'off':'on'), 
    array(3,4,0x184,null,'list',$row[0x184+8]['value'],$row[0x184+16]['value'],
       $row[0x184]['value'],(($row[0x184+8]['value']==$row[0x184+16]['value']) || $row[0x184]['value']==255)?'off':'on'), 
    array(3,5,0x185,$row[0x104]['value'],'dc_dop',$row[0x185+8]['value'],$row[0x185+16]['value'],
       $row[0x185]['value'],(($row[0x185+8]['value']==$row[0x185+16]['value']) || $row[0x185]['value']==255)?'off':'on'),
    array(3,6,0x186,$row[0x105]['value'],'dc_dop',$row[0x186+8]['value'],$row[0x186+16]['value'],
       $row[0x186]['value'],(($row[0x186+8]['value']==$row[0x186+16]['value']) || $row[0x186]['value']==255)?'off':'on'),
    array(3,7,0x187,$row[0x106]['value'],'dc_dop',$row[0x187+8]['value'],$row[0x187+16]['value'],
       $row[0x187]['value'],(($row[0x187+8]['value']==$row[0x187+16]['value']) || $row[0x187]['value']==255)?'off':'on'),
    array(4,0,0x198,null,'list',$row[0x198+8]['value'],$row[0x198+16]['value'],
       $row[0x198]['value'],(($row[0x198+8]['value']==$row[0x198+16]['value']) || $row[0x198]['value']==255)?'off':'on'),
    array(4,1,0x199,null,'relay',$row[0x199+8]['value'],$row[0x199+16]['value'],
       $row[0x199]['value'],(($row[0x199+8]['value']==$row[0x199+16]['value']) || $row[0x199]['value']==255)?'off':'on'),
    array(4,2,0x19A,null,'relay',$row[0x19A+8]['value'],$row[0x19A+16]['value'],
       $row[0x19A]['value'],(($row[0x19A+8]['value']==$row[0x19A+16]['value']) || $row[0x19A]['value']==255)?'off':'on'),
    array(4,3,0x19B,null,'list',$row[0x19B+8]['value'],$row[0x19B+16]['value'],
       $row[0x19B]['value'],(($row[0x19B+8]['value']==$row[0x19B+16]['value']) || $row[0x19B]['value']==255)?'off':'on'),
    array(4,4,0x19C,null,'relay',$row[0x19C+8]['value'],$row[0x19C+16]['value'],
       $row[0x19C]['value'],(($row[0x19C+8]['value']==$row[0x19C+16]['value']) || $row[0x19C]['value']==255)?'off':'on'),
    array(4,5,0x19D,null,'relay',$row[0x19D+8]['value'],$row[0x19D+16]['value'],
       $row[0x19D]['value'],(($row[0x19D+8]['value']==$row[0x19D+16]['value']) || $row[0x19D]['value']==255)?'off':'on'),
    array(5,0,0x1B0,null,'list',$row[0x1B0+8]['value'],$row[0x1B0+16]['value'],
       $row[0x1B0]['value'],(($row[0x1B0+8]['value']==$row[0x1B0+16]['value']) || $row[0x1B0]['value']==255)?'off':'on'),
    array(5,1,0x1B1,null,'list',$row[0x1B1+8]['value'],$row[0x1B1+16]['value'],
       $row[0x1B1]['value'],(($row[0x1B1+8]['value']==$row[0x1B1+16]['value']) || $row[0x1B1]['value']==255)?'off':'on'),
    array(5,2,0x1B2,null,'list',$row[0x1B2+8]['value'],$row[0x1B2+16]['value'],
       $row[0x1B2]['value'],(($row[0x1B2+8]['value']==$row[0x1B2+16]['value']) || $row[0x1B2]['value']==255)?'off':'on'),
    array(5,3,0x1B3,null,'list',$row[0x1B3+8]['value'],$row[0x1B3+16]['value'],
       $row[0x1B3]['value'],(($row[0x1B3+8]['value']==$row[0x1B3+16]['value']) || $row[0x1B3]['value']==255)?'off':'on'),
    array(5,4,0x1B4,null,'list',$row[0x1B4+8]['value'],$row[0x1B4+16]['value'],
       $row[0x1B4]['value'],(($row[0x1B4+8]['value']==$row[0x1B4+16]['value']) || $row[0x1B4]['value']==255)?'off':'on'),
    array(5,5,0x1B5,null,'list',$row[0x1B5+8]['value'],$row[0x1B5+16]['value'],
       $row[0x1B5]['value'],(($row[0x1B5+8]['value']==$row[0x1B5+16]['value']) || $row[0x1B5]['value']==255)?'off':'on'),
    array(5,6,0x1B6,null,'time',$row[0x1B6+8]['value'],$row[0x1B6+16]['value'],
       $row[0x1B6]['value'],(($row[0x1B6+8]['value']==$row[0x1B6+16]['value']) || $row[0x1B6]['value']==255)?'off':'on'),
    array(5,7,0x1B7,null,'charge_time',$row[0x1B7+8]['value'],$row[0x1B7+16]['value'],
       $row[0x1B7]['value'],(($row[0x1B7+8]['value']==$row[0x1B7+16]['value']) || $row[0x1B7]['value']==255)?'off':'on'),
    array($row[0x06]['value'])
);
 print(json_encode($settings));

 mysql_free_result($result);
 mysql_close($db);

?>