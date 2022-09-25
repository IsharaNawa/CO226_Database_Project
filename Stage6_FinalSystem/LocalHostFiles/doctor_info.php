<html>
    <head>
        <link href="style_medical_report_php.css" rel="stylesheet" type="text/css">
        <title>Doctor Information PHP</title>
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $id = $_GET["id"];
        $sql = "SELECT FName, LName, Sex, DOB, AddressNo, Street1, Street2, City, Phonenumber, CivilStatus, Specialization
                FROM PERSON P, DOCTOR D WHERE P.NID = D.NID AND D.NID = '$id';";
        $retval = mysqli_query($conn, $sql);
        if (mysqli_num_rows($retval) > 0){
            $row = mysqli_fetch_assoc($retval);
            echo    "Name: " . $row["FName"] . " " . $row["LName"] .
                    "<br>Sex: " . $row["Sex"] . 
                    "<br>Date of birth: " . $row["DOB"] . 
                    "<br>Address: " . $row["AddressNo"] . ", " . $row["Street1"] . ", " . $row["Street2"] . ", " . $row["City"] .
                    "<br>Phone Number: " . $row["Phonenumber"] . 
                    "<br>Civil Status: " . $row["CivilStatus"] . 
                    "<br>Specialization: " . $row["Specialization"] . 
                    "<br>";
        }
        else 
            echo "You have not registered";
        
        mysqli_close($conn);
        ?>
		<br><a href="main_page.html" class="btn"><input type="submit" value="HOME" class="registerbtn"></a>
    </body>
</html>