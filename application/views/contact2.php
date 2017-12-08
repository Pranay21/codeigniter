<?php
$user ='root';
	$pass= '';
	$db= 'vet';
	
	$conn=mysqli_connect('localhost', $user , $pass ,$db);

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
<form action= "http://localhost/pranay/index.php/Welcome/validateform" method="POST">
<?php
echo validation_errors();  
echo form_open('form');
echo "<table>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Name:</th> <th><input type=\"text\" name=\"name\" required></th><br>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*E-mail:</th> <th><input type=\"text\" name=\"email\" required></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Comments:</th> <th><input type=\"text\" name=\"comments\" required></th>\n";
echo "</tr>\n";
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
