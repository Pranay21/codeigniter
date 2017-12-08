<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form name="form_update" method="post" >
<?php
$con=mysqli_connect("localhost","root","","vet");
//============== check connection



echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">\n";
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
echo "    <li><a href=\"index.php\">Home</a></li>\n";
echo "    <li><a href=\"services.php\">Services</a></li>\n";
echo "    <li><a href=\"askvet.php\">Ask the Vet</a></li>\n";
echo "    <li><a href=\"subscribe.php\">Subscribe</a></li>\n";
echo "    <li><a href=\"contact.php\">Contact</a></li>\n";
echo "  </b></ul>\n";
echo "</nav>\n";
echo "<article>\n";
echo "<h2> <b>Subscribe Fish Creek</h2></b><br>\n";
echo "Required fields are marked with an asterisk (*).\n<br>";
echo "<br>";

echo "<form method='POST'>\n";

echo "*Client Full Name: <input type=\"text\" name=\"Name\" required><br>\n";
echo"<br>";
echo "*Address:<input type=\"text\" name=\"Address\" required><br>\n";

echo"<br>";
echo "*E-mail: <input type=\"text\" name=\"email\" required><br>\n";
echo"<br>";
echo "*Phone: <input type=\"text\" name=\"phone\" required><br>\n";
echo"<br>";

echo "*Password: <input type=\"password\" name=\"password\" required><br>\n";


echo "<br>";
echo"*Type of Service:\n";


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
echo '</select>';

echo"<br>";
echo "<br>";
echo "*Pet\n";

echo "<select name= 'FirstName'>";

echo '<option value="">'.'Service Name'.'</option>';

$query = mysqli_query($con,"SELECT servicename from service");
$query_display = mysqli_query($con,"SELECT servicename from service");
while($row=mysqli_fetch_array($query))
{
    echo "<option value='". $row['id']."'>".$row['servicename']
 .'</option>';
}
echo '</select>';

echo"<br>";
echo "<br>";

echo "<input type=\"submit\" value=\"Send Now\"><br>\n";
echo "<br>";
echo "\n";




$password = (isset($_GET['password']) ? $_GET['password'] : null);
if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]{8,16}$/', $password)) {
    echo "the password does not meet the requirements!";
}

$phone = (isset($_GET['phone']) ? $_GET['phone'] : null);
else if(!preg_match('/^[0-9]{10}$/', $phone)) {
      echo "only numeric value allowed with total 10 digits";
}

$email = (isset($_GET['email']) ? $_GET['email'] : null);
else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
    echo "the email does not meet the requirements!";
}

else
{
$query=("INSERT INTO contact VALUES ('".$_POST['Name']."','".$_POST['email']."','".$_POST['Address']."')");
$sql=mysqli_query($con,$query);
mysqli_close($con);
}




echo "</form>\n";

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