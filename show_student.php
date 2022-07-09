<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    
  if(isset($_GET['e'])){
    if(isset($_GET['e'])==23000) {
      print('<div class="alert alert-danger" role="alert">
      User Already Exists!
    </div>');
   
    }
    else{
      print('<div class="alert alert-danger" role="alert">
      Login Failed!
    </div>');
    }
  }
 
 
?>
    <form method="post" action="signup.php">
        <label for="uname">User Name</label>
        <input type="text" name="usrname" id="uname">
        <br>
        <label for="pass">Password</label>
        <input type="text" name="passwrd" id="pass">
        <br> <button type="submit">Submit</button>
    </form>
    <?php
// require_once 'database.php';
// $data=new Database("root","","bscs");
// $cursor=$data->showalldata();

?>
    <!-- <table>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Phone No</th>
            <th>CGPA</th>
        </tr>

        <?php
    
    while($row=$cursor->fetch()){
        print("<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        </tr>");
    }
    ?>

    </table> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</body>

</html>