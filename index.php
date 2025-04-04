<!DOCTYPE html>
<!--Coding by Mr_Codex-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.7.2-web/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat App</header>
            <form action="#" entype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now!</a></div>
        </section>
    </div>

    <script src="assets/js/pass-show-hide.js"></script>
    <script src="assets/js/signup.js"></script>
</body>
</html>