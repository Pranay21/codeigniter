<?php
$user ='root';
	$pass= '';
	$db= 'test';
	
	$db=new mysqli('localhost', $user , $pass ,$db);
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
echo "<p class=\"text\"><b>\n";
echo "\n";
echo "Full Service Facility</b><br>\n";
echo "\n";
echo "Veterinarians and staff are on duty 24 hours a day, 7 days a week.<br>\n";
echo "<br>";
echo "<b>Years of Experience<br></b>\n";
echo "\n";
echo "Fish Creek Veterinarians have provided quality, dependable care for your beloved animals since 1984.<br>\n";
echo "<br>";
echo "<b>Open Door Policy</b><br>\n";
echo "\n";
echo "Our professionals welcome owners to stay with their pets during any medical procedure.</br>\n";
echo "\n";
echo "</p>\n";
echo "<p>\n";
echo "\n";
echo "\n";
echo "800-555-5555<br>\n";
echo "1242 Grassy Lane<br>\n";
echo "Fish Creek, WI 55534<br>\n";
echo "</p>\n";
echo "\n";
echo "\n";
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
