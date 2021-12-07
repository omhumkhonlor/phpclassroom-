<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo $data[0]->new_case;
?>
txn_date วันที่
new_case ผู้ป่วยใหม่
total_case ผู้ป่วยรวม
new_case_excludeabroad ผู้ป่วยใหม่ในประเทศ
total_case_excludeabroad ผู้ป่วยรวมในประเทศ
new_death ผู้เสียชีวิตใหม่
total_death ผู้เสียชีวิตรวม
new_recovered หายป่วยใหม่
total_recovered หายป่วยรวม
<?php

$json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all&quot;);
$data = json_decode($json);
echo "ยอดผู้ป่วยวันนี้ : ".$data[0]->new_case."<br>";
echo "ยอดผู้ป่วยรวม : ".$data[0]->total_case."<br>";
   
