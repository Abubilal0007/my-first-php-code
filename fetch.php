<?php

$mydb = "datadb";
$servername = "localhost";
$username = "otega";
$password = "tega247";

$conn = mysqli_connect($servername, $username, $password, $mydb);


if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: #fff;">


    <?php

    // $sql = "SELECT id, email, password FROM users";
    // $result = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"] . "- Name: " . $row["email"] . " " . $row["password"] . "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }









    ?>










    <div class="container mt-3">
        <h2>Responsive Table</h2>
        <p>The .table-responsive class adds a scrollbar to the table when needed:</p>

        <div class="table-responsive">
            <table class="table table-bordered">



                <?php

                /* 
                the * is the same as the code  below the short way to do it


                $sql = "SELECT * FROM users";


this is {where from statement } where you will pick the values you want

                   $sql = "SELECT id, email, password FROM users WHERE email='otega'";

                */

           

                ?>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Password</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                  $i = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo  $i++  ?></td>
                                <td><?php echo  $row["email"];  ?></td>
                                <td><?php echo  $row["password"];  ?></td>

                            </tr>


                        <?php
                        }
                    } else {

                        ?>

                        <td colspan="3" class="text-center">no data is found</td>

                    <?php
                    }


                    ?>



                </tbody>
            </table>
        </div>
    </div>

</body>

</html>