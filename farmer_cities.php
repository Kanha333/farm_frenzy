<?php
$state=$_GET['state'];
$c1=array('patna','gaya','siwan','muzzaffarpur','sitamarhi');
$c2=array('varanasi','allahabad','lucknow','sonebhadra');
$c3=array('ranchi','deoghar','dhanbad','bokaro','jamshedpur');
$c4=array('Kurnool','Chittor','Vishakhapatnam','Anantapur');
$c5=array('Mandsaur','Indore','Gwalior','Rajgarh');
$c6=array('Surajpur','Raipur');
$c7=array('Dhenkanal','Bhuvneshwar');
if($state=="Bihar"){
foreach($c1 as $c)
	echo "<option>$c</option>";
}
else if ($state=="Uttar Pradesh"){
	foreach($c2 as $c)
	echo "<option>$c</option>";
}
else if ($state=="Jharkhand"){
	foreach($c3 as $c)
	echo "<option>$c</option>";
}
else if($state=="Andhra Pradesh"){
    foreach($c4 as $c)
        echo "<option>$c</option>";
}
else if($state=="Madhya Pradesh"){
    foreach($c5 as $c)
        echo "<option>$c</option>";
}
else if($state=="Chattisgarh"){
    foreach($c6 as $c)
        echo "<option>$c</option>";
}
else if($state=="Odisha"){
    foreach($c7 as $c)
        echo "<option>$c</option>";
}
else
	echo "<option>first select state</option>";
?>