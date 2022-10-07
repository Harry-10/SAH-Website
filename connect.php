<?php
    $firstName = $_POST['firstName'];
    $yourNumber = $_POST['yourNumber'];
    $yourEmail = $_POST['yourEmail'];
    $date = $_POST['date'];
    $conn = new mysqli('localhost', 'root',' ', 'Appointment');
    if($conn->connection_error){
        die('Connection Failed : '.$conn->connection_error);
    }
    else{
        $stmt = $conn->prepare("insert into appointment(firstName, yourNumber, yourEmail)
            values(?, ?, ?)");
        $stmt->bind_param("sis", $firstName, $yourNumber, $yourEmail);
        $stmt->execute();
        echo "Booking Successful";
        $stmt->close();
        $conn->close();

    }
?>