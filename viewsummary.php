<?php

//require "admin_login.php";
include "admin.html";
require "dbinfo.php";





$sql = "SELECT * FROM aliens_abduction ORDER BY id ASC";


 $result = mysqli_query($connection, $sql);
 
     $count = mysqli_num_rows($result);
    "records: ($count)<br>";


    print <<< HERE


    <table id ="home">
    
    <h3>Summary of all submitted alien abductions</h3>
    
    <tr>
   
    <td>I.D.</td>
    <td>Name</td>
    <td>Email</td>
    <td>When it happened</td>
    </tr>
    
    
HERE;


while ($row=mysqli_fetch_array($result)) { 
  
    $id= $row['id'];
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $email = $row['email'];
    $when_it_happened = $row['when_it_happened'];

    print <<< HERE
<tr>
<td>

<form method="post" action="confirmdelete.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="delete" value=" Delete "></form>

<form method="post" action="updateform.php">
<input type="hidden" name="sel_record" value="$id">
<input type="submit" name="update" value=" Edit ">
</form>

</td>

<td>$id</td>
<td><strong>$firstname  $lastname</strong><br/></td>
<td><a href="mailto: $email">$email</a></td>
<td> $when_it_happened</td>
</tr>



HERE;

}
 
 print "</table></body></html>";
?>