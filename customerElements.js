function fetchcities(str)
{
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/hack/elements_crops.php?ctype="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200)
		{
			document.getElementById("crops").innerHTML=req.responseText;
		}
	};
}