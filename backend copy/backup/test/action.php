
<?php
//action.php
if(isset($_POST["action"]))
{
 $dbc = mysqli_connect("ftp.u0470792.cp.regruhosting.ru", "u0470792_bcAdmin", "=V6F+?X1Pj)0", "u0470792_baby_center");
 mysqli_set_charset($dbc, "utf8"); 


 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tbl_images ORDER BY id DESC";
  $result = mysqli_query($dbc, $query);
  $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["id"].'</td>
     <td>
      <img src="'.$row["name"]." height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["id"].'">Change</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
    $cover = $_FILES['cover']['name'];
    $cover_tmp_name = $_FILES['image']['tmp_name']; 
 
  $query = "INSERT INTO tbl_images(name) VALUES ('$cover')";
  if(mysqli_query($dbc, $query))
  {
   echo 'Image Inserted into Database';
  }
 }
 if($_POST["action"] == "update")
 { 
      
    $cover = $_FILES['cover']['name'];
    $cover_tmp_name = $_FILES['image']['tmp_name']; 
  $query = "UPDATE tbl_images SET name = '$cover' WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($dbc, $query))
  {
   echo 'Image Updated into Database';
  }
 }
 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM tbl_images WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($dbc, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>
