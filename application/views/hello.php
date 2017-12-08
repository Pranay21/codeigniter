<?php
$user ='root';
	$pass= '';
	$db= 'vet';
	
	$con=mysqli_connect('localhost', $user , $pass ,$db);
	$q1="null";

?>
<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>   

<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/style.css">
<?php
echo "</head>\n";
echo "<body>\n";
echo "<div id=\"wrapper\">\n";
echo "<div class=\"container\">\n";
echo "\n";
echo "<header>\n";
echo "   <h1 style=\"color:#2a2ac0;\">Fish Creek Animal Hospital</h1>\n";
echo "</header>\n";
echo "  \n";
echo "<nav>\n";
echo "  <ul><b>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/index\">Home</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/services\">Services</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/askvet\">Ask the Vet</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/subscribe_control/hello\">Subscribe</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/Contact\">Contact</a></li>\n";
echo "  </b></ul>\n";
echo "</nav>\n";
echo "<article>\n";
echo "<h2> <b>Subscribe Fish Creek</h2></b><br>\n";
echo "Required fields are marked with an asterisk (*).\n<br>";

?>
<form action="http://localhost/pranay/index.php/subscribe_control/validate" method='POST'>
<?php
//$FirstName= $LastName = "";

echo "<table>";
echo "<tr>";
echo "<th>*Client Full Name:</th> <th><input type=\"text\" name=\"name\" ></th>\n";
echo "</tr>";

echo "<tr>";
echo "<th>*Address:</th> <th><input type=\"text\" name=\"address\" ></th>\n";
echo "</tr>";

echo "<tr>";
echo "<th>*E-mail: </th> <th><input type=\"text\" name=\"email\"></th>\n";

echo "</tr>";

echo "<tr>";
echo "<th>*Phone: </th><th><input type=\"text\" name=\"phone\" ></th>\n";

echo "</tr>";

echo "<tr>";
echo "<th>*Password: </th><th><input type=\"password\" name=\"password\" ></th>\n";

echo "</tr>";

echo "<tr>";
echo"<th>*Type of Service:</th><th>\n";


//=============================
//This creates the drop down box
echo "<select name= 'FirstName'>";

echo '<option value="">'.'Service Name'.'</option>';

$query = mysqli_query($con,"SELECT servicename from service");
$query_display = mysqli_query($con,"SELECT servicename from service");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['id']."'>".$row['servicename']
 .'</option>';
}
echo "</th>";
echo '</select>';
echo "</tr>";

echo "<tr>";
echo "<th>*Pet</th><th>\n";

echo "<select name= 'LastName'>";


echo '<option value="">'.'Pet Name'.'</option>';

$query = mysqli_query($con,"SELECT petname from pet");
$query_display = mysqli_query($con,"SELECT petname from pet");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['id']."'>".$row['petname']
 .'</option>';
}
echo "</th>";
echo '</select>';
echo "</tr>";
echo "<tr>";

echo "<th></th><th><input type=\"submit\" name=\"submit\" value=\"Send Now\"></th><br>\n";

echo "\n";
echo "</tr>";
echo "</form>\n";

echo "</table>";



echo "<br>";
echo "\n";
echo "<footer class=\"small\">\n";
echo "Copyright &#169 2016 Fish Creek Animal Hospital<br>\n";
echo "<a href=\"mailto:pranaybhat199@.com\">pranay@bhat.com</a>\n";
echo "</footer>\n";
echo "</article>\n";
echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>

</html>