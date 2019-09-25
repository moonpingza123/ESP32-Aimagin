<?php
	$str = "A string here";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bibleandhymn";

		$conn = new mysqli($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, "utf8");

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		// echo "Connected successfully";

		// $sql = "SELECT BibleID, BibleTHName, BibleTHInitialsName FROM bible";
		// $result = mysqli_query($conn, $sql);

		// if (mysqli_num_rows($result) > 0) {
		//     // output data of each row
		//     while($row = mysqli_fetch_assoc($result)) {
		//         echo "id: " . $row["BibleID"]. " - Name: " . $row["BibleTHName"]. " " . $row["BibleTHInitialsName"]. "<br>";
		//     }
		// } else {
		//     echo "0 results";
		// }

		// mysqli_close($conn);
	?>

	<div class="row"><button onclick="buttonClicktest()">test return</button></div>

<script type="text/javascript">

	function buttonClicktest(){
   //      <?php 

   //      	$sql = "SELECT BibleID, BibleTHName, BibleTHInitialsName FROM bible";
			// $result = $conn->query($sql);

			// if ($result->num_rows > 0) {
			//     // output data of each row
			//     while($row = $result->fetch_assoc()) {
			//         // echo "id: " . $row["BibleID"]. " - Name: " . $row["BibleTHName"]. " " . $row["BibleTHInitialsName"]. "<br>";
			//         ?>

			//        
			//         console.log(ex1);
			//         // console.log(ex3);

			//         <?php
			//     }
			// } else {
			//     echo "0 results";
			// }

			// $conn->close();
   //      ?>

   		var ex3 = "<?php echo $str ?>";
   		console.log(ex3);

   		123
    }

</script>
<br><span>123456</span>
</body>
</html>