<!--header-->
<br />
<br />
<?php 

    $title='Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    require_once 'includes/session.php';
    require_once 'sendemail.php';
    
    $results = $crud->getChurchPosition();
    $results2 = $crud->getCountry();

    



?>

<!-- H1 tag for Title page -->
<br />
<br />
<br />
<br />
<h1 class="text-center text-success font-weight-bold shadow p-3 mb-5 bg-white rounded">Registration Successful</h1>
<h4 class="text-center text-success font-weight-bold shadow p-3 mb-5 bg-white rounded">Please check your email for confirmation</h4>
<br />
<br />


<!-- Bootstrap Card Tiles component -->

<img src=" <?php echo  $_POST['avatar']; ?>" class="rounded-circle" style="width: 20%, height: 20%;"/>
<br />
<br />
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h3 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h3>
        <h5 class="card-title"><?php echo $_POST['churchposition'];   ?></h5>
        <p class="card-text">Date of Birth: <?php    echo $_POST['dob']; ?> </p>
        <p class="card-text">Email Address: <?php     echo $_POST['exampleInputEmail1']; ?> </p>
        <p class="card-text">Home Address: <?php     echo $_POST['homeAddress']; ?> </p>
        <p class="card-text">Home Church:: <?php     echo $_POST['churchname']; ?> </p>
        <p class="card-text">Country:: <?php     echo $_POST['country']; ?> </p>


    </div>
</div>

<!--end of Bootstrap Card Tiles component -->


<br />
<br />
<a href="index.php" class="btn btn-outline-info">Home</a>
<a href="regform1.php" class="btn btn-outline-info">Complete another Registration Here</a> 


<br />
<br />
<br />
<br />


<?php 
require_once 'includes/footer.php'; 
?>