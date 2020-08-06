<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "e commerse";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
	?>
	<script type="text/javascript">
		alert("Connected");
	</script>
	<?php
}else{
	?>
	<script type="text/javascript">
		alert(" Not Connected");
	</script>
	<?php
}


?>