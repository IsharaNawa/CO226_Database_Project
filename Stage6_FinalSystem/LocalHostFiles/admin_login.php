<html>
    <head>
        <link href="style_admin_login_php.css" rel="stylesheet" type="text/css"> 
        <title>Admin Login PHP</title>
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $pass = $_GET["pass"];
		
        if (strcmp($pass, '12345678') == 0){
            echo 'CONFIRMED<br>
			<h2>INSERT MEDICINE STOCK:</h2>
            <form action="medicine.php" method="GET">
            <table>
                <tr>
                    <th>Scientific Name:</th>
                    <td>
                        <input type="text" name="SName">
                    </td>
                </tr>
                <tr>
                    <th>Manufacturer:</th>
                    <td>
                        <input type="text" name="Man">
                    </td>
                </tr>
                <tr>
                    <th>Number of Units:</th>
                    <td>
                        <input type="text" name="Units">
                    </td>
                </tr>
                <tr>
                    <th>Commercial Name:</th>
                    <td>
                        <input type="text" name="CName">
                    </td>
                </tr>
                <tr>
                    <th>Physical State:</th>
                    <td>
                        <input type="text" name="State">
                    </td>
                </tr>
                <tr>
                    <th>Unit Price:</th>
                    <td>
                        <input type="text" name="Price">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="INSERT MEDICINE STOCK" class="registerbtn"></td>
                </tr>
            </table>
            </form>
            
			<h2>REGISTER PATIENT IN THE WARD:</h2>
            <form action="ward_reg.php" method="GET">
            <table>
                <tr>
                    <th>Patient NID:</th>
                    <td>
                        <input type="text" name="NID">
                    </td>
                </tr>
                <tr>
                    <th>Ward No:</th>
                    <td>
                        <input type="text" name="WardNo">
                    </td>
                </tr>
                <tr>
                    <th>Registered Date:</th>
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
                <tr>
                    <td><input type="submit" value="Register PATIENT" class="registerbtn"></td>
                </tr>
            </table>
            </form>
            <h2>DISCHARGE PATIENT FROM THE WARD:</h2>
            <form action="ward_discharge.php" method="GET">
            <table>
                <tr>
                    <th>Enter Patient NID: </th>
                    <td>
                        <input type="text" name="NID">
                    </td>
                </tr>
                <tr>
                    <th>Enter Ward Number: </th>
                    <td>
                        <input type="text" name="WardNo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Discharge PATIENT" class="registerbtn">
                    </td>
                </tr>
            </table>
            </form>';
        }
        else
        echo "NOT CONFIRMED<br>";
		
        
        mysqli_close($conn);
        ?>
    </body>
</html>