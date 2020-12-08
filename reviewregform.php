<?php 
require_once 'includes/session.php';

$title = "Review Registration Form 1";
require_once 'includes/header.php'; 
?>

<h1><?php echo $title ?></h1>

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded">Review Registration Information</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="POST" action="success.php" enctype="multipart/form-data">

    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <!--
            <h5 class="card-title"><?php echo  $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['churchposition'];  ?></h6>
            -->
            <input type="hidden" id="firstname" name="firstname" value="<?php echo $_POST['firstname']; ?> ">
            <input type="hidden" id="lastname" name="lastname" value="<?php echo $_POST['lastname']; ?> ">
            <input type="hidden" id="dob" name="dob" value="<?php echo $_POST['dob']; ?> ">
            <input type="hidden" id="exampleInputEmail1" name="exampleInputEmail1" value="<?php echo $_POST['exampleInputEmail1']; ?> ">
            



            <p class="card-text">Firstname: <?php   echo $_POST['firstname']; ?> </p>
            <p class="card-text">Lastname: <?php   echo $_POST['lastname']; ?> </p>
            <p class="card-text">Date of Birth: <?php   echo $_POST['dob']; ?> </p>
            <p class="card-text">Home Address: <?php   echo $_POST['homeAddress']; ?> </p>
            <p class="card-text">Email Address: <?php   echo $_POST['exampleInputEmail1']; ?> </p>
            <p class="card-text">Phone Number: <?php    echo $_POST['phone']; ?> </p>
            <p class="card-text">First time attending International Men's Retreat:
                <?php    echo $_POST['inlineRadioOptions']; ?> </p>
            <p class="card-text">Church Position: <?php   echo $_POST['churchposition']; ?> </p>
            <p class="card-text">Church Name: <?php   echo $_POST['churchname']; ?> </p>
            <p class="card-text">Country: <?php   echo $_POST['country']; ?> </p>
            <p class="card-text">Years of Service: <?php   echo $_POST['yearsofservice']; ?> </p>
            <p class="card-text">Retreat Payment Option: <?php   echo $_POST['inlineRadioOptions2']; ?> </p>


        </div>
    </div>

    <br />
    <br />
    <br />

    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-primary ">Submit </button>
        <a href="regform1.php" class="btn btn-outline-primary">Back</a>
        <a href="index.php" class="btn btn-outline-primary">Home</a>
    </div>
</form>

<br />
<br />
<br />
<br />

<?php 
require_once 'includes/footer.php'; 
?>