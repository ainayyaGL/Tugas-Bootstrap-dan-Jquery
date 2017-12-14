<!DOCTYPE html>
<html>
<head>
	<h1>Login</h1>
	<style>
		h1{

			text-align: center;
		}
		h2{ 
			text-align: center;
			padding-bottom: 10px;
		}
		table{
			width: 450px;
			border-style: solid;
			border-spacing: none;
			border-collapse: collapse;
		}
		th{
			background-color: darksalmon;
			color: black;
			text-align: left;
		} 
		td{
			text-align: left;
			padding: 10px;
		}
		tr{
			background-color: wheat;
			font-size: 20px;
		}
		body{
			background-color: lightblue;
		}
		#ses{
			width:100%;
			height:auto;
		}
		#art{
			padding-top: 30px;
			padding-bottom: 30px;
			padding-right: 0px;
			padding-left: 10px;
			margin:0 auto;
			width:60%;
			height:700px;
			background-color: peachpuff;
			border-radius: 10px;
			box-shadow: 0px 3px 2px #888888;
		}
		#coba{
			padding-left: 20px;
		}
		sup{
			color: crimson;
		}
		input[type="submit"] {
			background-color: crimson;
			font-size: 15px;
		}
		input[type="submit"]:hover {
			background-color: #0060cb;
		}
		input[type="text"]{
			font-style: arial;
			height: 25px;
		}
		input[type="textarea"]{
			font-style: verdana;
		}
		
	</style>
	<script>
	function validateForm() {
	    var x = document.forms["myForm"]["fnim"].value;
	    var y = document.forms["myForm"]["fname"].value;
	    var z = document.forms["myForm"]["falamat"].value;
	    var aa = document.forms["myForm"]["femail"].value;
	    

		if (x == "") {
	        document.getElementById("nimm").innerHTML = "NIM belum diisi";
	    } else {
	    	document.getElementById("nimm").innerHTML = "";
	    }
		if (y == "") {
			document.getElementById("namaa").innerHTML = "Nama belum diisi";
		} else {
		    document.getElementById("namaa").innerHTML = "";
		}
   		if (z == "") {
			document.getElementById("alamatt").innerHTML = "Alamat belum diisi";
		} else {
			document.getElementById("alamatt").innerHTML = "";
		}
		if (aa == "") {
			document.getElementById("emaill").innerHTML = "Email belum diisi";
		} else {
			document.getElementById("emaill").innerHTML = "";
		}
		if ((x!="" && y!="" && z!="" && aa!="")==true) {
			document.getElementById("coba").innerHTML = "NIM : " + x + "<br>" + "Nama : " + y + "<br>" + "Alamat : " + z + "<br>" + "Email : " + aa ;
		}
		return false;
	}   
	</script>
</head>

<body>
	<section id="ses">
		<article id="art">
			
				<form name="myForm" onsubmit="return validateForm()" method="head">
				<table align="center">
					<tr>
						<th align="left">Username<sup>*</sup> :  </th>
					</tr>

					<tr>
						<td><input type="text" name="fuser" style=" width: 100%"></td>
					</tr>

					<tr>
						<td id="nimm" style="color: white; background-color: #ff5858; padding-bottom: 0px; padding-top: 0px ; font-size : 77%"></td>
					</tr>

					<tr>
						<th align="left">Password<sup>*</sup> : </th>
					</tr>

					<tr>
						<td><input type="text" name="fpass" style=" width: 100% "></td>
					</tr>

					<tr>
						<td id="namaa" style="color: white; background-color: #ff5858; padding-bottom: 0px; padding-top: 0px; font-size: 77%"></td>
					</tr>

					

					<tr>
						<td><input type="submit" value="Submit"></td>
					</tr>

				</table>
		</form>

			<p id="coba" style="font-style: times; font-size: 20px"></p>
		</article>
	</section>
</body>
</html>
