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
        <section class="form login">
            <header>Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">signup now!</a></div>
        </section>
    </div>

    <script src="assets/js/pass-show-hide.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>