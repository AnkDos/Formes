<?php

session_start();
ob_start();
require_once 'dbconnect.php';


if(!isset($_SESSION['ID']))
{
    header("Location: index.php");
}

$q=mysql_query("Select * from users where id=".$_SESSION['ID']);
$fet=mysql_fetch_array($q);
//$qr=mysql_query("Select type from users where id=".$_SESSION['ID']);
$ty=$fet['type'];
$qrr=mysql_query("Select * from sch where type='$ty'");


$fetc=mysql_fetch_array($qrr);
if(isset($_GET['lg']))
{
    session_destroy();
    header("Location: index.php");
}




 
if(isset($_POST['btn']))
{
   $any=[];
$i=0;
$counten=0;
$countme=0;
$countec=0;
$a=$_POST['first'];
$b=$_POST['second'];
$c=$_POST['third'];
$d=$_POST['fourth'];
$e=$_POST['fifth'];
$f=$_POST['sixth'];
$g=$_POST['seventh'];
$h=$_POST['eight'];
array_push($any,$a,$b,$c,$d,$e,$f,$g,$h);
while ($i<8){
    if($any[$i]=="En")
    {
        $counten++;
    }
    
    if($any[$i]=="Ec")
    {
        $countec++;
    }
    if($any[$i]=="Me")
    {
        $countme++;
    }
$i++;
}
$c=$counten*12.5;
$_SESSION['enp']=$c;
$_SESSION['ecp']=$countec*12.5;
$_SESSION['mep']=$countme*12.5;
$msg1="Your ENDOMORPH % is ".$_SESSION['enp']." <br>";
$msg2="Your ECTOMORPH % is ". $_SESSION['ecp']." <br>";
$msg3="Your MESOMORPH % is ".$_SESSION['mep']." <br>";

if($_SESSION['enp']>$_SESSION['ecp'] && $_SESSION['enp']>$_SESSION['mep'])
{
    $_SESSION['type']="ENDOMORPH";
    $msg4="YOUR DOMINANT TYPE IS  ".$_SESSION['type']; 
}

if($_SESSION['ecp']>$_SESSION['enp'] && $_SESSION['ecp']>$_SESSION['mep'])
{
    $_SESSION['type']="ECTOMORPH";
    $msg4="YOUR DOMINANT TYPE IS ". $_SESSION['type']; 
}


if($_SESSION['mep']>$_SESSION['ecp'] && $_SESSION['mep']>$_SESSION['enp'])
{
    $_SESSION['type']="MESOMORPH";
    $msg4="YOUR DOMINANT TYPE IS " .$_SESSION['type']; 
}

}
if(isset($_POST['btn1']))
{
    $type=$_SESSION['type'];
    $iid=$_SESSION['ID'];
 
    $qry=mysql_query("Update users set type='$type' where id=$iid");
echo "YOUR INPUT SUBMITTED SUCESSFULY NOW YOU CAN SEE YOUR PLANS<br>";
}


?>

<script type="text/javascript">
             function An(t) 
             {
                var y=document.getElementById("txt");
                y.value = t.value;
               }
              function Ank(t) 
             {
                var a=document.getElementById("txt1");
                a.value = t.value;
               }
              function Anku(t) 
             {
                var b=document.getElementById("txt2");
                b.value = t.value;
               
              }
              function Ankur(t) 
             {
                var c=document.getElementById("txt3");
                c.value = t.value;
              }
              
              
              
              function Ankura(t) 
             {
                var y=document.getElementById("txt4");
                y.value = t.value;
               }
              function Ankuraa(t) 
             {
                var a=document.getElementById("txt5");
                a.value = t.value;
               }
              function Ankuraaa(t) 
             {
                var b=document.getElementById("txt6");
                b.value = t.value;
               
              }
              function Ankuraaaa(t) 
             {
                var c=document.getElementById("txt7");
                c.value = t.value;
              }
              
              
              
              
        </script>
        <?php 
        if(isset($_GET['w'])){
            ?>
       <Center> <h2> WELCOME <?php echo $fet['username'];?> </h2>
       <h3> Your Body Type is: <?php if($fet['type']!="NULL") { echo $fet['type'];} else{echo "NO SURVEYS DONE";}  ?> </h3>
       <h3> Your BMI: <?php if($fet['height']!="NULL" && $fet['weight']!="NULL") { echo $fet['weight']/$fet['height']*$fet['height'];} else{echo "NO SURVEYS DONE";}  ?> </h3>
<?
        }
?>
<?php
if(isset($_GET['ss']))
{
?>
<h3>QUESTIONS FOR BODY TYPE EVALUATION<br></h3>

Shoulders are?<br>
<form method="post">
     <select  id="cmb" data-role="slider" onChange="An(this);" >
                         <option value="Select">Select</option>
                          <option value="En">Same As Hip</option>
                          <option value="Me">Wider Than Hip</option>
                          <option value="Ec">Narrow Than Hip</option>
                          
    </select> 
    <input type="text" name="first" id="txt" hidden></input>
<br>A pair of relaxed fit jeans with correct waist size fits me ?


 <select  id="cmb" data-role="slider" onChange="Ank(this);" >
     <option value="Select">Select</option>
                          <option value="En">Tight Around My guses</option>
                          <option value="Me">Perfect around gluss</option>
                          <option value="Ec">Lose around guss</option>
                          
    </select>
    
<input type="text" name="second" id="txt1" hidden></input>
<br>Body locks?   

<select  id="cmb" data-role="slider" onChange="Anku(this);" >
                          <option value="Select">Select</option>
                          <option value="En">Round and soft</option>
                          <option value="Me">Square and Ruged</option>
                          <option value="Ec">large</option>
            
    </select>

 
<input type="text" name="third" id="txt2" hidden></input>

<br>If I excercise my wris daz?    
<select  id="cmb" data-role="slider" onChange="Ankur(this);" >
    <option value="Select">Select</option>
                          <option value="En">X</option>
                          <option value="Me">Y</option>
                          <option value="Ec">Z</option>
            
    </select>
<input type="text" name="fourth" id="txt3" hidden> </input>







<br>q5?

     <select  id="cmb" data-role="slider" onChange="Ankura(this);" >
                         <option value="Select">Select</option>
                          <option value="En">A</option>
                          <option value="Me">B</option>
                          <option value="Ec">C</option>
                            </select> 
    <input type="text" name="fifth" id="txt4" hidden></input>
<br>What is your biceps?


 <select  id="cmb" data-role="slider" onChange="Ankuraa(this);" >
     <option value="Select">Select</option>
                          <option value="En">A</option>
                          <option value="Me">B</option>
                          <option value="Ec">C</option>
                           </select>
    
<input type="text" name="sixth" id="txt5" hidden></input>
<br>What is your wrist?   

<select  id="cmb" data-role="slider" onChange="Ankuraaa(this);" >
                          <option value="Select">Select</option>
                          <option value="En">A</option>
                          <option value="Me">B</option>
                          <option value="Ec">C</option>
                          
    </select>

 
<input type="text" name="seventh" id="txt6" hidden></input>

<br>What is your fist?    
<select  id="cmb" data-role="slider" onChange="Ankuraaaa(this);" >
    <option value="Select">Select</option>
                          <option value="En">A</option>
                          <option value="Me">B</option>
                          <option value="Ec">C</option>
                          
    </select>
<input type="text" name="eight" id="txt7" hidden> </input>










<br>

<button type='submit' name='btn'>
Genereate Result</button>


<button type='submit' name='btn1'>
Submit Result</button>
</form>



<?php 

echo $msg1."<br>"; 
echo $msg2."<br>";
echo $msg3."<br>";
echo $msg4."<br>";

//   print_r($any);
     ?>



<?
}
?>



<br>
<a href="?w">Profile</a>
<br>
<br>

<a href="?ss">Start Survey</a>
<br>

<br>
<a href="?wr">Show Workout Routine</a>
<br>


<?php
if(isset($_GET['wr'])){
   //echo $fetc['workout'];

?>
<img src="img/<?php echo $fetc['workout'];?>" height="230px" widht="230px">

<?
}
?>

<br>
<a href="?su">Show Recommended Supplements</a>
<br>

<br>
<a href="?dp">Show Recommended Diet Plans</a>
<br>
<a href="?lg">Logout</a>
