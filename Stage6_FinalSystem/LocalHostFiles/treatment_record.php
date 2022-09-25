<html>
    <head>
        <link href="style_patient_info_php.css" rel="stylesheet" type="text/css">
        <title>Treatment Record PHP</title>
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $PatientNID = $_GET["PatientNID"];
        $DoctorNID = $_GET["DoctorNID"];
        $Date = $_GET["Date"];
        $Illness = $_GET["Illness"];
        $sql = "INSERT INTO TREATSON VALUES ('$PatientNID', '$DoctorNID', '$Date', '$Illness');";
        if (mysqli_query($conn, $sql)) {
			echo "New record created successfully!<br>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
		
		<br><br><br><a href="main_page.html" class="btn"><input type="submit" value="HOME" class="registerbtn"></a>
    </body>
</html>