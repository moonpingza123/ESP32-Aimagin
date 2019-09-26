<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bibleandhymn";

    $con = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($con, "utf8");

// $con = mysqli_connect('localhost','peter','abc123','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>BibleID</th>
<th>BibleTHName</th>
<th>BibleTHInitialsName</th>
<th>BibleCNInitialsName</th>
<th>BibleENInitialsName</th>
<th>BibleCategory</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['BibleID'] . "</td>";
    echo "<td>" . $row['BibleTHName'] . "</td>";
    echo "<td>" . $row['BibleTHInitialsName'] . "</td>";
    echo "<td>" . $row['BibleCNInitialsName'] . "</td>";
    echo "<td>" . $row['BibleENInitialsName'] . "</td>";
    echo "<td>" . $row['BibleCategory'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>