
<!doctype html>
<html>
    <head>
        <title>Select Query</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>SQL Select Query</h1>
            <?php
            include('connection.php');
            echo "<br><br>";
            $query = "select * from user";
            $result = mysqli_query( $conn, $query );

            // check for result
            if(mysqli_num_rows($result) > 0 ){
                //we have data
                echo "<table class='table table-bordered'><tr><th>ID</th><th>UserName</th><th>Email</th></tr>"; 
                
                while( $row = mysqli_fetch_assoc($result) ){
                    echo "<tr><td>".$row["id"]."</td><td>".$row["user_name"]."</td><td>".$row["email_id"]."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "no data returned";
            }

            mysqli_close($conn);
            ?>
        </div>
    </body>
</html>
