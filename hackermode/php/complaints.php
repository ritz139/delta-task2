<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $servername="db";
  $usernam="root";
  $password="my_secret_pw_shh";
  $database="complaints";
$link=mysqli_connect($servername,$usernam,$password,$database);
if($link==false)
{echo "CONNection failed".mysqli_error($link);}
else {
  echo "connected successfully to database ";
}
$name=$_POST['username'];
$complaint=$_POST['complaint'];

$sql="INSERT into q VALUES(NULL,'$name','$complaint',now())";
if(mysqli_query($link,$sql))
{echo " QUERRY SUBMITTED SUCCESSFULLY";}
else{
  echo " ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);}
?>
<html>
    <body>

        <form action="<?php $_PHP_SELF ?> " method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter Complaint: <input type="text" name="complaint" required="required" /> <br/>
           <input type="submit" value="submit"/>
                </form>
    </body>
</html>
