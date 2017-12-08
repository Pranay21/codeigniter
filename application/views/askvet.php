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
$q1 =null;
echo "<div id=\"wrapper\">\n";
echo "<div class=\"container\">\n";
echo "\n";
echo "<header>\n";
echo "   <h1 style=\"color:#003f6e;\">Fish Creek Animal Hospital</h1>\n";
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
echo "<p>\n";
echo "<a href=\"contact.php\">Contact</a> us if you have a question that you would like answered here<br>\n";
echo "</p>\n";
?>
<form  action= "http://localhost/pranay/index.php/Welcome/askvet" method='POST'>
<?php
// echo "  <input type=\"radio\" name=\"services\" value=\"chocolate\">Our dog, Sparky, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolate?<br>\n";
// echo "<br>";
// echo "  <input type=\"radio\" name=\"services\" value=\"icecream\">Our dog likes eating ice-cream is that fine?<br>\n";
// echo "<br>";


// echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">\n";
// echo "<br>";
// echo "<br>";

if(!empty($type)){
 
		foreach($type->result() as $row)
		{
			 echo $row->question."<br>";
			 echo  $row->answer."</br>";
			 echo "<br>";
			 
		}
	}
	

echo "   \n";
echo "</form> \n";

echo "</p>\n";
echo "<footer class=\"small\">\n";
echo "Copyright &#169 2016 Fish Creek Animal Hospital<br>\n";
echo "<a href=\"mailto:pranaybhat199@.com\">pranay@bhat.com</a>\n";
echo "</footer>\n";
echo "</div>\n";
echo "</article>\n";
echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
