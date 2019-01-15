<?php


include "admin.html";
include "dbinfo.php";




$sel_record = $_POST['sel_record'];

$sql = "SELECT * FROM aliens_abduction WHERE id = $sel_record";

$result = mysqli_query($connection, $sql);


    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $when_it_happened= $row['when_it_happened'];
      
    }
   
        print <<< HERE


<h1>Modify  Record</h1>

<form id = "myForm" method="POST" action = "update.php">
<input type="hidden" name="id" value="$id">



<!-- firstname text box -->

<label for="first_name">&#42;First Name:</label>
<input type="text" name="first_name"
placeholder="firstname" id="first_name" value="$first_name"> $FcharErr $first_nameError <br>



<!-- lastname text box -->

<label for="last_name">&#42;Last Name:</label>
<input type="text" name="last_name" placeholder="lastname"
id="last_name" value="$last_name">$last_nameError $LcharErr <br>


<label for="email">&#42;What is your email address ?</label>
<input type="text" name="email" placeholder="email" id="email" value="$email">$emailError
<br>


<label for="when_it_happened">&#42;When did it happen?</label>
<input type="date" name="when_it_happened" id="when_it_happened"  value="$when_it_happened">
<br>



<input type="submit" value="Report Abduction">

    </form>


HERE;



?>














