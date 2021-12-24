<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);
  
  echo "<br><h2><center><b>รายงานสถานการณ์ COVID-19 ประจำวัน แยกตามรายจังหวัด</b></center></h2><br>";
  echo "<center><table border='1'>";
  echo "<tr align='center'>
        <td bgcolor='#99CC99'><b>ลำดับ</b></td>
        <td bgcolor='#FFCC66'><b>จังหวัด</b></td>
        <td bgcolor='#996699'><b>ผู้ป่วยใหม่</b></td>
        <td bgcolor='#6699CC'><b>ผู้ป่วยรวม</b></td>
        <td bgcolor='#FFFF66'><b>ผู้ป่วยในประเทศ</b></td>
        <td bgcolor='#CC6666'><b>ผู้ป่วยรวมในประเทศ</b></td>
        <td bgcolor='#99FFFF'><b>ผู้เสียชีวิตใหม่</b></td>
        <td bgcolor='#FFCC00'><b>ผู้เสียชีวิตรวม</b></td></font></tr>";
 
  foreach($data as $key=>$val){
    echo "<tr align='center'>";
    echo "<td bgcolor='#F0FFF0'>";
    echo ($key+1);
    echo "</td>";
    
    echo "<td bgcolor='#FFFFCC'>";
    echo $val->province;
    echo "</td>";
    
    echo "<td bgcolor='#E6E6FA'>";
    echo $val->new_case;
    echo "</td>";
    
    echo "<td bgcolor='#F0F8FF'>";
    echo $val->total_case;
    echo "</td>";
    
    echo "<td bgcolor='#FFFFF0'>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#FFE4E1'>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    
    echo "<td bgcolor='#F0FFFF'>";
    echo $val->new_death;
    echo "</td>";
    
    echo "<td bgcolor='#FFF8DC'>";
    echo $val->total_death;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table><br>"; 

  echo "<center><b>วันที่อัปเดต</b></center>";
  echo $val->update_date;
  echo "</center>";
?>
