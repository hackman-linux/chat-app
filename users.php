<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
    header("location: login.php");
    }
?>

<?php
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                    include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_object($sql);
                    }
                ?>
                <div class="content">
                    <img src="assets/img/girl.jpeg" alt="">
                    <div class="details">
                        <span>Queen</span>
                        <p>Active now</p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name t search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="assets/img/fash.jpeg" alt="">
                        <div class="details">
                            <span>Queen</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/img/fash.jpeg" alt="">
                        <div class="details">
                            <span>Queen</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/img/fash.jpeg" alt="">
                        <div class="details">
                            <span>Queen</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/img/fash.jpeg" alt="">
                        <div class="details">
                            <span>Queen</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="assets/img/fash.jpeg" alt="">
                        <div class="details">
                            <span>Queen</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>

    <script src="assets/js/users.js"></script>
</body>
</html>