<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding:0px;
			box-sizing: border-box;
		}
		body{
			background-color: lightgreen;
		}
		.container{
			background-color: blue;
			margin-top: 20%;
			margin-left: 30%;
			width: 500px;
			text-align: center;
			padding: 10px;
		}
		input{
			width: 80%;
			height: 30px;
			font-size: 20px;
		}
		::placeholder{
			font-size: 20px;
			color: red;
			letter-spacing: 4px;
		}
		button {
			width: 80%;
			padding: 10px;
			font-style: 20px;
			background-color: green;
			text-align: center;
			color: #fff;
			text-decoration: none;
		}
		button a{
			width: 100%;
			text-decoration: none;
			color: #fff;
			font-size: 20px;
		}
		span{
			font-size: 15px;
			color: #fff;
		}
	</style>
</head>
<body>
      <div class="container">
      	<form action="" method="POST" onsubmit="return mydata()">
      	<input type="file" name="file" id="file"><br>
      	<span id="file_error"> </span><br>
      	<input type="text" name="cname" id="cname" placeholder="Channel Name"><br>
      	<span id="cname_error"> </span><br>
      	<input type="text" name="title" id="title" placeholder="Title"><br>
      	<span id="title_error"> </span><br>
      	<button  name="upload" type="submit">UPLOAD   </button>
      	</form>
      </div>
      <script type="text/javascript">
      	function mydata(){
      	var name = document.getElementById('file').value;
      	var cname = document.getElementById('cname').value;
      	var title = document.getElementById('title').value;

      	if(name==""){
      		document.getElementById('file_error').innerHTML="**Please  choose file";
      		return false;
           }
        if(cname==""){
	      document.getElementById('cname_error').innerHTML="**please fill Channel Name";
	      return false;
         }
          if(title==""){
	      document.getElementById('title_error').innerHTML="**please fill Channel Name";
	      return false;
         }
     }

      </script>
</body>
</html>
<?php
include 'connect.php';

if(isset($_POST['upload'])){
	
	$file = $_POST['file'];
	$cname = $_POST['cname'];
	$title = $_POST['title'];

	$insertquery = "INSERT INTO `video`( `file`, `Channel Name`, `Title`) VALUES ('$file','$cname','$title')";

	$query = mysqli_query($con,$insertquery);

	if($query){
		?>
		<script type="text/javascript">
			alert("Video Uploaded Successfully");
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Video Uploaded not Successfully");
		</script>
		<?php
	}
}
?>


