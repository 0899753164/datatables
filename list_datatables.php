<?php
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "djangodb"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

     $query ="SELECT * FROM auth_permission ORDER BY id ASC";  
 $result = mysqli_query($con, $query); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Datatables</title>
    <!-- for Previus, next button under tabale -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />        

</head>
<body>
<div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered hover order-column">  
                          <thead>  
                               <tr> 
                                    <td>id</td> 
                                    <td>name</td>  
                                    <td>codename</td>  
                               </tr>  
                          </thead>
                          <tbody>
                            <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["codename"].'</td>   
                               </tr>  
                               ';  
                          }  
                          ?>  
                              
                          </tbody>
                          
                     </table>  
                </div>  
           </div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- for Previus, next button under tabale and collap with jquery.dataTables.min.css -->
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

   <!-- For button Copy CSV PDF Print -->
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script> 
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.js"></script>



 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );  
 });  
 </script>
</body>
</html>
