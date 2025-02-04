<br />
<br />
<br />
<br />
<br />
<br />


<?php 

    $title = 'User Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    

    //if data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        var_dump($new_password);
        //calling user object
        $result = $user->getUser($username,$new_password);
        

        if(!$result){

            echo '<div class="alert-danger"> Username or Password is incorrect! Please try again. </div>';
            //include ' includes/errormessage.php';

        }else{

            //$_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewreservation.php");
        }


    }

?>

<br />
<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded"><?php echo $title ?> </h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table table-sm">
        <tr>

            <td><label for="username">Username: * </label></td>
            <td><input required type="text" name="username" class="form-control" id="username"
                    value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {echo $_POST['username'];} ?>">

            </td>


            <?php if(empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>
             $username_error</p>"; ?>

        </tr>
        <tr>
            <td><label for="password">Password: * </label></td>
            <td><input type="password" name="password" class="form-control" id="password" required>


                <?php if(empty($password) && isset($password_error)) echo "<p class='text-danger'>
            $password_error</p>"; ?>



            </td>
        </tr>

    </table><br /><br />

    <button type="submit" value="Login" class="btn btn-outline-primary btn-lg">Login</button>

    <br />
    <br />

    <a href="regform1.php">Sign Up</a> <span class=" "><a href="a">Forget Password </a> </span>



</form><br /><br /><br />
<br />
<br />
<br />
<br />

<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>