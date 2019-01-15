

<?php

// PHP form to get input from user

//include the function to clean data

include "admin.html";
include "dbinfo.php";

$id = $_POST["id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$when_it_happened = $_POST["when_it_happened"];

$sql= "UPDATE aliens_abduction SET



first_name='$first_name',

last_name='$last_name',

email='$email',

when_it_happened= '$when_it_happened'


WHERE id='$id' ";



$result = mysqli_query($connection, $sql);

print "<html><head><title>Update Record</title></head></html>";

print <<< SOMETEXT

<h1>The new record looks like this: </h1>


<ul>
<li><strong>Firstname:</strong>$first_name</li>
<li><strong>Lastname:</strong>$last_name</li>
<li><strong>Email:</strong>$email</li>
<li><strong>When did it happen?:</strong>$when_it_happened</li>





SOMETEXT;



    ?>
















