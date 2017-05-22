<!-- SQL Insert Query

"insert into user ( id,user_name,full_name,email_id,mobile_number,signup_date) 
 values ( NULL,'user1','myName','user1@email.com','9856544678',CURRENT_TIMESTAMP)";

-->

<?php
    include('connection.php');
    $query = "insert into user (id,user_name,full_name,email_id,mobile_number,signup_date) values (NULL,'user1','myName','user1@email.com','9856544678',CURRENT_TIMESTAMP)";
?>
<!doctype html>
<html>
    <head>
        <title>Insert Query</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>SQL Insert Query</h1>
            <?php
                if( mysqli_query( $conn, $query ) ){
                    echo "Insertion Successful";
                }
                else{
                    echo "Error In Insertion: ".$query ."<br>". mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>