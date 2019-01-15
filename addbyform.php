<?php

include "admin.html";
include "dbinfo.php";
include "cleanData.php";



if ($_SERVER['REQUEST_METHOD'] == 'POST')

{
    $first_name =  cleanData($_POST['first_name']);

    $last_name  =  cleanData($_POST['last_name']);

    $email  =  cleanData($_POST['email']);

    $when_it_happened=  cleanData($_POST['when_it_happened']);

    //to check if data is cleaned: print "Data cleaned";
    addData($first_name, $last_name, $email,$when_it_happened);
}

else {

    printForm($first_name,$last_name, $email,$when_it_happened);

}


    function addData($first_name, $last_name, $email, 
                     $when_it_happened)
    {

        include("dbinfo.php");

        $sql = "INSERT INTO aliens_abduction VALUES (null,'$first_name', '$last_name', '$email',
'$when_it_happened','$how_long' ,'$how_many' ,'$alien_description' ,'$what_they_did' ,'$fluffy_spotted' ,'$other')";


        $result = mysqli_query($connection, $sql);
        print mysqli_error($connection);
        if ($result) {

            print <<<HERE
<h1>The following has been added:</h1>
<ul>
<li><strong>Firstname:</strong>$first_name</li>
<li><strong>Lastname:</strong>$last_name</li>
<li><strong>Email:</strong>$email</li>
<li><strong>When did it happen?:</strong>$when_it_happened</li>


HERE;

        }


    }


    function printForm( $first_name,$last_name, $email,$when_it_happened)
    {
        print <<< SOMETEXT


<h1>Add New Record</h1>

<form method="post" action=" ">


<!-- firstname text box -->

<label for="first_name">&#42;First Name:</label>
<input type="text" name="first_name"
placeholder="firstname" id="first_name" value="$first_name">  $first_nameError  $FcharErr<br>



<!-- lastname text box -->

<label for="lastname">&#42;Last Name:</label>
<input type="text" name="last_name" placeholder="lastname"
id="last_name" value="$last_name">$last_nameError  $LcharErr <br>


<label for="email">&#42;What is your email address ?</label>
<input type="text" name="email" placeholder="email" id="email" value="$email">$emailError
<br>


<label for="when_it_happened">&#42;When did it happen?</label>
<input type="date" name="when_it_happened" id="when_it_happened"  value="$when_it_happened">


<input type="submit" value="submit">

SOMETEXT;



}

?>



