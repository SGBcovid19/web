<?php
date_default_timezone_set("Asia/Jakarta");
$mulai = date('2020-03-26'); // waktu mulai
$exp = date('2020-04-01'); // batas waktu
if(!(strtotime($mulai) <= time() AND strtotime($exp) >= time())){
echo "akhir";
} else {
echo "ada";
}
echo "<br>".strtotime($mulai)."<br>";
echo strtotime($exp)."<br>";
echo time()."<br>";
?>