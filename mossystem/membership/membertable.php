<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="membertable.css">
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="../jquery/dataTables.bootstrap.min.css">
    <link rel="stylesheet"  href="../jquery/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../jquery/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../jquery/dataTables.bootstrap.css">-->
   
   
    

    
    
    
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="contentable table table-bordered table-hover" id="contable">
          <thead>
                <tr>
                    <th>MEMBER ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    <th>PROFILE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'memberdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
    <script src="../jquery/jquery/dataTables.bootstrap.min.js"></script>
   <!-- <script src="../jquery/jquery/buttons.html5.js"></script>
    <script src="../jquery/jquery/buttons.dataTables.js"></script>
    <script src="../jquery/jquery/jszip.js"></script>
    <script src="../jquery/jquery/buttons.bootstrap.js"></script>
    <script src="../jquery/jquery/pdfmake.js"></script>
    <script src="../jquery/jquery/buttons.colVis.js"></script>-->
    
</body>
<script src="membertable.js"></script>

</html>