<!DOCTYPE html>
<html>

<head>
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="form-login">
        <form action="login-process.php" method="post">
            <h2>LOGIN</h2>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <?php if (isset($_GET['erro'])) { ?>
                <p class="error"><?php echo $_GET['erro']; ?></p>
            <?php } ?>
            <label>Username</label>
            <input type="text" name="uname" placeholder="Username"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button>Login</button>
        </form>
    </div>
</body>

</html>