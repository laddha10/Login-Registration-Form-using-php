
<?php

$id=$pass=$nameee="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    require("connect.php");
    $userid = $_POST["id"];
    $passwordlogin = $_POST["password"];
    $sql = "SELECT * FROM login WHERE user_id ='$userid' AND pass_word='$passwordlogin' ";
     $result = mysqli_query($conn, $sql);
    $row =mysqli_fetch_row($result);
  if($row){
      $_SESSION["userid"] = $userid;
      require ("final2.php");
  }
  else{
      echo"Please enter  correct data";
    }

}else{
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="login.css" rel="stylesheet">

    <title>Login Page</title>
</head>
<body>
<div id="back"><img src="black-wallpaper-preview-10.jpg"></div>
<div id="login">
    <h1>Login</h1>
    <form method="post" action="login.php">
        <div class="account-info">
            <label>
                UserId
                <input type="text" name="id" >
                <span class="error">* <?php echo $id;?></span>
            </label>
            <br>
            <label>
                Password
                <input type="password" name="password" >
                <span class="error">* <?php echo $pass;?></span>
            </label>
        </div>
        <div id="bt">
            <button  type="submit">LOGIN</button>
            <button type="submit" formaction="regis.php"> SIGN UP</button>
    </form>
</div>
<?php } ?>
</body>

</html>