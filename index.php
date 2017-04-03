<?php
session_start();
ob_start();

require_once 'dbconnect.php';


if(isset($_POST['btn']))
{
    
    $email=trim($_POST['mail']);
     $key=strip_tags(trim($_POST['key']));
     //$password = hash('sha256', $key);
    // echo $password;
     $do=mysql_query("select id,password from users where email='$email'");
     $do1= mysql_fetch_array($do);
    // $em=$do1['email'];
     
     
     if($do1['password']== $key){
         
         $_SESSION['ID']=$do1['id'];
         header("Location: home.php?w");
     }
     
     else{
         echo "wrong email or password";
     }
     
      if ( !$do1 ) {
  die("Connection failed : " . mysql_error());
 }
    
}

if(isset($_POST['btn1']))
{
    
    $name=trim($_POST['name']);
   $email=($_POST['email']);
    $key=strip_tags(trim($_POST['keys']));
    
    
    $do=mysql_query("select * from users where email='$email'");
    $count=mysql_num_rows($do);
    
    if($count=='0'){
        
      //  $password=hash('sha256',$key);
        
        $do1=mysql_query("insert into users (username,id,password,email) Values ('$name','','$key','$email')");
    }
    
    
    if ( !$do1 ) {
  die("Connection failed : " . mysql_error());
 }
    
    
}





?>



<html>
    <body>
        Login!
   <br>
        <form method='post'>
           Email <input type='email' name='mail'></input>
       Password <input type='password' name='key'></input>
        <button type='submit' name='btn'>Login</button>
   </form>
   
   
   <br>
   Sign up!
   <br>
        <form method='post'>
            Name <input type='text' name='name'></input><br>
            Email <input type='email' name='email'></input><br>
            
          
            Chose password <input type='password' name='keys'></input><br>
            <button type='submit' name='btn1'>Sign Up</button> </form>
   
    </body>