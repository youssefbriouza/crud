
<form action="#" method="POST">
<input name="login" type="text" placeholder="login">
<br>
<input name="password" type="password" placeholder="password">
<br>
<input name="submit" type="submit">
</form>
<?php

if( isset($_POST['login']) && isset($_POST['password'])){
  $login = $_POST['login'];
  $password =$_POST['password'] ;
  if($login==="admin" && $password==="Pass1234"){
    echo "hello admin" ;


  //  session_start();
  //  $data = "secret=validAdmin";
  //  $path = "../reclamations/views/afficherreclamation.php?secret=validAdmin";
  //  header("method : POST");
  //  header($data);

   header('Location: ../reclamations/views/afficherreclamation.php?secret=validAdmin');
  }else {
    echo "incorrect password ! " ;
  }
}
 ?>
