<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/cont.css">
    <title>Feedback</title>
</head>
	
<body>
<?php
require_once('connection.php');
session_start();
$email = $_SESSION['email'];

if(isset($_POST['submit'])){
    // Sanitize and store the comment
	$comment = mysqli_real_escape_string($con, $_POST['comment']);
	$sql = "INSERT INTO feedback (EMAIL, COMMENT) VALUES ('$email', '$comment')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo '<script>alert("Feedback Sent Successfully!! THANK YOU!!")</script>';
        // Redirect after a short delay
        header("refresh:2; url=../cardetails.php");
        exit();
    } else {
        echo '<script>alert("Error submitting feedback. Please try again.")</script>';
    }
}
?>

    <section class="contact">
        
        <div class="content">
            <h1><b>Feedback</b></h1>
        </div>
        
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>PAF-IAST,Mang,Haripur<br>22730</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>3368030707</p>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>contactuscars@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form method="post">
                    <h2>Send Message</h2>
                    
                    <div class="inputBox">
                        <input type="text" name="fullname" required="required">
                        <span>Full Name</span>
                    </div>
                    
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    
                    <div class="inputBox">
                        <textarea name="comment" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    
                    <!-- This inputBox now contains both buttons aligned horizontally -->
                    <div class="inputBox" style="display: flex; justify-content: space-between; align-items: center;">
                        <input type="submit" name="submit" value="Send" style="width: 48%; padding: 10px; font-size: 18px; background: orange; color: #fff; border: none; cursor: pointer; border-radius: 10px;">
                        <button class="btn" style="width: 48%; background: orange; color: #fff; border: none; cursor: pointer; padding: 10px; font-size: 18px; border-radius: 10px;">
                            <a href="cardetails.php" style="text-decoration: none; color: #fff;">Go To Home</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>
