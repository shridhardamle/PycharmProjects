<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost:8889";
  $user = "root";
  $pass = "root";

  $databaseName = "timeline_db";
  $runid = $_POST['runid'];

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con = mysqli_connect($host,$user,$pass);
  $dbs = mysqli_select_db($con, $databaseName);
    
    file_put_contents('php://stderr', print_r($runid, TRUE));

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
 $a = mysqli_query($con, "SELECT * FROM runs WHERE runid = $runid");

          //query
 
if($a === FALSE) { 
    die(mysqli_error($con)); // TODO: better error handling
}


$data = array();
while ( $row = mysqli_fetch_row($a) )
{
  $data[] = $row;
}
echo json_encode( $data );

?>

