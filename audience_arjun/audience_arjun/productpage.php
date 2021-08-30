     
     <!DOCTYPE html>
     <!--
     To change this license header, choose License Headers in Project Properties.
     To change this template file, choose Tools | Templates
     and open the template in the editor.
     -->           
     <html>
     <head>
          <title>Contacts List</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
          <script type="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
         <!-- <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
          <script type="text/javascript" src="jquery-ui.min.js"></script>-->
     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/Crud_op/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
      <style>
      ul{
          background-color: #eee;
          cursor: pointer;
     }
     li{
          padding: 12px;
     }
     h1{
          text-align: center;
     }
     div{
          margin-top: 10px;
     }
     #new{
          text-align: center;

     }
     #center{


          padding-left: 350px;
     }
     #col1{
          float: left;
          padding-left: 150px;
     }
     #col{
          float: right;
     }
     #list1{
          text-align: center;
          padding-right:200px ;
     }
     #tab{
          padding-left: 400px;
     }
     body{
          font-family: sans-serif;
          padding: 14px 16px;
     }
     }
     .container{
          margin: auto;
          justify-content: center;
     }
     #datatableid{
          padding: 14px 16px;
     }
     #setimage{
         padding-bottom: 50px;
         margin-bottom: 20px;
         text-align: center;
         color: #f8f8f8;
         background-image: url(images.jpg);
         background-size: cover;
     }
     #list{
          text-align: center;
          color: black;
          border: darkred;
     }
     .topnav a {
       float: left;
       color: #f2f2f2;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 17px;
     }

     .topnav a:hover {
       background-color: #ddd;
       color: black;
     }

     .topnav a.active {
         background-color: darkred;
         color: white;
     }
     .topnav {
       overflow: hidden;
       background-color: #333;
     }
     #searching{
          padding-left: 780px;
     }
     #but{
         text-align: center; 

     }
     #pages{
          padding-left: 700px;
          padding-right:700px;
     }
     </style>
     </head> 
     <!--<body style="background-image:url(images/medical.jpg);width:100%;height: 900px;">-->
          <body id="">

       <!--  <div class="header">
           <h4><p>Arjun Dixit , 2021</p></h4>
      </div>
      <h2 id="list1">List of products</h2>
      <section>
           <div class="container">
               <div class="row">
                    <div id="tab">  
                      <a href="add.php"><button class="btn btn-danger" id="product1" type="submit" class="form-control">Add Product
                      </button></a>
                  <!-- <table class="table table-xs" id="new">
                   <thead>
                        <tr>
                             <th scope="col" id="col1
                                  <a href="add.php"><button class="btn btn-danger" id="product1" type="submit" class="form-control">Add Product">
                                  <h4 id="list">List of products</h4></button></a>
                             </th>
                        </thead>
                        <tbody>
                        </table>-->
                  <!-- </div>
              </div>
         </div>-->
         <form action="mulcode.php" method="POST">
              <div class="topnav">
                 <a><img src="images/logo.png" style="width:50px"></a>
                 <a href="#about" class="active">About</a>
                 <a href="#contact">Contact</a>
                 <a href="add.php">Add Contacts</a>
            </div>
            <!--</section>-->
            <br>
            <br>
            <h2 id="list">List of Contacts</h2>
           <?php
           include 'conn.php';
           $num_rows = "SELECT count(*) AS count FROM Products1";
           $num_row = mysqli_query($dbh,$num_rows);
           while($row=mysqli_fetch_assoc($num_row))
           {
               $output="Number Of Rows"."=".$row['count'];
               echo $output; 
           }
           ?> 
          
       <!--<div>
            <input type="text" id="product" name="product" class="form-control" placeholder="Search for names.." title="Type in a name">
            <div id="productlist"></div>
       </div>-->
     <br>
     <br>
     <form action="mulcode.php" method="POST">
          <table class="table table-xs" id="data_table_id" border="1">
           <thead class="thead-dark">
                <tr>
                    <th ><button type="submit" class="btn btn-danger" name="del_multiple_data">Drop</button></th>
                    <th scope="col">Id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                     <th scope="col">Address</th>
                    
                    
                    <th scope="col">Update Action</th>
                    <th scope="col">Delete Action</th>
               </tr>
          </thead>
          <tbody>
                    <?php
           include 'conn.php';
         $select="select * from products1";
        $query=mysqli_query($dbh,$select);
        while($row = mysqli_fetch_array($query)){
          // for($product_count = 0 ; $product_count < $total_product ;
          // $product_count++ ){
        
           
           ?>
           <tr>
              <th>
                  <input type="checkbox" name="del_chk[]" value="<?php echo $row['id']; ?>">
              </th>
              <td><?php echo $row['id']; ?></td> 
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['address']; ?></td>
              
              <td><a href="updatecode.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" name="update" type="submit">Update</a></td>
              <td><a href="deletecode.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" name="delete" type="submit">Delete</a></td>
          </tr>
      <?php } ?>
          </tbody>
     </table>
        </form>
     </form>
     </div>
     <br>
     <br>
     <br>
     <br>
     <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
          <script type="text/javascript">
           $(document).ready(function() {
              $( "#autocomplete" ).autocomplete({
                source: function( request, response ) {
                  $.ajax( {
                    url: 'search.php',
                    type:'POST',
                    dataType: 'json',
                    data: {
                      search: request.term
                 },
                 success: function( data ) {
                      response( data );            
                 }
            });
             },
             select:function(event,ui){
               $('#autocomplete').val(ui.item.label);
               return false;
          }
     });
         });
     </script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function() {
         $('#data_table_id').DataTable();
         } );
     </script>
     </body>
     </html>
