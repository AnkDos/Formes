<?php

$meso=array(1,2,3,4);
$endo=array(2,1,3,4);
$enco=array(3,1,2,4);
 $any=[];

if(isset($_GET['btn']))
{
   
$a=$_GET['first'];
$b=$_GET['second'];
$c=$_GET['third'];
$d=$_GET['fourth'];
array_push($any,$a,$b,$c,$d);
if($any==$meso)
{
    $msg="YOU ARE MESO";
    $type="meso";
}

if($any==$endo)
{
    $msg="YOU ARE ENDO";
    $type="endo";
}


if($any==$enco)
{
    $msg="YOU ARE ECO";
    $type="enco";
}



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
              
              
              
        </script>



What is your height?<br>
<form method="get">
     <select  id="cmb" data-role="slider" onChange="An(this);" >
                         <option value="Select">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
    </select> 
    <input type="text" name="first" id="txt" hidden></input>
<br>What is your biceps?


 <select  id="cmb" data-role="slider" onChange="Ank(this);" >
     <option value="Select">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
    </select>
    
<input type="text" name="second" id="txt1" hidden></input>
<br>What is your wrist?   

<select  id="cmb" data-role="slider" onChange="Anku(this);" >
                          <option value="Select">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
    </select>

 
<input type="text" name="third" id="txt2" hidden></input>

<br>What is your fist?    
<select  id="cmb" data-role="slider" onChange="Ankur(this);" >
    <option value="Select">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
    </select>
<input type="text" name="fourth" id="txt3" hidden> </input>
<button type='submit' name='btn'>
Submit</button>
</form>

<?php 

echo $msg." TYPE: ".$type ; 
 //  print_r($any);
     ?>
