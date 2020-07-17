<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap/css/bootstrap.min.css" >
    <script src="./assets/js/jquery-3.4.1.min.js" ></script>
    <script src="./assets/bootstrap/bootstrap/js/bootstrap.min.js" ></script>
    <title>Email saver</title>
</head>
<body>

<?php 
   require_once 'process.php';
?>

<div class="container">

<?php if(isset($_SESSION['success_message'])): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <?php echo $_SESSION["success_message"];
       // remove all session variables
       session_unset();

      // destroy the session
      session_destroy();
     ?>
    </div> 
<?php endif; ?>

<form method="POST"  action="process.php" class="form-inline" style="margin-top:100px">
  <div class="form-group" >
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" name="emailsaver" class="btn btn-primary">Send invitation</button>
</form>

</div>


</body>
</html>