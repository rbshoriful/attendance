<?php
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties()

?>
    <!-- 
        - First name
        - Last name
        - Date of Birth (Use DatePicker)
        - Specialty (Database Admin, Software Developer, Web Administrator, Other)
        - Email Address
        - Contact Number
    -->
    <h1 class="text-center p-3"><span class="text-primary">Registration</span> for IT Conference</h1>
<!--Action to Success page -->
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
                <select class="form-select" id="specialty" name="specialty">
                   <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                    <?php }?>
                </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
         <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your email with anyone else. </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
    </form>


<br>
<br>
    <?php require_once 'includes/footer.php'; ?>