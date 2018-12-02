<?php
$name='ahmed essam';
echo $name;
echo '<br>';
$days= 7;
$days=8;
echo $days;
echo "<br>";
echo $text= 'number of days is ' .$days;
echo '<br>';
echo '<a href="https://www.google.com"> Google </a>'; 
echo'<br>';
echo '<a href="https://www.facebook.com"> Facebook </a>';
echo "<br>";
echo "<br>";
$bankvalue=1.2;
echo "your balance is".$bankvalue."milion $";
echo"<br>";
$fileisuploaded = 1;
if(true)
{
echo"your file was uploaded successfully";
}
echo "<br>";
$isfloat= is_float(5.3);
if($isfloat)
{
echo" the number is decimal";
}
echo"<br>";
var_dump($isfloat);
echo"<br>";
$names=["ahmed","omar","Adel","Essam"];
echo "<pre>" , var_dump($names), "</pre>";
echo"<br>";
echo"<br>";
echo $names[1];
echo"<br>";
$names[]="sameh";// bdef element fel array msh mwgood .
var_dump($names);
echo "<br>";
$new=[ "ahmed"=> 1,"essam" => 1];
var_dump($new);
echo "<br>";
echo $new["ahmed"];
echo "<br>";
echo $new["essam"];
echo "<br>";
// bn3ml array gwa array w index [0] ["username" => "ahmed"]. 
$access=[ 
["username" => "ahmed"] , 
["username" => "essam"] 
];
var_dump($access);	
echo"<br>";
var_dump($access[0]); // 34an n3ml access l array gwa el array f ytl3 ["username" => "ahmed"]
echo"<br>";
echo $access[0]["username"]; // 34an n3ml access l elemnt el array 3alatool f ytl3 ahmed .
//34an n3ml arrays gwa array "multi dimentional".
echo "<br>";
$security = [ [ "username" => 'ahmed' , "password"=> 123, "likes"=>["cats","dogs"]] ,  

              ["username" => 'mohamed' ,"password"=> 963, "likes"=>["cats","books"]]  
			  
			  
			];
echo "<br>" ;
echo $security[1]["password"];// bn access 7aga mo3yana gwa el multi dimentional array zy maslan el password fel index el tany.
echo "<br>";  
$security[1]["password"]=456;
echo "<br>";  
$security[0]["likes"][1]="cooking";//edit mn gwa el array.
echo "<br>";  
$security[1]["likes"] [0]="football";
echo "<pre>" , var_dump($security) ,"</pre> " ;// btnzm shakl el array . 

echo $security[0] ["likes"][0];
echo"<br>";
foreach($security as $s)
{
var_dump($s);//bykf 3ala el array "security" by3rd kol elly gwa el security.
echo"<br>";
echo $s["username"]."<br>";// by3rd el user name elly gwa kol array kol wa7ed lw7do.
echo $s ["likes"][0]."<br>";//by3rd bel loop kol el likes elly gwa el loops w by7ot kol wa7ed mkano fel array w bysnfhom.
echo $s["password"]."<br>";//by3rd bel loop kol el passwords elly gwa el loops w by7ot kol wa7ed mkano fel array w bysnfhom.
}
$name=null;
var_dump($name);
echo"<br>";
$degrees=30;
$weather="sunny";
$statues= "the weather is $weather it's $degrees degrees";
echo $statues;
echo"<br>";
$dayes=3;
if($dayes == 1)
{
echo "it is a happy day";
}
else if ($dayes == 4)
{
echo "it is a bad day";
}
else 
{
echo " complete the week "; 
}
$fish=3;
$fishes=[ 
1=>"big",
2=> "small",
3=> "medium"
];
echo "<br>";

if (in_array($fish,array_keys($fishes)))// in array: bta5od 2 parameters esm el variable  wel keys bt3t el array , array_keys: bta5od parameter wa7ed elly hwa esm el array 
{
echo $fishes[$fish];
}
echo "<br>";
$size= "big";
$fish= null;
switch(true )
{
   case $size == "big":
         echo $fish="bolty";
 break;
  case $size== "medium":
   echo $fish="bory";
  break;
  default:
  echo "it is shrimps";
}
echo "<br>";
$completedvalue=30;
$notcompleted=10;
$percentage=($notcompleted / $completedvalue) *100;
$percentage= number_format($percentage,3	);
echo "you have completed {$percentage} % of the course " ;
echo "<br>";
$a=2;
echo $a**2;
echo "<br>";
for ($x=1;$x<=5;$x++)
{
echo $x++ ."<br>";
}

$count=210;
$remaining=25;
$find=ceil($count/$remaining );
for ($i=1; $i <$find ; $i++) { 
  echo '<a href="?page=' .$i.'">' .$i.'</a> ';// bn3ml for loop 3ala pages.
}
$types=["big","small","medium"];
echo "<br>";
for ($i=0; $i <count($types) ; $i++) { // count de bt3d el values elly gwa el array msh el indcies.
  echo $types[$i]."<br>"; // bn3ml print l asamy elly gwa el array.
}
echo "<br>";
$start=1;
$end=10;
while ( $start<=$end) {
  echo $start++ ."<br>";
}
echo "<br>";
echo rand(1,6);
		  

?>