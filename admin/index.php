<?php 
    include 'init.php'; 
    include $tpl . 'header.php'; 
    include './includes/languages/english.php';


    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
        $username   = $_POST[ 'user' ];
        $password   = $_POST[ 'pass' ];
        $hashedPass = SHA1( $password );

        $stmt = $con->prepare(
                            'SELECT 
                                `username`
                                ,`password`
                            FROM
                                `user`
                            WHERE
                                `username` = ?
                            AND 
                                `password` = ?
                            AND 
                                `group_id` = 1;'
                        );
                        
        $stmt->execute(
            array(
                $username
                ,$hashedPass
                )
            );
            
        $count = $stmt->rowCount();

        if ( $count > 0 ) {
            echo 'Welcome ' . $username;
        }
    }


?>

    <form class="login" action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>" method="POST">
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
