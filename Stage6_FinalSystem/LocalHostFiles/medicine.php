<html>
    <head>
        <link href="style_admin_login_php.css" rel="stylesheet" type="text/css"> 
        <title>Medicine PHP</title>
    </head>
    <body>
        <?php
        $dbhost = 'localhost:3308';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
        mysqli_select_db($conn, 'Hospital_Management_System');
        
        $SName = $_GET["SName"];
        $Man = $_GET["Man"];
        $Units = $_GET["Units"];
        $CName = $_GET["CName"];
        $State = $_GET["State"];
        $Price = $_GET["Price"];
        $sql = "INSERT INTO MEDICINE VALUES ('$SName', '$Man', $Units, '$CName', '$State', '$Price');";
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