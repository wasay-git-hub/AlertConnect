<?php
// Database configuration for phpMyAdmin
$server_name = "localhost";
$username = "root";
$password = "ibadhassan123";
$database = "criminal";

$conn = mysqli_connect($server_name,$username,$password,$database);

    
    // Check connection
    if (!$conn) {
        die ("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['save'])) {
    // Prepare SQL statement with parameterized query  
      $full_name =  $_POST['full_name'], 
      $contact_number =  $_POST['contact_number'], 
      $email_address =  $_POST['email_address'], 
      $suspect_name =  $_POST['suspect_name'], 
      $incident_description =  $_POST['incident_description'], 
      $incident_date =  $_POST['incident_date'], 
      $incident_location =  $_POST['incident_location']
    

    $sql_query = "INSERT INTO record 
    (full_name, contact_number,email_address, suspect_name, 
    incident_description,incident_date,incident_location) 
    VALUES ($full_name, $contact_number, $email_address,$suspect_name, $incident_description,$incident_date,$incident_location )";
    if (mysqli_query($conn ,$sql_query)) {
        echo "New report submitted successfully";
    } else {
        echo "Error: " .$sql . "" . mysqli_error($conn);
    }

   
    mysqli_close($conn);


}
?>