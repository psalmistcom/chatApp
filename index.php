<?php
    if (isset($_POST['checking'])) {
       echo "working fine";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat Application </title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header> Real Time Chat Application with PHP </header>
            <form action="" method="post">
                <div class="err-text">This is an error message! </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <div class="field input">
                        <label for="">Password </label>
                        <input type="password" placeholder="Enter Your Password">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Upload your Image</label>
                        <input type="file">
                    </div>
                    <div class="field button">                    
                        <input type="submit" name="checking" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already Signed up? <a href="login.php">Login here</a></div>
        </section>
    </div>
    
</body>
</html>