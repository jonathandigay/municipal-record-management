<?php




if(isset($_POST["demography"])){




 
// demography section
   $barangay =$_POST["barangay"];
   $year =$_POST["year"];
   $preparedby =!empty($_POST["preparedby"]) ? $_POST["preparedby"] : "none" ;
   $reviewedby =!empty($_POST["reviewedby"]) ? $_POST["reviewedby"]: "none";
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
   $num1 =!empty($_POST["num1"]) ? $_POST["num1"]:0;
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


// education
   $m37 =!empty($_POST["m37"]) ? $_POST["m37"]: 0;
   $f37 =!empty($_POST["f37"]) ? $_POST["f37"]:0;
   $m38 =!empty($_POST["m38"]) ? $_POST["m38"]: 0;
   $f38 =!empty($_POST["f38"]) ? $_POST["f38"]:0;
   $m39 =!empty($_POST["m39"]) ? $_POST["m39"]: 0;
   $f39 =!empty($_POST["f39"]) ? $_POST["f39"]:0;
   $m40 =!empty($_POST["m40"]) ? $_POST["m40"]: 0;
   $f40 =!empty($_POST["f40"]) ? $_POST["f40"]:0;
   $m41 =!empty($_POST["m41"]) ? $_POST["m41"]: 0;
   $f41 =!empty($_POST["f41"]) ? $_POST["f41"]:0;
   $m42 =!empty($_POST["m42"]) ? $_POST["m42"]: 0;
   $f42 =!empty($_POST["f42"]) ? $_POST["f42"]:0;
   $m43 =!empty($_POST["m43"]) ? $_POST["m43"]: 0;
   $f43 =!empty($_POST["f43"]) ? $_POST["f43"]:0;
   $m44 =!empty($_POST["m44"]) ? $_POST["m44"]: 0;
   $f44 =!empty($_POST["f44"]) ? $_POST["f44"]:0;

// health
   $num2 =!empty($_POST["num2"]) ? $_POST["num2"]:0;
   $num3 =!empty($_POST["num3"]) ? $_POST["num3"]:0;
   $num4 =!empty($_POST["num4"]) ? $_POST["num4"]:0;
   $num5 =!empty($_POST["num5"]) ? $_POST["num5"]:0;
   $num6 =!empty($_POST["num6"]) ? $_POST["num6"]:0;
   $bol1 =!empty($_POST["bol1"]) ? $_POST["bol1"]:'false';
   $bol2 =!empty($_POST["bol2"]) ? $_POST["bol2"]:'false';
   $bol3 =!empty($_POST["bol3"]) ? $_POST["bol3"]:'false';
   $bol4 =!empty($_POST["bol4"]) ? $_POST["bol4"]:'false';
   $bol5 =!empty($_POST["bol5"]) ? $_POST["bol5"]:'false';
   $bol6 =!empty($_POST["bol6"]) ? $_POST["bol6"]:'false';
   $bol7 =!empty($_POST["bol7"]) ? $_POST["bol7"]:'false';
   $num7 =!empty($_POST["num7"]) ? $_POST["num7"]:0;
   $num8 =!empty($_POST["num8"]) ? $_POST["num8"]:0;
   $num9 =!empty($_POST["num9"]) ? $_POST["num9"]:0;
   $num10 =!empty($_POST["num10"]) ? $_POST["num10"]:0;
   $num11 =!empty($_POST["num11"]) ? $_POST["num11"]:0;
   $num12 =!empty($_POST["num12"]) ? $_POST["num12"]:0;
   $num13 =!empty($_POST["num13"]) ? $_POST["num13"]:0;


   // social welfare
   $num14 =!empty($_POST["num14"]) ? $_POST["num14"]:0;
   $text1 =!empty($_POST["text1"]) ? $_POST["text1"]:null;

   // gender base violence
   $bol8 =!empty($_POST["bol8"]) ? $_POST["bol8"]:'false';
   $bol9 =!empty($_POST["bol9"]) ? $_POST["bol9"]:'false';
   $bol10 =!empty($_POST["bol10"]) ? $_POST["bol10"]:'false';
   $bol11 =!empty($_POST["bol11"]) ? $_POST["bol11"]:'false';
   $text2 =!empty($_POST["text2"]) ? $_POST["text2"]:null;

   // media and film
   $num15 =!empty($_POST["num15"]) ? $_POST["num15"]:0;

   // social protection
   $m45  =!empty($_POST["m45"]) ? $_POST["m45"]: 0;
   $f45   =!empty($_POST["f45"]) ? $_POST["f45"]:0;

   // income and poverty
   $num16 =!empty($_POST["num16"]) ? $_POST["num16"]:0;
   $num17 =!empty($_POST["num17"]) ? $_POST["num17"]:0;

   // labor and employment
   $m46   =!empty($_POST["m46"]) ? $_POST["m46"]:0;
   $f46  =!empty($_POST["f46"]) ? $_POST["f46"]:0;
   $m47  =!empty($_POST["m47"]) ? $_POST["m47"]:0;
   $f47    =!empty($_POST["f47"]) ? $_POST["f47"]:0;
   $m48   =!empty($_POST["m48"]) ? $_POST["m48"]: 0;
   $f48   =!empty($_POST["f48"]) ? $_POST["f48"]:0;
   $m49   =!empty($_POST["m49"]) ? $_POST["m49"]: 0;
   $f49   =!empty($_POST["f49"]) ? $_POST["f49"]:0;
   $m50   =!empty($_POST["m50"]) ? $_POST["m50"]: 0;
   $f50   =!empty($_POST["f50"]) ? $_POST["f50"]:0;
   $m51   =!empty($_POST["m51"]) ? $_POST["m51"]: 0;
   $f51   =!empty($_POST["f51"]) ? $_POST["f51"]:0;
   $m52   =!empty($_POST["m52"]) ? $_POST["m52"]: 0;
   $f52   =!empty($_POST["f52"]) ? $_POST["f52"]:0;
   $m53   =!empty($_POST["m53"]) ? $_POST["m53"]: 0;
   $f53   =!empty($_POST["f53"]) ? $_POST["f53"]:0;
   $m54   =!empty($_POST["m54"]) ? $_POST["m54"]: 0;
   $f54   =!empty($_POST["f54"]) ? $_POST["f54"]:0;
   $m55   =!empty($_POST["m55"]) ? $_POST["m55"]: 0;
   $f55   =!empty($_POST["f55"]) ? $_POST["f55"]:0;
   $m56   =!empty($_POST["m56"]) ? $_POST["m56"]: 0;
   $f56   =!empty($_POST["f56"]) ? $_POST["f56"]:0;
   $m57   =!empty($_POST["m57"]) ? $_POST["m57"]: 0;
   $f57   =!empty($_POST["f57"]) ? $_POST["f57"]:0;
   $m58   =!empty($_POST["m58"]) ? $_POST["m58"]: 0;
   $f58   =!empty($_POST["f58"]) ? $_POST["f58"]:0;
   $m59   =!empty($_POST["m59"]) ? $_POST["m59"]: 0;
   $f59   =!empty($_POST["f59"]) ? $_POST["f59"]:0;
   

// fishery
   $text3 =!empty($_POST["text3"]) ? $_POST["text3"]:null;
   $text4 =!empty($_POST["text4"]) ? $_POST["text4"]:null;
   $text5 =!empty($_POST["text5"]) ? $_POST["text5"]:null;
   $text6 =!empty($_POST["text6"]) ? $_POST["text6"]:null;

// forestry
   $text7 =!empty($_POST["text7"]) ? $_POST["text7"]:null;
   $text8 =!empty($_POST["text8"]) ? $_POST["text8"]:null;
   $text9 =!empty($_POST["text9"]) ? $_POST["text9"]:null;

// industry
   $text10 =!empty($_POST["text10"]) ? $_POST["text10"]:null;
   $num18 =!empty($_POST["num18"]) ? $_POST["num18"]:0;
   $num19 =!empty($_POST["num19"]) ? $_POST["num19"]:0;
   $num20 =!empty($_POST["num20"]) ? $_POST["num20"]:0;

// Resources base and land 
   $num21 =!empty($_POST["num21"]) ? $_POST["num21"]:0;
   $num22 =!empty($_POST["num22"]) ? $_POST["num22"]:0;
   $num23 =!empty($_POST["num23"]) ? $_POST["num23"]:0;
   $m60 =!empty($_POST["m60"]) ? $_POST["m60"]: 0;
   $f60 =!empty($_POST["f60"]) ? $_POST["f60"]:0;
   $m61 =!empty($_POST["m61"]) ? $_POST["m61"]: 0;
   $f61 =!empty($_POST["f61"]) ? $_POST["f61"]:0;
   $m62 =!empty($_POST["m62"]) ? $_POST["m62"]: 0;
   $f62 =!empty($_POST["f62"]) ? $_POST["f62"]:0;
   $m63 =!empty($_POST["m63"]) ? $_POST["m63"]: 0;
   $f63 =!empty($_POST["f63"]) ? $_POST["f63"]:0;
   $m64 =!empty($_POST["m64"]) ? $_POST["m64"]: 0;
   $f64 =!empty($_POST["f64"]) ? $_POST["f64"]:0;
   $m65 =!empty($_POST["m65"]) ? $_POST["m65"]: 0;
   $f65 =!empty($_POST["f65"]) ? $_POST["f65"]:0;
   $m66 =!empty($_POST["m66"]) ? $_POST["m66"]: 0;
   $f66 =!empty($_POST["f66"]) ? $_POST["f66"]:0;
   $m67 =!empty($_POST["m67"]) ? $_POST["m67"]: 0;
   $f67 =!empty($_POST["f67"]) ? $_POST["f67"]:0;
   $m68 =!empty($_POST["m68"]) ? $_POST["m68"]: 0;
   $f68 =!empty($_POST["f68"]) ? $_POST["f68"]:0;
   $m69 =!empty($_POST["m69"]) ? $_POST["m69"]: 0;
   $f69 =!empty($_POST["f69"]) ? $_POST["f69"]:0;
   $m70 =!empty($_POST["m70"]) ? $_POST["m70"]: 0;
   $f70 =!empty($_POST["f70"]) ? $_POST["f70"]:0;
   $m71 =!empty($_POST["m71"]) ? $_POST["m71"]: 0;
   $f71 =!empty($_POST["f71"]) ? $_POST["f71"]:0;
   $m72 =!empty($_POST["m72"]) ? $_POST["m72"]: 0;
   $f72 =!empty($_POST["f72"]) ? $_POST["f72"]:0;
   $m73 =!empty($_POST["m73"]) ? $_POST["m73"]: 0;
   $f73 =!empty($_POST["f73"]) ? $_POST["f73"]:0;
   $m74 =!empty($_POST["m74"]) ? $_POST["m74"]: 0;
   $f74 =!empty($_POST["f74"]) ? $_POST["f74"]:0;
  


   // tenure and management
   $text11 =!empty($_POST["text11"]) ? $_POST["text11"]:null;
   $num24 =!empty($_POST["num24"]) ? $_POST["num24"]:0;
   $m75  =!empty($_POST["m75"]) ? $_POST["m75"]: 0;
   $f75  =!empty($_POST["f75"]) ? $_POST["f75"]:0;

   // land use and land productivity
   $m76  =!empty($_POST["m76"]) ? $_POST["m76"]: 0;
   $f76  =!empty($_POST["f76"]) ? $_POST["f76"]:0;
   $num25 =!empty($_POST["num25"]) ? $_POST["num25"]:0;
   $m77  =!empty($_POST["m77"]) ? $_POST["m77"]: 0;
   $f77  =!empty($_POST["f77"]) ? $_POST["f77"]:0;
   $m78  =!empty($_POST["m78"]) ? $_POST["m78"]: 0;
   $f78  =!empty($_POST["f78"]) ? $_POST["f78"]:0;
   $m79  =!empty($_POST["m79"]) ? $_POST["m79"]: 0;
   $f79  =!empty($_POST["f79"]) ? $_POST["f79"]:0;





$result = $dbconnection->query("SELECT * FROM social_development");

if($result->num_rows >0){
      while($row = $result->fetch_assoc()){


// update 
      if( $barangay === $row["barangay"] && strcmp($year, $row["year"])===0 ){
$id = $row["id"];
// demography
         if(isset($_POST["m1"])  ){
            



            
            $dbconnection->query("UPDATE social_development
            SET preparedby='$preparedby',
reviewedby='$reviewedby',
m1= $m1,
f1= $f1,
m2= $m2,
f2= $f2,
m3= $m3,
f3= $f3,
m4= $m4,
f4= $f4,
m5= $m5,
f5= $f5,
m6= $m6,
f6= $f6,
m7= $m7,
f7= $f7,
m8= $m8,
f8 =$f8,
m9= $m9,
f9= $f9,
m10= $m10,
f10= $f10,
m11= $m11,
f11= $f11,
m12= $m12,
f12= $f12,
m13= $m13,
f13= $f13,
m14= $m14,
f14= $f14,
m15= $m15,
f15= $f15,
m16= $m16,
f16= $f16,
m17= $m17,
f17= $f17,
m18= $m18,
f18= $f18,
m19= $m19,
f19= $f19,
m20= $m20,
f20= $f20,
m21= $m21,
f21= $f21,
m22= $m22,
f22= $f22,
m23= $m23,
f23= $f23,
m24= $m24,
f24= $f24,
m25= $m25,
f25= $f25,
m26= $m26,
f26= $f26,
m27= $m27,
f27= $f27,
m28= $m28,
f28= $f28,
m29= $m29,
f29= $f29,
num1= $num1,
m30= $m30,
f30= $f30,
m31= $m31,
f31= $f31,
m32= $m32,
f32= $f32,
m33= $m33,
f33= $f33,
m34= $m34,
f34= $f34,
m35= $m35,
f35= $f35,
m36= $m36,
f36= $f36,
m37= $m37,
f37= $f37,
m38= $m38,
f38= $f38,
m39= $m39,
f39= $f39,
m40= $m40,
f40= $f40,
m41= $m41,
f41= $f41,
m42= $m42,
f42= $f42,
m43= $m43,
f43= $f43,
m44= $m44,
f44= $f44 WHERE id=$id ; ");

setcookie("popup_modal","saverecord");
header("Location: /barangay/demography.php" );

};

// education
if(isset($_POST["m37"]) ){
    $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
m37=$m37,
f37=$f37,
m38=$m38,
f38=$f38,
m39=$m39,
f39=$f39,
m40=$m40,
f40=$f40,
m41=$m41,
f41=$f41,
m42=$m42,
f42=$f42,
m43=$m43,
f43=$f43,
m44=$m44,
f44=$f44 WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/education.php");

}

// healyh
if(isset($_POST["num2"]) ){
   $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
 num2 = $num2 ,
 num3 = $num3 ,
 num4 = $num4 ,
 num5 = $num5 ,
 num6 = $num6 ,
 bol1 = $bol1 ,
 bol2 = $bol2 ,
 bol3 = $bol3 ,
 bol4 = $bol4 ,
 bol5 = $bol5 ,
 bol6 = $bol6 ,
 bol7 = $bol7 ,
 num7 = $num7 ,
 num8 = $num8 ,
 num9 = $num9 ,
 num10= $num10,
 num11= $num11,
 num12= $num12,
 num13= $num13 WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/health.php");
}
// social welfare 
if(isset($_POST["num14"]) ){
      $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
num14 =$num14, 
text1 ='$text1 '  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/social_welfare_senior_citizen.php");
}





// gender base violence
if(isset($_POST["bol8"])  ){
      $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
bol8  = $bol8 ,
bol9  = $bol9 ,
bol10 = $bol10,
bol11 = $bol11,
text2 = '$text2'  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/gender_based_violence.php");
}
// media and film
if(isset($_POST["num15"])  ){

     $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
num15 = $num15  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/media_and_film.php");

}
// social protection
if(isset($_POST["m45"]) ){
     $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
m45=$m45,
f45=$f45  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/social_protection.php");

}

// income poverty
if(isset($_POST["num16"])  ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
num16=$num16,
num17=$num17  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/income_and_poverty.php");
}
// labor and employment
if(isset($_POST["m46"])  ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
m46=$m46,
f46=$f46,
m47=$m47,
f47=$f47,
m48=$m48,
f48=$f48,
m49=$m49,
f49=$f49,
m50=$m50,
f50=$f50,
m51=$m51,
f51=$f51,
m52=$m52,
f52=$f52,
m53=$m53,
f53=$f53,
m54=$m54,
f54=$f54,
m55=$m55,
f55=$f55,
m56=$m56,
f56=$f56,
m57=$m57,
f57=$f57,
m58=$m58,
f58=$f58,
m59=$m59,
f59=$f59  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/labor_and_employment.php");
}
// fishery
if(isset($_POST["text3"])  ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
text3='$text3',
text4='$text4',
text5='$text5',
text6='$text6' WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/fishery.php");
}
// forestry
if(isset($_POST["text7"]) ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
text7='$text7',
text8='$text8',
text9='$text9'  WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/forestry.php");
}
// industryr
if(isset($_POST["text10"])  ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
text10='$text10',
num18 =$num18 ,
num19 =$num19 ,
num20 =$num20   WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/industry.php");
}
// resources base and land
if(isset($_POST["num21"]) ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
num21 = $num21,
num22 = $num22,
num23 = $num23,
m60=$m60,
f60=$f60,
m61=$m61,
f61=$f61,
m62=$m62,
f62=$f62,
m63=$m63,
f63=$f63,
m64=$m64,
f64=$f64,
m65=$m65,
f65=$f65,
m66=$m66,
f66=$f66,
m67=$m67,
f67=$f67,
m68=$m68,
f68=$f68,
m69=$m69,
f69=$f69,
m70=$m70,
f70=$f70,
m71=$m71,
f71=$f71,
m72=$m72,
f72=$f72,
m73=$m73,
f73=$f73,
m74=$m74,
f74=$f74 WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/resources_base_and_land_use.php");
}

// tenure and management
if(isset($_POST["text11"]) ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
text11='$text11',
num24 =$num24 ,
m75   = $m75,
f75   = $f75 WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/tenure_management.php");
}
// land use and productivity
if(isset($_POST["m76"]) ){
  $dbconnection->query("UPDATE social_development
SET preparedby='$preparedby',
reviewedby='$reviewedby',
 m76 = $m76 ,
 f76 = $f76 ,
 m77 = $m77 ,
 f77 = $f77 ,
num25=$num25,
 m78 = $m78 ,
 f78 = $f78 ,
 m79 = $m79 ,
 f79 = $f79 
    WHERE id=$id;");
setcookie("popup_modal","saverecord");
header("Location: /barangay/land_use_and_land_productivity.php");
}
exit();
}
}}



$dbconnection->query("INSERT INTO social_development (
barangay,
year,
preparedby,
reviewedby,
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
f8,
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
num1,
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
m37,
f37,
m38,
f38,
m39,
f39,
m40,
f40,
m41,
f41,
m42,
f42,
m43,
f43,
m44,
f44,
num2,
num3,
num4,
num5,
num6,
bol1,
bol2,
bol3,
bol4,
bol5,
bol6,
bol7,
num7,
num8,
num9,
num10,
num11,
num12,
num13,
num14,
text1,
bol8 ,
bol9 ,
bol10,
bol11,
text2,
num15,
m45 ,
f45 ,
num16,
num17,
m46 ,
f46,
m47,
f47,
m48,
f48,
m49,
f49,
m50,
f50,
m51,
f51,
m52,
f52,
m53,
f53,
m54,
f54,
m55,
f55,
m56,
f56,
m57,
f57,
m58,
f58,
m59,
f59,
text3 ,
text4 ,
text5 ,
text6 ,
text7 ,
text8 ,
text9 ,
text10,
num18 ,
num19 ,
num20 ,
num21 ,
num22 ,
num23 ,
m60,
f60,
m61,
f61,
m62,
f62,
m63,
f63,
m64,
f64,
m65,
f65,
m66,
f66,
m67,
f67,
m68,
f68,
m69,
f69,
m70,
f70,
m71,
f71,
m72,
f72,
m73,
f73,
m74,
f74,
text11,
num24 ,
m75 ,
f75 ,
m76 ,
f76 ,
num25,
m77 ,
f77 ,
m78 ,
f78 ,
m79 ,
f79
) VALUES (
'$barangay',
'$year',
'$preparedby',
'$reviewedby',
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
$num1,
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
$m37,
$f37,
$m38,
$f38,
$m39,
$f39,
$m40,
$f40,
$m41,
$f41,
$m42,
$f42,
$m43,
$f43,
$m44,
$f44,
$num2,
$num3,
$num4,
$num5,
$num6,
$bol1,
$bol2,
$bol3,
$bol4,
$bol5,
$bol6,
$bol7,
$num7,
$num8,
$num9,
$num10,
$num11,
$num12,
$num13,
$num14,
'$text1',
$bol8,
$bol9,
$bol10,
$bol11,
'$text2',
$num15,
$m45,
$f45,
$num16,
$num17,
$m46,
$f46,
$m47,
$f47,
$m48,
$f48,
$m49,
$f49,
$m50,
$f50,
$m51,
$f51,
$m52,
$f52,
$m53,
$f53,
$m54,
$f54,
$m55,
$f55,
$m56,
$f56,
$m57,
$f57,
$m58,
$f58,
$m59,
$f59,
'$text3',
'$text4',
'$text5',
'$text6',
'$text7',
'$text8',
'$text9',
'$text10',
$num18,
$num19,
$num20,
$num21,
$num22,
$num23,
$m60,
$f60,
$m61,
$f61,
$m62,
$f62,
$m63,
$f63,
$m64,
$f64,
$m65,
$f65,
$m66,
$f66,
$m67,
$f67,
$m68,
$f68,
$m69,
$f69,
$m70,
$f70,
$m71,
$f71,
$m72,
$f72,
$m73,
$f73,
$m74,
$f74,
'$text11',
$num24,
$m75,
$f75,
$m76,
$f76,
$num25,
$m77,
$f77,
$m78,
$f78,
$m79,
$f79
)");

setcookie("popup_modal","saverecord");
header("Location: /barangay/demography.php");

}



?>