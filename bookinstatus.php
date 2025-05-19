<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING STATUS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url("images/carbg2.jpg");
            background-position: center;
        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .table-container {
            width: 80%;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #ff7200;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .button {
            padding: 10px 20px;
            background-color: #ff7200;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .button:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>

<?php
    require_once('connection.php');
    session_start();
    $email = $_SESSION['email'];

    // Fetch all bookings for the user
    $sql = "SELECT * FROM booking WHERE EMAIL='$email' ORDER BY BOOK_ID DESC";
    $name = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($name) == 0) {
        echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>';
        echo '<script>window.location.href = "cardetails.php";</script>';
    } else {
        // Fetch user details
        $sql2 = "SELECT * FROM users WHERE EMAIL='$email'";
        $name2 = mysqli_query($con, $sql2);
        $rows2 = mysqli_fetch_assoc($name2);

        // Display a button to go back to home
        echo '<div class="container">
                <a href="cardetails.php" class="button">Go to Home</a>
              </div>';

        // Start the table structure
        echo '<div class="container">
                <div class="table-container">
                <table>
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>CAR NAME</th>
                        <th>NO OF DAYS</th>
                        <th>BOOKING STATUS</th>
                    </tr>
                </thead>
                <tbody>';

        // Loop through all bookings and display them in table rows
        while ($rows = mysqli_fetch_assoc($name)) {
            $car_id = $rows['CAR_ID'];

            // Fetch car details for each booking
            $sql3 = "SELECT * FROM cars WHERE CAR_ID='$car_id'";
            $name3 = mysqli_query($con, $sql3);
            $rows3 = mysqli_fetch_assoc($name3);

            // Table rows displaying booking details
            echo '<tr>
                    <td>' . $rows2['FNAME'] . ' ' . $rows2['LNAME'] . '</td>
                    <td>' . $rows3['CAR_NAME'] . '</td>
                    <td>' . $rows['DURATION'] . '</td>
                    <td>' . $rows['BOOK_STATUS'] . '</td>
                </tr>';
        }

        // Close the table tags
        echo '</tbody>
              </table>
              </div>
              </div>';
    }
?>

</body>
</html>
