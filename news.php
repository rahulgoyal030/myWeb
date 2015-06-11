<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="news.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

 <!--<script src="arrow2.js"></script>  -->
</head>
<body >

 
<div class="container">

<form  class="form" method="post" action="post.php">
<textarea name="textArea"  id="messsge" rows="6" cols="80" placeholder="enter your query  upto 1000 words" ></textarea>
<br>
<button type="submit" id="button" width="100px">post</button>
</form>

<div id="new" > </div>



</div>
<script src="forum.js"></script>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//echo "<script>alert('Invalid Credentials!')</script>";

$sql = "SELECT * FROM `news` ORDER BY  id DESC";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        // echo "id: " . $row["name"]. " - Name: " . $row["password"]. "   welcome to the database " ;
         $id=$row["id"];
         $name=$row["name"];
         $post=$row["post"];
         $date=$row["date"];
       //  $className="postPosition";
        // echo '<p class="$className">'. $id  .'<p>';
         echo '<div class="postPlace">'.'<p class="namePosition">'.$name.'</p>'.'<p class="postPosition">'.$post.'</p>'.'</div>';
         
    }
} 
else 
{
    echo "0 results";
}

mysqli_close($conn);

?>
<link rel="stylesheet" type="text/css" href="css/news1.css">
</body>
</html>
