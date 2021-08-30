

<!doctype html>
  <html lang="en">
  <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <title>CRUD Operation</title>
   <style type="text/css">
   #backadd{
    padding-left: 100px;
    padding-bottom: 9000px;
  }
</style>
</head>
<body>
  <div class="container">
    <form action="insertcode.php" method="POST">
      <label for="2">FirsName</label>
      <input type="text" name="fname"  id="2" class="form-control">
      <br>
      <br>
      <label for="3">LastName</label>
      <input type="text" name="lname"  id="3"  class="form-control">
      <br>
      <br>
      <label for="4">Email</label>
      <input type="text" name="email"  id="3"  class="form-control">
           
      <br>
      <br>
      <label for="3">PhoneNumber</label>
      <input type="text" name="phone"  id="3"  class="form-control">
        <br>
      <br>
      <label for="3">Address</label>
      <input type="text" name="address"  id="3"  class="form-control">
           <br>
          <table>
            <tr>
              <td><button type="submit" class="btn btn-danger"  class="form-control" name="done">Add</button></td>
            </form>
            <br>
            <br>
            <form action="productpage.php">
              <td><a href="productpage.php"><button class="btn btn-danger" id="backadd1"  class="form-control">Back
              </button></a></td>
            </tr>
          </table>

        </form>
        <br>
        <br>
        <div id="backadd">
          
        </div>
      </div>
    </body>
    </html>

