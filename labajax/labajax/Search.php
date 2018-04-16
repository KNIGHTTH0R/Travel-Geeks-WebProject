<script>
function search() {
	document.getElementById("spin").style.visibility="visible";
	var v=document.getElementById("spotnames").value;
	//var v2=document.getElementById("mytext2").value;
	var  xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			var m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			document.getElementById("spin").style.visibility="hidden";
			//alert(xmlhttp.responseText);
		}
	};
 	//var url="server.php?ist=ok&un="+v+"&cg="+v2;
 	var url="searchserver.php?spotnames="+v;
	//alert(url);
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
} 


</script>

<input type = "text" id = "spotnames" onkeyup = "search()"  />
<img src= "spin.gif" id = "spin" width="20px" height="20px" style="visibility:hidden" /><br/>

<p id="txtHint" style="border-bottom:6px solid red;"></p>
<br/>
