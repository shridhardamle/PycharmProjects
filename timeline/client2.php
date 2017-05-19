<html>
  <head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
  </head>
  <body>

 
  <h2> Client example </h2>
  <h3>Output: </h3>
  <p id="output"></p>

  <script id="source" language="javascript" type="text/javascript">

  $(function () 
  {
   
    $.ajax({                                      
      url: 'api2.php',                          
      data: "",                       
                                       
      dataType: 'json',                     
      success: function(rows)          
{
for (var i in rows)
      {
var row=rows[i];
                  
var userid=row[0];
var latitude=row[1];
var longitude=row[2];
var event_time=row[3];


        $('#output').append(" event_time is: "+ event_time); //Set output element html
        $('#output').append(" latitude is: "+ latitude);
        $('#output').append(" longitude is: "+ longitude); //Set output element html
        $('#output').append(" userid is: "+ userid);
	        
       

      } 
}
    });
  }); 

  </script>
  </body>
</html>


