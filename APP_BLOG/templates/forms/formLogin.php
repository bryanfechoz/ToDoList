
<!-- < if (isset($error)):?>
    <div class="error"><small> <?= $error?> </small></div>
< endif ?> -->

<form method="post" action="index.php">
    <input type="text"  name="email" placeholder="Enter your Email adress">
    <input type="text" name="password" placeholder="Enter your password">
    <div>
        <button type="submit" name="login-submit" class="btn-login">Login</button>
    </div>
</form>    


