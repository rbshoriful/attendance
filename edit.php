<?php
    $title = 'Edit Record';

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();

    if(!isset($_GET['id']))
    {
        // echo 'Error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    
        // { start else and end code } 
?>


    <h1 class="text-center p-3"><span class="text-success">Edit Record</span> </h1>
<!--Action to Success page -->
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
                <select class="form-select" id="specialty" name="specialty">
                   <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == 
                        $attendee['specialty_id']) echo 'selected' ?>>
                            <?php echo $r['name']; ?>
                        </option>
                    <?php }?>
                </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $attendee['emailaddress'] ?>" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
         <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" value="<?php echo $attendee['contactnumber'] ?>" aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your email with anyone else. </div>
        </div>
        <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

    <?php } ?>


<br>
<br>
    <?php require_once 'includes/footer.php'; ?>