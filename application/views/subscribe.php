
<?php

$user ='root';
	$pass= '';
	$db= 'vet';
	
	$con=mysqli_connect('localhost', $user , $pass ,$db);
	$q1="null";


echo "<html>\n";
echo "<head>\n";
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
echo "    <li><a href=\"http://localhost/pranay/index.php/subscribe_control/hello\">Subscribe</a></li>\n";
echo "    <li><a href=\"http://localhost/pranay/index.php/welcome/Contact\">Contact</a></li>\n";
echo "  </b></ul>\n";
echo "</nav>\n";
echo "<article>\n";
echo "<h2> Contact Fish Creek</h2><br>\n";
echo "Required fields are marked with an asterisk (*).\n";
?>
<form action= "http://localhost/pranay/index.php/Welcome/subscribe" method="POST">
<?php
echo validation_errors();  
echo form_open('form'); 
echo "<table>\n";
echo "<tr>\n";
echo "<th align=\"Right\">Client Full Name:</th> <th><input type=\"text\" name=\"name\"></th><br>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Address:</th> <th><input type=\"text\" name=\"address\" ></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*E-mail:</th> <th><input type=\"text\" name=\"email\"></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Phone:</th> <th><input type=\"text\" name=\"phone\" ></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Password:</th> <th><input type=\"text\" name=\"password\" ></th>\n";
echo "</tr>\n";

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

echo "<tr>\n";
echo "<th></th><th align=\"left\"><input type=\"submit\" name=\"submit\" value=\"Send Now\"></th>\n";
echo "</tr>\n";



echo "</table>\n";
echo "\n";
echo "</form>\n";
echo "</article>\n";



echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
