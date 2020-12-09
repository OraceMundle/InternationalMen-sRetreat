<br />
<br />

<?php 

$title = "INTERNATIONAL MEN'S RETREAT";
require_once 'includes/header.php'; 

?>
<br />

<h1 class="text-center font-weight-bold shadow p-3 mb-5 bg-white rounded"><?php echo $title
        ?>

    <br />
    <div class="text-danger"><?php 
        $d1=strtotime("December 27");
        $d2=ceil(($d1-time())/60/60/24);
        echo  $d2 ." days until 27th of December.";
    ?> </div>



</h1>

<div class="text-center embed-responsive embed-responsive-16by9">
    <object width="900" height="400" data="https://www.youtube.com/v/a9gkTvkZ8IM" type="application/x-shockwave-flash">
        <param name="src" value="https://www.youtube.com/v/a9gkTvkZ8IM" />
    </object>
</div>
<br />
<br />

<div class="alert alert-info text-center" role="alert">
    <h1><a href="regform1.php">Click Here to Register</a></h1>

</div>



<?php 


require_once 'includes/footer.php'; 

?>