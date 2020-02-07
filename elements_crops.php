<?php
$state=$_GET['ctype'];
$c1=array('Rice','Jowar(Sorghum)','Bajra','Maize','Cotton','Groundnut','Jute','Sugarcane','Turmeric','Pulses');
$c2=array('Wheat','Oat','Gram','Pea','Barley','Potato','Tomato','Onion','Oil seed');
$c3=array('Pumpkin','Cucumber','Bitter Gourd','Pumpkin','Muskmelon');
if($state=="Kharif"){
foreach($c1 as $c)
	echo "<option value='$c'>$c</option>";
}
else if ($state=="Rabi"){
	foreach($c2 as $c)
	echo "<option value='$c'>$c</option>";
}
else if ($state=="Zaid"){
	foreach($c3 as $c)
	echo "<option value='$c'>$c</option>";
}
else
	echo "<option>first select crop type</option>";
?>