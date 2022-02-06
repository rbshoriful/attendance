<?php
  // This is includes the session file. this file contains code that starts/resumes a session.
  //By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
 include_once 'includes/session.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css">

    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">IT Conference</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="viewrecords.php">View Attendees</a>
      </div>
      <div class="navbar-nav me-2">
        <!-- session userid include -->
        <?php 
          if(!isset($_SESSION['userid'])){
        ?>
          <a class="nav-link" aria-current="page" href="login.php">Login</a>
          <?php } else { ?>
           <a class="nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a>
          <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            <?php } ?>
      </div>
    </div>
  </div>
</nav>

<br>