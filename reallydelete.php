<?php



include "admin.html";
include "dbinfo.php";


$id=$_POST[sel_record];

$query="SELECT * FROM aliens_abduction WHERE id ='$id' ";


$result = mysqli_query($connection , $query);


while ($row = mysqli_fetch_array($result)) {
    $id = $row["id"];
    $email = $row["email"];
    $firstname = $row["first_name"];
    $lastname = $row["last_name"];
    $when_it_happened = $row["when_it_happened"];
}

    print "<p> $id, $firstname, $lastname, $email,$when_it_happened has been permanetly deleted. </p>";


    $query = "DELETE FROM aliens_abduction WHERE id = '$id' ";

    $result = mysqli_query($connection, $query);




?>