<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost:8889";
  $user = "root";
  $pass = "root";

  $databaseName = "timeline_db";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con = mysqli_connect($host,$user,$pass);
  $dbs = mysqli_select_db($con, $databaseName);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
 $a = mysqli_query($con, "SELECT * FROM run_details");

          //query
 
if($a === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
}


$data = array();
while ( $row = mysqli_fetch_row($a) )
{
  $data[] = $row;
}
echo json_encode( $data );

?>

