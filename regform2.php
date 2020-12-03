<?php 
$title = "Registration Form 2";
require_once 'includes/header.php'; 
?>

<h1><?php echo $title ?></h1>

<h1 class="text-center">International Men's Retreat Registration</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="churchposition">Church Postion</label>
        <!-- insert drop down box selection -->
        <select class="form-control" id="churchposition" name="churchposition">
            <!-- 
        <?php // while($r = $results->fetch(PDO::FETCH_ASSOC)) {    ?>
            <option value="<?php //echo $r['speciality_id'] ?>"><?php //echo $r['name']; ?> </option>  
           <?php// } ?>
        -->
            <option value="1">Bishop</option>
            <option>Pastor</option>
            <option>Minister</option>
            <option>International Men's Dept. Worker</option>
            <option>National Men's Dept. Worker</option>
            <option>Local Men's Dept. Worker</option>
            <option>Member</option>
        </select>
        <!--<input type="text" class="form-control" id="speciality" aria-describedby="text">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>


    <div class="form-group">
        <label for="churchname">Church Name</label>
        <input required type="text" class="form-control" id="churchname" name="churchname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    </br>

    <div class="form-group">
        <label for="country">Country</label>
        <select class="selectpicker countrypicker" data-flag="true">
            <option data-icon="uploads/jamaica.png">Jamaica</option>
            <option data-icon="uploads/jamaica.png">United Kingdom</option>
            <option data-icon="uploads/jamaica.png">United States of America</option>
            <option data-icon="uploads/jamaica.png">Cayman Islands</option>
        </select>
        <!--<input required type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>

    <div class="form-group">
        <label for="yearsOfService">Years of Service</label>
        <input type="text" class="form-control" id="yearsOfService" name="yearsOfService"
            aria-describedby="yearsOfServiceHelp">
    </div>

    <br />

    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload (Optional)</small>

    </div>

    <br />
    <br />
    <br />
    <div class="text-center">
        <button type="submit" name="submit" class="btn btn-outline-primary ">Save </button> <span class="text-success">--></span>
        <a href="reviewregform.php" class="btn btn-outline-primary">Review</a>
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