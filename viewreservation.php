<?php 
$title = "View Your Reservation";
require_once 'includes/header.php'; 

 //Get all attendees by id
    
 if(!isset($_GET['id'])){
    //not displaying
     echo "<h1 class='text-danger'>Please verify information and try again </h1>";    
     include ' includes/errormessage.php';
    
 } else{
     $id = $_GET['id'];
     $results = $crud->getAttendeeDetails($id);

?>

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded"><?php echo $title ?></h1>

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded">View Your Reservations</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="success.php" enctype="multipart/form-data">

   
<!-- Bootstrap Card Tiles component -->
<img src=" <?php echo empty($results['avatar_path']) ? "uploads/defaultimage.png" : $results['avatar_path']; ?>"
    class="rounded-circle" style="width: 20%, height: 20%;" />
<br />
<br />
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $results['firstname'] . ' ' . $results['lastname'];   ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php  echo $results['churchposition_name'];  ?></h6>
        <p class="card-text">Date of Birth: <?php    echo $results['dateofbirth']; ?> </p>
        <p class="card-text">Email Address: <?php     echo $results['emailaddress']; ?> </p>
        <p class="card-text">Phone Number: <?php    echo $results['contactnumber']; ?> </p>


    </div>
</div>
<!--end of Bootstrap Card Tiles component -->

    <br />
    <br />
    <br />

    <div class="text-center">
        <!--<button type="submit" name="submit" class="btn btn-outline-primary ">Edit </button>-->
        <a href="editreservation.php" class="btn btn-outline-primary">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-outline-danger">Cancel</a>
        <a href="index.php" class="btn btn-outline-primary">Home</a>
    </div>
</form>

<?php } ?>

<br />
<br />
<br />
<br />

<?php 
require_once 'includes/footer.php'; 
?>