<html>
    <head>
        
		<link href="style_doctor_login_php.css" rel="stylesheet" type="text/css">
        <title>Doctor Login PHP</title>
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $doctorid = $_GET["doctorid"];
        $pass = $_GET["pass"];
		
        $sql1 = "SELECT PASS FROM DOCTOR WHERE NID ='$doctorid';";
        $retval1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($retval1);
        if (strcmp($row1["PASS"], $pass) == 0){
            echo 'CONFIRMED<br>
			<h4>GET PATIENT INFO:</h4>
            <form action="patient_info.php" method="GET">
                <table>
                    <tr>
                        <th>Enter Patient NID:</th>
                        <td>
                            <input type="text" name="patientid">
                            <input type="submit" value="Get Information" class="registerbtn">
                        </td>
                    </tr>
                </table>
            </form>
            <h4>INSERT NEW TREATMENT RECORD:</h4>
            <form action="treatment_record.php" method="GET">
            <table>
                <tr>
                    <th>Patient NID:</th>
                    <td>
                        <input type="text" name="PatientNID">
                    </td>
                </tr>
                <tr>
                    <th>Doctor NID:</th>
                    <td>
                        <input type="text" name="DoctorNID">
                    </td>
                </tr>
                <tr>
                    <th>Treatment Date:</th>
                    <td>
                        <input type="date" name="Date">
                    </td>
                </tr>
                <tr>
                    <th>Illness:</th>
                    <td>
                        <input type="text" name="Illness">
                    </td>
                </tr>
                
                   
                
            </table>
			 <input type="submit" value="insert" class="registerbtn">
        </form>';
        }
        else
        echo "NOT CONFIRMED<br>";
		
        
        mysqli_close($conn);
        ?>
    </body>
</html>