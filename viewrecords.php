</br>
</br>
</br>
</br>

<?php 

    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';


    //Get all attendees
    $results = $crud->getAttendees();
?>
<!--Table to display information read from database -->
<!--
    <table>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Address</th>
            <th>Contact</th>
            <th>Speciality</th>
        </tr>
        <tr></tr>


    </table>
    -->

</br>
<table class="table table-striped">
    <thead class='thead-dark'>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <!-- <th scope="col">Date of Birth</th>
            <th scope="col">Email Address</th>
            <th scope="col">Contact</th> -->
            <th scope="col">Church Position</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <th scope="row"><?php echo $r['attendee_id'] ?></th>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['lastname'] ?></td>
            <!-- <td><?php //echo $r['dateofbirth'] ?></td>
            <td><?php //echo $r['emailaddress'] ?></td>
            <td><?php //echo $r['contactnumber'] ?></td>
            this out <td><?php //echo $r['churchposition_id'] ?>-->
            <td><?php echo $r['churchposition_name'] ?></td>
            <!--generates a link view.php, creating a query string  -->
            <td>
                <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record');"
                    href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br />
<br />
<br />
<br />
<a href="index.php" class="btn btn-outline-primary">Home</a>
<a href="logout.php" class="btn btn-outline-primary">Log Out</a>
<br />
<br />
<br />
<br />
<br />
<br />
<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>