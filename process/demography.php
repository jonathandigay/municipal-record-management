<?php

if(isset($_POST["demography"])){
   $m1 =$_POST["m1"];
   $f1 =$_POST["f1"];
   $m2 =$_POST["m2"];
   $f2 =$_POST["f2"];
   $m3 =$_POST["m3"];
   $f3 =$_POST["f3"];
   $m4 =$_POST["m4"];
   $f4 =$_POST["f4"];
   $m5 =$_POST["m5"];
   $f5 =$_POST["f5"];
   $m6 =$_POST["m6"];
   $f6 =$_POST["f6"];
   $m7 =$_POST["m7"];
   $f7 =$_POST["f7"];
   $m8 =$_POST["m8"];
   $f8 =$_POST["f8"];
   $m9 =$_POST["m9"];
   $f9 =$_POST["f9"];
   $m10 =$_POST["m10"];
   $f10 =$_POST["f10"];
   $m11 =$_POST["m11"];
   $f11 =$_POST["f11"];
   $m12 =$_POST["m12"];
   $f12 =$_POST["f12"];
   $m13 =$_POST["m13"];
   $f13 =$_POST["f13"];
   $m14 =$_POST["m14"];
   $f14 =$_POST["f14"];
   $m15 =$_POST["m15"];
   $f15 =$_POST["f15"];
   $m16 =$_POST["m16"];
   $f16 =$_POST["f16"];
   $m17 =$_POST["m17"];
   $f17 =$_POST["f17"];
   $m18 =$_POST["m18"];
   $f18 =$_POST["f18"];
   $m19 =$_POST["m19"];
   $f19 =$_POST["f19"];
   $m20 =$_POST["m20"];
   $f20 =$_POST["f20"];
   $m21 =$_POST["m21"];
   $f21 =$_POST["f21"];
   $m22 =$_POST["m22"];
   $f22 =$_POST["f22"];
   $m23 =$_POST["m23"];
   $f23 =$_POST["f23"];
   $m24 =$_POST["m24"];
   $f24 =$_POST["f24"];
   $m25 =$_POST["m25"];
   $f25 =$_POST["f25"];
   $m26 =$_POST["m26"];
   $f26 =$_POST["f26"];
   $m27 =$_POST["m27"];
   $f27 =$_POST["f27"];
   $m28 =$_POST["m28"];
   $f28 =$_POST["f28"];
   $m29 =$_POST["m29"];
   $f29 =$_POST["f29"];
   $m30 =$_POST["m30"];
   $f30 =$_POST["f30"];
   $m31 =$_POST["m31"];
   $f31 =$_POST["f31"];
   $m32 =$_POST["m32"];
   $f32 =$_POST["f32"];
   $m33 =$_POST["m33"];
   $f33 =$_POST["f33"];
   $m34 =$_POST["m34"];
   $f34 =$_POST["f34"];
   $m35 =$_POST["m35"];
   $f35 =$_POST["f35"];
   $m36 =$_POST["m36"];
   $f36 =$_POST["f36"];
   $barangay =$_POST["barangay"];
   $year =$_POST["year"];
   $householdaverage =$_POST["householdaverage"];
   $preparedby =$_POST["preparedby"];
   $reviewedby =$_POST["reviewedby"];
   





   require("../database/connection.php");
   $dbconnection->query("INSERT INTO soc_dev_demography (barangay,year, m1,f1,m2,f2,m3,f3,m4,f4,m5,f5,m6,f6,m7,f7,m8,f8 ,m9,f9,m10,f10,m11,f11,m12,f12,m13,f13,m14,f14,m15,f15,m16,f16,m17,f17,m18,f18,m19,f19,m20,f20,m21,f21,m22,f22,m23,f23,m24,f24,m25,f25,m26,f26,m27,f27,m28,f28,m29,f29,m30,f30,m31,f31,m32,f32,m33,f33,m34,f34,m35,f35,m36,f36,averagehousehold,preparedby,reviewedby) VALUES ('$barangay' , '$year', $m1,$f1,$m2,$f2,$m3,$f3,$m4,$f4,$m5,$f5,$m6,$f6,$m7,$f7,$m8,$f8,$m9,$f9,$m10,$f10,$m11,$f11,$m12,$f12,$m13,$f13,$m14,$f14,$m15,$f15,$m16,$f16,$m17,$f17,$m18,$f18,$m19,$f19,$m20,$f20,$m21,$f21,$m22,$f22,$m23,$f23,$m24,$f24,$m25,$f25,$m26,$f26,$m27,$f27,$m28,$f28,$m29,$f29,$m30,$f30,$m31,$f31,$m32,$f32,$m33,$f33,$m34,$f34,$m35,$f35,$m36,$f36,$householdaverage,'$preparedby','$reviewedby')");
}



?>