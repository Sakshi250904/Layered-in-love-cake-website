<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "bsms_db");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $user_id = "";
        $fullname = $_REQUEST['name'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $type = "2";
        $status = "1";
        $date_created = date('Y-m-d H:i:s');


        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO user_list VALUES ('$user_id','$fullname',
            '$username','$password','$type','$status','$date_created')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in the database successfully."
                . " Redirecting to the home page...</h3>";
        
            // Redirect to the home page after a brief delay (you can adjust the delay if needed)
            header("refresh:3;url=index.php");
            } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>