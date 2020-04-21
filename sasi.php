<?php
$db=mysqli_connect("localhost","root","","storie");
if(isset($_POST['query']))
{
  
    $search=$_POST['query'];
   // echo $_POST['query'];
   $query = "
	SELECT * FROM p 
	WHERE na LIKE '%".$search."%'
	LIMIT 20 "; 
     $results=mysqli_query($db,$query);
     $rows = array();
     while ($row = mysqli_fetch_assoc($results)) { 
         array_push($rows,$row);
            }

  

echo json_encode($rows);
}
?>