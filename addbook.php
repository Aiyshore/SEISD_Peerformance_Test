<!doctype html>
<html lang="en">
  <head>
    <title>Perfoemace</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <ul class="nav">
      <!--tips: to change the .nav alignment use .justify-content-center,.justify-content-end or use .flex-column to vertical alignment-->
      <li class="nav-item">
          <a class="nav-link active" href="reg.php">Registration</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="addbook.php">Add Book</a>
      </li>
     
  </ul>    



 
  <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">Delete Book Information</p></div>
    <form action="" method="post">
    
                <input class="form-control mr-sm-2" type="text" name="isbn" placeholder="Enter ISBN NUmber">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="delete" >Delete Book</button>
    </form>
    <form action="" method="post">
                                <div class="container box pb-3">
                                    <div class=" d-flex justify-content-center"><p class="pt-5 font-weight-bolder userfont">ADD BOOK</p>
                                    </div>
                                    <div class="my-2 boxinfo ">
                                        <input type="text"  placeholder="Enter Your Book Name" name="bookName" id="userName" autocomplete="off">
                                        <span id="userNameMess" class="text-danger"></span>
                                    </div>
                                    <div class="my-2 boxinfo ">
                                        <input type="text"  placeholder="Enter Publisher name" name="pbname"  >
                                        <span id="userEmailMess" class="text-danger"></span>
                                    </div>
        
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Author Name" name="pbdate" >
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Subject Name" name="sub" >
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class="my-2 boxinfo" >
                                        <input type="text" placeholder="Enter editin" name="edition" id="" >
                                        <span id="userpassMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Enter ISBN number" name="isbn">
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    <div class=" my-2 boxinfo">
                                        <input type="text"  placeholder="Enter Number of copieees" name="ncopy">
                                        <span id="userNumMess" class="text-danger"></span>
                                    </div>
                                    
                                    <div class="my-2 d-flex" >
                                        <input type="submit" class="btn btn-sm btn-outline-danger btnSin px-5 font-weight-bolder mt-3" value="ADD book" name="add" required>
                                    </div>
                                    
                                </div>
                            </form>

<?php
$databaseHost='localhost';
$databaseName='test';
$databaseUsername='root';
$databasePassword='';
$cont=mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
if(!$cont){
	die("Connection failed: ".mysqli_connect_error());
}
else{
 echo"Connected Successfully";
}


          if(isset($_POST['delete'])){
            $on1=$_POST['isbn'];
            $query1 = "DELETE FROM t_book WHERE isbn='$on1'";
            $data=mysqli_query($cont,$query1);
            if($data == TRUE)
            {
                echo "<script>alert('Data Deleted successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($cont);}
            
        
        }
            
        

if(isset($_POST['add'])){
	$name=$_POST['bookName'];
	$pbname=$_POST['pbname'];
    $pbdate=$_POST['pbdate'];
    $sub=$_POST['sub'];
    $edition=$_POST['edition'];
    $isbn=$_POST['isbn'];
    $ncopy=$_POST['ncopy'];
    
	if($name=="" || $pbname=="" || $pbdate=="" || $edition==""  || $isbn==""  || $ncopy=="" || $sub==""  ){
		echo "All fields should be filled.Either one or many fields are empty.";
		}
else{
	$inst="INSERT INTO t_book(name,pbname,pbdate,sub,edition,isbn,ncopy) VALUES('$name','$pbname','$pbdate','$sub','$edition','$isbn','$ncopy')"; 
	$data=mysqli_query($cont,$inst);
	if($data == TRUE)
            {
                echo "<script>alert('Data updated successfully..!');window.location='';</script>";   
            }
	else{echo mysqli_error($cont);}
}
}
?>

 







  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>