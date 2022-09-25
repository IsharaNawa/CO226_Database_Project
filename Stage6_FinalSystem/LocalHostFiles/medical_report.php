<html>
    <head>

        <title>Medical Reports PHP</title>
		<link href="style_medical_report_php.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $id = $_GET["id"];
        $sql1 = "SELECT PATIENTNO FROM PATIENT WHERE NID = '$id'";
        $retval1 = mysqli_query($conn, $sql1);
        $value = mysqli_fetch_assoc($retval1);
        $patientno =  $value['PATIENTNO']; //81536122v

        if (mysqli_num_rows($retval1) > 0){
            $sql = "SELECT I.ReportNo, IssueDate, Test, Lab, DoctorNID
                    FROM ISSUES I, MEDICALREPORT M WHERE I.ReportNo = M.ReportNo AND Patientno = $patientno;";
            $retval = mysqli_query($conn, $sql);
            if (mysqli_num_rows($retval) > 0)
                while($row = mysqli_fetch_assoc($retval))
                    echo    "Rerport No: " . $row["ReportNo"] . 
                            "<br>Issue date: " . $row["IssueDate"] . 
                            "<br>Test: " . $row["Test"] . 
                            "<br>Lab: " . $row["Lab"] .
                            "<br>Doctor NID: " . $row["DoctorNID"] . 
                            "<br><br>";
            else 
                echo "<h3>You don't have any medical reports<h3>";
        }
        else 
            echo "<h3>You are not registered<h3>";
        
        mysqli_close($conn);
        ?>
		
		<a href="main_page.html" class="btn"><input type="submit" value="HOME" class="registerbtn"></a>
    </body>
</html>