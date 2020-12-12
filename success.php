<!--header-->
<br />
<br />
<br />
<br />
<br />
<br />
<?php 

    $title='Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    require_once 'includes/session.php';
    require_once 'sendemail.php';

    



?>

<!-- H1 tag for Title page -->
<br />
<br />
<br />
<br />
<h1 class="text-center text-success">Registration Successful</h1>
<h4 class="text-center text-success">Please check your email for confirmation</h4>
<br />
<br />


<!-- Bootstrap Card Tiles component -->

<img src=" <?php echo empty($destination) ? "uploads/defaultimage.png" : $destination; ?>" class="rounded-circle" style="width: 20%, height: 20%;"/>
<!--img src=" <?php //echo $destination ?>" class="rounded-circle" style="width: 20%, height: 20%;" />--> 
<br />
<br />
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h5>
        <p class="card-text">Date of Birth: <?php    echo $_POST['dob']; ?> </p>
        <p class="card-text">Email Address: <?php     echo $_POST['exampleInputEmail1']; ?> </p>


    </div>
</div>

<!--end of Bootstrap Card Tiles component -->

<!--This Prints out information passed to the action page using the GET method -->
<!-- Bootstrap Card Tiles component 
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'];   ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php  //echo $_GET['speciality'];  ?></h6>
        <p class="card-text">Date of Birth: <?php    //echo $_GET['dob']; ?> </p>
        <p class="card-text">Email Address: <?php    // echo $_GET['exampleInputEmail1']; ?> </p>
        <p class="card-text">Phone Number: <?php    //echo $_GET['phone']; ?> </p>

         Links not being used
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
        

    </div>
</div>
 end of Bootstrap Card Tiles component -->


<br />
<br />
<a href="index.php" class="btn btn-outline-info">Home</a>

<!--
<a href="viewrecords.php" class="btn btn-info">Back to List</a> 
-->


<br />
<br />
<br />
<br />


<?php 
require_once 'includes/footer.php'; 
?>