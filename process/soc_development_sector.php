<?php

if(isset($_POST["demography"])){
   $m1 =!empty($_POST["m1"]) ? $_POST["m1"]: 0;
   $f1 =!empty($_POST["f1"]) ? $_POST["f1"]:0;
   $m2 =!empty($_POST["m2"]) ? $_POST["m2"]: 0;
   $f2 =!empty($_POST["f2"]) ? $_POST["f2"]:0;
   $m3 =!empty($_POST["m3"]) ? $_POST["m3"]: 0;
   $f3 =!empty($_POST["f3"]) ? $_POST["f3"]:0;
   $m4 =!empty($_POST["m4"]) ? $_POST["m4"]: 0;
   $f4 =!empty($_POST["f4"]) ? $_POST["f4"]:0;
   $m5 =!empty($_POST["m5"]) ? $_POST["m5"]: 0;
   $f5 =!empty($_POST["f5"]) ? $_POST["f5"]:0;
   $m6 =!empty($_POST["m6"]) ? $_POST["m6"]: 0;
   $f6 =!empty($_POST["f6"]) ? $_POST["f6"]:0;
   $m7 =!empty($_POST["m7"]) ? $_POST["m7"]: 0;
   $f7 =!empty($_POST["f7"]) ? $_POST["f7"]:0;
   $m8 =!empty($_POST["m8"]) ? $_POST["m8"]: 0;
   $f8 =!empty($_POST["f8"]) ? $_POST["f8"]:0;
   $m9 =!empty($_POST["m9"]) ? $_POST["m9"]: 0;
   $f9 =!empty($_POST["f9"]) ? $_POST["f9"]:0;
   $m10 =!empty($_POST["m10"]) ? $_POST["m10"]: 0;
   $f10 =!empty($_POST["f10"]) ? $_POST["f10"]:0;
   $m11 =!empty($_POST["m11"]) ? $_POST["m11"]: 0;
   $f11 =!empty($_POST["f11"]) ? $_POST["f11"]:0;
   $m12 =!empty($_POST["m12"]) ? $_POST["m12"]: 0;
   $f12 =!empty($_POST["f12"]) ? $_POST["f12"]:0;
   $m13 =!empty($_POST["m13"]) ? $_POST["m13"]: 0;
   $f13 =!empty($_POST["f13"]) ? $_POST["f13"]:0;
   $m14 =!empty($_POST["m14"]) ? $_POST["m14"]: 0;
   $f14 =!empty($_POST["f14"]) ? $_POST["f14"]:0;
   $m15 =!empty($_POST["m15"]) ? $_POST["m15"]: 0;
   $f15 =!empty($_POST["f15"]) ? $_POST["f15"]:0;
   $m16 =!empty($_POST["m16"]) ? $_POST["m16"]: 0;
   $f16 =!empty($_POST["f16"]) ? $_POST["f16"]:0;
   $m17 =!empty($_POST["m17"]) ? $_POST["m17"]: 0;
   $f17 =!empty($_POST["f17"]) ? $_POST["f17"]:0;
   $m18 =!empty($_POST["m18"]) ? $_POST["m18"]: 0;
   $f18 =!empty($_POST["f18"]) ? $_POST["f18"]:0;
   $m19 =!empty($_POST["m19"]) ? $_POST["m19"]: 0;
   $f19 =!empty($_POST["f19"]) ? $_POST["f19"]:0;
   $m20 =!empty($_POST["m20"]) ? $_POST["m20"]: 0;
   $f20 =!empty($_POST["f20"]) ? $_POST["f20"]:0;
   $m21 =!empty($_POST["m21"]) ? $_POST["m21"]: 0;
   $f21 =!empty($_POST["f21"]) ? $_POST["f21"]:0;
   $m22 =!empty($_POST["m22"]) ? $_POST["m22"]: 0;
   $f22 =!empty($_POST["f22"]) ? $_POST["f22"]:0;
   $m23 =!empty($_POST["m23"]) ? $_POST["m23"]: 0;
   $f23 =!empty($_POST["f23"]) ? $_POST["f23"]:0;
   $m24 =!empty($_POST["m24"]) ? $_POST["m24"]: 0;
   $f24 =!empty($_POST["f24"]) ? $_POST["f24"]:0;
   $m25 =!empty($_POST["m25"]) ? $_POST["m25"]: 0;
   $f25 =!empty($_POST["f25"]) ? $_POST["f25"]:0;
   $m26 =!empty($_POST["m26"]) ? $_POST["m26"]: 0;
   $f26 =!empty($_POST["f26"]) ? $_POST["f26"]:0;
   $m27 =!empty($_POST["m27"]) ? $_POST["m27"]: 0;
   $f27 =!empty($_POST["f27"]) ? $_POST["f27"]:0;
   $m28 =!empty($_POST["m28"]) ? $_POST["m28"]: 0;
   $f28 =!empty($_POST["f28"]) ? $_POST["f28"]:0;
   $m29 =!empty($_POST["m29"]) ? $_POST["m29"]: 0;
   $f29 =!empty($_POST["f29"]) ? $_POST["f29"]:0;
   $m30 =!empty($_POST["m30"]) ? $_POST["m30"]: 0;
   $f30 =!empty($_POST["f30"]) ? $_POST["f30"]:0;
   $m31 =!empty($_POST["m31"]) ? $_POST["m31"]: 0;
   $f31 =!empty($_POST["f31"]) ? $_POST["f31"]:0;
   $m32 =!empty($_POST["m32"]) ? $_POST["m32"]: 0;
   $f32 =!empty($_POST["f32"]) ? $_POST["f32"]:0;
   $m33 =!empty($_POST["m33"]) ? $_POST["m33"]: 0;
   $f33 =!empty($_POST["f33"]) ? $_POST["f33"]:0;
   $m34 =!empty($_POST["m34"]) ? $_POST["m34"]: 0;
   $f34 =!empty($_POST["f34"]) ? $_POST["f34"]:0;
   $m35 =!empty($_POST["m35"]) ? $_POST["m35"]: 0;
   $f35 =!empty($_POST["f35"]) ? $_POST["f35"]:0;
   $m36 =!empty($_POST["m36"]) ? $_POST["m36"]: 0;
   $f36 =!empty($_POST["f36"]) ? $_POST["f36"]:0;
   $barangay =$_POST["barangay"];
   $year =$_POST["year"];

   $householdaverage =!empty($_POST["householdaverage"]) ? $_POST["householdaverage"] : 0;
   
   $preparedby =!empty($_POST["preparedby"]) ? $_POST["preparedby"] : 0 ;
   $reviewedby =!empty($_POST["reviewedby"]) ? $_POST["reviewedby"]: 0;


  echo $householdaverage;



   require("../database/connection.php");
   $dbconnection->query("INSERT INTO soc_dev_demography (barangay,
   year,
    m1,
   f1,
   m2,
   f2,
   m3,
   f3,
   m4,
   f4,
   m5,
   f5,
   m6,
   f6,
   m7,
   f7,
   m8,
   f8 ,
   m9,
   f9,
   m10,
   f10,
   m11,
   f11,
   m12,
   f12,
   m13,
   f13,
   m14,
   f14,
   m15,
   f15,
   m16,
   f16,
   m17,
   f17,
   m18,
   f18,
   m19,
   f19,
   m20,
   f20,
   m21,
   f21,
   m22,
   f22,
   m23,
   f23,
   m24,
   f24,
   m25,
   f25,
   m26,
   f26,
   m27,
   f27,
   m28,
   f28,
   m29,
   f29,
   m30,
   f30,
   m31,
   f31,
   m32,
   f32,
   m33,
   f33,
   m34,
   f34,
   m35,
   f35,
   m36,
   f36,
   averagehousehold,
   preparedby,
   reviewedby
   ) VALUES (
    '$barangay' ,
    '$year',
    $m1,
   $f1,
   $m2,
   $f2,
   $m3,
   $f3,
   $m4,
   $f4,
   $m5,
   $f5,
   $m6,
   $f6,
   $m7,
   $f7,
   $m8,
   $f8,
   $m9,
   $f9,
   $m10,
   $f10,
   $m11,
   $f11,
   $m12,
   $f12,
   $m13,
   $f13,
   $m14,
   $f14,
   $m15,
   $f15,
   $m16,
   $f16,
   $m17,
   $f17,
   $m18,
   $f18,
   $m19,
   $f19,
   $m20,
   $f20,
   $m21,
   $f21,
   $m22,
   $f22,
   $m23,
   $f23,
   $m24,
   $f24,
   $m25,
   $f25,
   $m26,
   $f26,
   $m27,
   $f27,
   $m28,
   $f28,
   $m29,
   $f29,
   $m30,
   $f30,
   $m31,
   $f31,
   $m32,
   $f32,
   $m33,
   $f33,
   $m34,
   $f34,
   $m35,
   $f35,
   $m36,
   $f36,
   $householdaverage,
   '$preparedby',
   '$reviewedby')");

  }



?>