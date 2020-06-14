<?php 
    include 'init.php'; 
    include $tpl . 'header.php'; 
    include './includes/languages/english.php'; 
?>

    <form class="login">
        <h2 class="text-center text-default">Admin Login</h2>
        <div class="form-group">
            <label class="login__lable" for="adminUsername"></label>
            <input class="form-control" type="text" name="user" id="adminUsername" placeholder="Username">
        </div>
        <div class="form-group">
            <label class="login__lable" for="adminPassword"></label>
            <input class="form-control" type="password" name="pass" id="adminPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
    

<?php include $tpl . 'footer.php'; ?>
