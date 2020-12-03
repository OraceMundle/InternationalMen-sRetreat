<?php 
$title = "Review Registration Form 1";
require_once 'includes/header.php'; 
?>

<h1><?php echo $title ?></h1>

<h1 class="text-center">Review Registration Information</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="success.php" enctype="multipart/form-data">

    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['churchPosition'];  ?></h6>
            <p class="card-text">Date of Birth: <?php   echo $_POST['dob']; ?> </p>
            <p class="card-text">Email Address: <?php   echo $_POST['exampleInputEmail1']; ?> </p>
            <p class="card-text">Phone Number: <?php    echo $_POST['phone']; ?> </p>




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