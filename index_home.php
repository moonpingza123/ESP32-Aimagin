<?php
	$str = "A string here";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

	<select id="abc">
	  <option value="0"></option>
	  <!-- <option value="saab">Saab</option>
	  <option value="opel">Opel</option>
	  <option value="audi">Audi</option> -->
	  <!-- <span id="abc">
	  	
	  </span> -->
	</select>

<script >

	$(document).ready(function () {
    //     var html ='<option value="abc">abd</option>';
	  	// // html += '<option value="abc">abd</option>';
    //     $("#abc").append(html); 

        <?php 

        	$sql = "SELECT BibleID, BibleTHName, BibleTHInitialsName FROM bible";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        // echo "id: " . $row["BibleID"]. " - Name: " . $row["BibleTHName"]. " " . $row["BibleTHInitialsName"]. "<br>";
			        ?>
			        var ex1 = '<?php echo $row["BibleID"] ?>';
			        var ex2 = '<?php echo $row["BibleTHInitialsName"] ?>';
			        // console.log(ex2);

			        // var html = '<option value="abc">abd</option>';
			        var html = '<option value="'+ ex1 +'">'+ ex2 +'</option>';
			        $("#abc").append(html);

			       	var ex3 = "<?php echo $str ?>";
			        // console.log(ex3);
			        // console.log(ex3);

			        <?php
			    }
			} else {
			    echo "0 results";
			}

			$conn->close();
        ?>

        // $("#abc").append(html);

    	console.log(123456789);
    });

	function buttonClicktest(){
		// var html ='';
   //      <?php 

   //      	$sql = "SELECT BibleID, BibleTHName, BibleTHInitialsName FROM bible";
			// $result = $conn->query($sql);

			// if ($result->num_rows > 0) {
			//     // output data of each row
			//     while($row = $result->fetch_assoc()) {
			//         // echo "id: " . $row["BibleID"]. " - Name: " . $row["BibleTHName"]. " " . $row["BibleTHInitialsName"]. "<br>";
			//         ?>
			//         var ex1 = '<?php echo $row["BibleID"] ?>';
			//         var ex2 = '<?php echo $row["BibleTHInitialsName"] ?>';
			//         console.log(ex2);

			//         // html += '<option value="abc">abd</option>';

			//        	var ex3 = "<?php echo $str ?>";
			//         // console.log(ex3);
			//         <?php
			//     }
			// } else {
			//     echo "0 results";
			// }

			// $conn->close();
   //      ?>
   		// var ex3 = "<?php echo $str ?>";
   		// console.log(ex3);

    }



</script>
<br><span>123456</span>

</body>
</html>