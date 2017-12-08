<!DOCTYPE>
<html>
<head>
<title>Update Data</title>
</head>
<body>   
<?php
$con=mysqli_connect("localhost","root","","vet");
//============== check connection
 $passErr = $emailErr = $phoneErr = $emailcheck= $password="";
 $email=null;
settype($clientn, "integer");
?>
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
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/subscribe\">Subscribe</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/Contact\">Contact</a></li>\n";
echo "  </b></ul>\n";
echo "</nav>\n";
echo "<article>\n";
echo "<h2> <b>Subscribe Fish Creek</h2></b><br>\n";
echo "Required fields are marked with an asterisk (*).\n<br>";
echo "<br>";

echo "<form method='POST' action=''>";
$FirstName= $LastName = "";

echo "<table>";
echo "<tr>";
echo "<th>*Client Full Name:</th> <th><input type=\"text\" name=\"Name\" required></th>\n";
echo "</tr>";

echo "<tr>";
echo "<th>*Address:</th> <th><input type=\"text\" name=\"Address\" required></th>\n";
echo "</tr>";

echo "<tr>";
echo "<th>*E-mail: </th> <th><input type=\"text\" name=\"email\" required></th>\n";
echo $emailErr;
echo "</tr>";

echo "<tr>";
echo "<th>*Phone: </th><th><input type=\"text\" name=\"phone\" required></th>\n";
echo $phoneErr;
echo "</tr>";

echo "<tr>";
echo "<th>*Password: </th><th><input type=\"password\" name=\"password\" required></th>\n";
echo $passErr;
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

 
$password = (isset($_POST['password']) ? $_POST['password'] : null);
//$password = $_POST["password"];
if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]{8,16}$/', $password)) {
	//$passErr = 'the password does not meet the requirements!';
  echo "<p> <font color=red size=2>*The password should meet the requirements(Atleast 1 capital, 1 small,1 Numeric, 1 special char, length between 8 to 16)</font> </p>";

  

}

$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
//$phone = $_POST["phone"];
if(!preg_match('/^[0-9]{10}$/', $phone)) {
			//$phoneErr = 'only numeric value allowed with total 10 digits';
      echo "<p> <font color=red size=2>*Phone number should contain only 10 numeric value input</font> </p>";
     
      
}
$email = (isset($_POST['email']) ? $_POST['email'] : null);
//$email = $_POST["email"];
if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
	//$emailErr = 'the email does not meet the requirements!';
    echo "<p> <font color=red size=2>*The email id provided should meet the requirements  </font> </p>";


}

else
{
$password=md5($_POST['password']);	
// $query=("INSERT INTO client VALUES ('','".$_POST['Name']."','".$_POST['Address']."','".$_POST['phone']."', '".$_POST['email']."' , '".$_POST['password']."')");
$query=("INSERT INTO client VALUES ('','".$_POST['Name']."','".$_POST['Address']."','".$_POST['phone']."', '".$_POST['email']."' , '$password')");
$sql=mysqli_query($con,$query);
//mysqli_close($con);
$email=$_POST['email'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
}

if($email = (isset($_POST['submit'])))
{
$clientn = 0;
$servicen =$petn = 0;
 $query = mysqli_query($con, "SELECT count(*) FROM client WHERE email = '$email'");
 $result = mysqli_num_rows($query);
	if(($result) == 0)
	{
		$clientno= mysqli_query($con,"SELECT clientid from client where email ='$email'");
		$clientn = mysqli_fetch_object($clientno);
		//$clientn = $clientno->fetch_object()->clientid;
		$serviceno= mysqli_query($con,"SELECT serviceid from service where servicename='$FirstName'");
		$servicen = mysqli_fetch_object($serviceno);
		//$servicen = $serviceno->fetch_object()->serviceid;
		$petno= mysqli_query($con,"SELECT petid from pet where petname='$LastName'");
		$petn = mysqli_fetch_object($petno);
		//$petn = $petno->fetch_object()->petid;
		$query1=("INSERT INTO subscription VALUES ($clientn, servicen, petn, now())");
		$sql=mysqli_query($con,$query1);

	}

	else
	{
		$clientno= mysqli_query($con,"SELECT clientid from client where email ='$email'");
		$clientn = mysqli_fetch_object($clientno);
		$serviceno= mysqli_query($con,"SELECT serviceid from service where servicename='$FirstName'");
		$servicen = mysqli_fetch_object($serviceno);
		$petno= mysqli_query($con,"SELECT petid from pet where petname='$LastName'");
		$petn = mysqli_fetch_object($petno);
		$query1=("INSERT INTO subscription VALUES ($clientn, servicen, petn, now())");
		$sql=mysqli_query($con,$query1);
	}
}
// $sql=mysqli_query($con,$que);








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