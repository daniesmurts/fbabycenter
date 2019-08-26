<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="scripts225.js"></script>
</head>
<body>
  
<div class="container">
  

<div class="wrapper">
    <?php echo $comments; ?>
    

    <form action="/action_page.php" class="comment_form">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>


     <button type="button" id="submit_btn" class="btn btn-primary">POST</button>
      <button type="button" id="update_btn" style="display: none;" class="btn btn-primary">UPDATE</button>
  </form>


 
  </div>


</div>

</body>
</html>
