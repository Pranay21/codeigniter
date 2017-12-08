<?php
/*$user ='root';
	$pass= '';
	$db= 'vet';
	
	$conn=mysqli_connect('localhost', $user , $pass ,$db);
	$q1="null";
 $type='';*/
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

echo "<header>\n";
echo "   <h1 style=\"color:#003f6e;\">Fish Creek Animal Hospital</h1>\n";
echo "</header>\n";
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

?>
 <!-- <form action= "http://localhost/pranay/index.php/Welcome/servicetype" method="POST"> -->
<?php

// echo "  <input type=\"radio\" name=\"services\" value=\"Medical services\">Medical Services<br>\n";
// echo "<br>";
// echo "  <input type=\"radio\" name=\"services\" value=\"Surgial Services\">Surgial Services<br>\n";
// echo "<br>";
// echo "  <input type=\"radio\" name=\"services\" value=\"Dental Care\">Dental Care<br>\n";
// echo "<br>";
// echo "  <input type=\"radio\" name=\"services\" value=\"House Calls\">House Calls<br>\n";
// echo "<br>";
// echo "  <input type=\"radio\" name=\"services\" value=\"Emergencies\">Emergencies<br>\n";
// echo "<br>";


//echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">\n";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// 
// foreach ($type->result() as $new_type )
//    {
//       $data[]=$new_type;//in here you can get your table header. 
//      //Ex if your table has name field and you need to sho it you can use $new_dbemail['name'] 
//     }

//     return $data;
//     //echo $type->num_rows();
	
	if(!empty($type)){

		foreach($type->result() as $row)
		{

			 echo $row->servicename."</br>";
			 //echo "<br>";
			 echo $row->description."</br>";
			 echo "<br>";
			 echo "<br>";
		 	
		}
	}
	else{
		echo "Empty";
	}

	


// echo "   \n";
// echo "</form> \n";






echo "<br>";
echo "<br>";
echo "\n";
echo "<footer class=\"small\">\n";
echo "Copyright © 2016 Fish Creek Animal Hospital<br>\n";
echo "<a href=\"mailto:pranaybhat199@.com\">pranay@bhat.com</a>\n";
echo "</footer>\n";
echo "</div>\n";
echo "</article>\n";
echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
