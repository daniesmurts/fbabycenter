<?php
session_start(); 
        if(!(isset($_SESSION['t_username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
								
								
								if(isset($_POST['update']))
								{     
									$id = $_POST['edit_id'];  
									$title = mysqli_real_escape_string($dbc, $_POST['title']);  
									$descpt = mysqli_real_escape_string($dbc, $_POST['descpt']); 
									$author = mysqli_real_escape_string($dbc, $_POST['author']); 
									$subject_id = $_SESSION['t_subject_id']; 
								
									$cover = $_FILES['cover']['name'];
			                        $cover_tmp_name = $_FILES['cover']['tmp_name']; 
			                        
			                        $book = $_FILES['book']['name'];
			                        $book_tmp_name = $_FILES['book']['tmp_name']; 
									
									 
								   if(empty($title)){
										$errMSG = "Введите Название Книги.";
									}  
									else if(empty($descpt)){
										$errMSG = "Введите Краткое описание книги.";
									}
									
									else if(empty($cover)){
										$errMSG = "Введите Обложкю книги.";
									}
									
										else if(empty($book)){
										$errMSG = "Введите Обложкю книги.";
									}
									
									else if(empty($author)){
										$errMSG = "Введите Автора книги.";
									}
									  
									
									// if no error occured, continue ....
									if(!isset($errMSG))
									{   
										move_uploaded_file( $cover_tmp_name,"assets/posted_images/$cover"); 
										move_uploaded_file( $book_tmp_name,"assets/posted_images/$book"); 
			
			 	

$q ="UPDATE library SET title='$title', cover='$cover', book='$book', descpt='$descpt', author='$author', subject_id='$subject_id' WHERE id=$id";
$r = mysqli_query($dbc,$q);

 
										
										
										if($r){
											$successMSG = "Новые Данны успешно добавлены ...";
											header("refresh:3 ; all_books.php");
										}
										else
										{
											$errMSG = "Извините, ошибка прозойшла. Данны не были добавлены...";
										}
										
									}
								}
?>  




<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Add </title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> 
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/books.css">
 
 

  
</head>

<body>
 
<?php include("assets/includes/navbar.php"); ?>





 


<div class="container-fluid main-container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 aside">
            <?php include("assets/includes/aside.php"); ?>
      </div>


  <div class="col-lg-9 col-md-9 col-sm-12">

    <div class="row container-title"><br/>

      <div class="col-lg-7 col-md-7 col-sm-12">
      <h2>Книги</h2>
      </div>

    <div class="col-lg-5 col-md-5 col-sm-12 setting_links">
      <p> <a href="add_book.php" class="setting_add">Add</a>  &nbsp;/  &nbsp;<a  href="all_books.php" class="setting_edit">Редактироватиь</a> </p>
    </div>

  </div>

<hr>

    <div class="row text-center">
        
        
      <div class="col-lg-1 col-md-1 col-sm-12"></div>
        
      <div class="col-lg-10 col-md-10 col-sm-12">
                    <?php
        if(isset($errMSG)){
              ?>
             <div class="alert alert-danger alert-dismissable" style="margin-top:50px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Error -</strong> <?php echo $errMSG; ?>
             </div>
              <?php
          }
          else if(isset($successMSG)){
            ?>
            <div class="alert alert-success alert-dismissable" style="margin-top:50px;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              <strong>Success -</strong> <?php echo $successMSG; ?>
             </div>
            <?php
          }
    ?> 
          
          
        <div class="form-area">  
							<form role="form" action="" method="post" enctype="multipart/form-data" >
							<br style="clear:both">
							<?php 
							
		  if(isset($_GET['edit_id'])){ 
			require_once 'assets/includes/connexion.php';
			
            $subject_id = $_SESSION['t_subject_id'];  
            
            $edit_id = $_GET['edit_id'];
            $q = "SELECT * FROM library WHERE subject_id ='$subject_id' AND id='$edit_id' ORDER BY title ASC ";                
            $r = mysqli_query($dbc,$q);
        
            while ($data = mysqli_fetch_array($r)){  
            $title = $data['title']; 
            $cover =  $data['cover'];
            $book =  $data['book'];
            $descpt = $data['descpt']; 
            $author = $data['author']; 
							 
							
							
							?>
							
<input type="hidden" class="form-control"   name="edit_id" value="<?php echo $edit_id; ?>"  >


								  <div class="form-group">
											<label for="title">  Название книги : </label>
											<input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" required>
								  </div>
								  
								  <div class="form-group">
											<label for="cover"> Обаложка книги: </label>
											
									<input type="file" class="form-control" id=" " name="cover"> 
									<img src="assets/posted_images/<?php echo $cover; ?>" height="100">
								  </div> 
								  
								  <div class="form-group">
											<label for="cover">  книгa: </label>
									<input type="file" class="form-control" id=" " name="book">
									<a href="assets/posted_images/<?php echo $book; ?>"><?php echo $book; ?></a>
								  </div> 
								  
								   <div class="form-group">
											<label for="title">  Автор книги : </label>
											<input type="text" class="form-control" id="title" name="author" value="<?php echo $author; ?>" required>
								  </div>
								   
								  
								 <div class="form-group">
									  <label for="content">Краткое описание книги :</label>
									  <textarea class="form-control" rows="8"  name="descpt" ><?php echo $descpt; ?></textarea>
								  </div>
					<?php }} ?>			   
								
							<button type="submit"  name="update" class="btn btn-primary pull-right">Изменить</button>
							</form>
						</div>  <!------ENd Form Aera ----------->
</div>
    
     
      <div class="col-lg-1 col-md-1 col-sm-12"></div>

              
    </div>
          
</div>
</div>

</div>

 




  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>

  

</body>

</html>
