<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/material.min.css">
<link rel="stylesheet" href="assets/css/css.css">
 
<script src="assets/js/material.min.js"></script>

 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<!-- Square card -->
<style>
.demo-card-square.mdl-card {
  /*width: 320px;*/

  margin: 0 !important;
  width: 100%;

   
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background: #46B6AC;
    height: 100px;
}
</style>

</head>
<body class="container">

<div class="row">





 
 <div class="demo-card-square mdl-card mdl-shadow--2dp">
 
  <div class="mdl-card__title mdl-card--expand">











    <h5>
 
<!-- Left aligned menu below button -->
<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Some Action</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
 
   <li class="mdl-menu__item">Yet Another Action</li>
</ul>


Post Utme Calculator





    </h5>
 
  </div>
  <div class="mdl-card__supporting-text">
    
 



<div class="well fade in" id="results" style="display:none">
     
    
  </div>








<form action="#">
    
<b>Scores</b>


<div class="clearfix"></div>


 
<!-- Numeric Textfield with Floating Label -->
 

<div class="col-xs-6">
  

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class=" mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="JambScore">
    <label class="mdl-textfield__label" >Jamb...</label>
    <span class="mdl-textfield__error">Jamb score must be a number!</span>
  </div>


</div>





<!-- Numeric Textfield with Floating Label -->
 <div class="col-xs-6">
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="postUtme">
    <label class="mdl-textfield__label" >
Post-Utme...</label>
    <span class="mdl-textfield__error">Jamb score must be a number!</span>
  </div>
 

 </div>

 
 

 
<div class="col-xs-12"><b>Core subjects scores</b></div>

 


 <div class="col-xs-6">


<div class="form-group">
   <select class="form-control" id="grade1" required>
        <option disabled selected>Grade 1</option>

    <option value="6">A1</option>
            <option value="5">B2</option>
           <option value="4">B3</option>
            <option value="3">C4</option>
           <option value="2">C5</option>
            <option value="1">C6</option>
           
  </select>
</div>



   
 </div>

 




 

 <div class="col-xs-6">


<div class="form-group">
   <select class="form-control" id="grade2" required>
        <option disabled selected>Grade 2</option>

    <option value="6">A1</option>
            <option value="5">B2</option>
           <option value="4">B3</option>
            <option value="3">C4</option>
           <option value="2">C5</option>
            <option value="1">C6</option>
           
  </select>
</div>



   
 </div>




 <div class="col-xs-6">


<div class="form-group">
   <select class="form-control" id="grade3" required>
        <option disabled selected>Grade 3</option>

    <option value="6">A1</option>
            <option value="5">B2</option>
           <option value="4">B3</option>
            <option value="3">C4</option>
           <option value="2">C5</option>
            <option value="1">C6</option>
           
  </select>
</div>



   
 </div>





 <div class="col-xs-6">


<div class="form-group">
   <select class="form-control" id="grade4" required>
        <option disabled selected>Grade 4</option>

    <option value="6">A1</option>
            <option value="5">B2</option>
           <option value="4">B3</option>
            <option value="3">C4</option>
           <option value="2">C5</option>
            <option value="1">C6</option>
           
  </select>
</div>



   
 </div>





 <div class="col-xs-12">


<div class="form-group">
   <select class="form-control" id="grade5" required>
        <option disabled selected>Grade 5</option>

    <option value="6">A1</option>
            <option value="5">B2</option>
           <option value="4">B3</option>
            <option value="3">C4</option>
           <option value="2">C5</option>
            <option value="1">C6</option>
           
  </select>
</div>



   
 </div>



 

   
 

 




<div class="clearfix"></div>
 

 
<!-- action here -->



<!-- Colored raised button -->
 
<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored moreshadow" onclick=" calculateScore(); ">
Calculate
</button>

 

 

<!-- End action -->
 
 <!-- Colored mini FAB button -->
<button type="reset" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored pull-right moreshadow" onclick="ResetScore();">
  <i class="material-icons">delete</i>
</button>

 


</form>




 <div class="well">

  <div>
   <i class="material-icons">visibility</i>
<?php

/* counter */
$counter_file="countlog.txt";

if(file_exists($counter_file)){
 
// read the number of hits
 $count =  intval(file_get_contents($counter_file));
 $count=$count + 1 ;

}

else

{
  $count= 2;
}

echo "<b>$count</b> hits";

// opens countlog.txt to change new hit number
$datei = fopen($counter_file,"w");
fwrite($datei, $count);
fclose($datei);

?>


<div class="pull-right">

<a href="http://facebook.com/orion.aderinkomi">Contact Us</a>

<br>
Powered by <b><a href="http://facebook.com/PunchlineTech">Punchline Technologies</a></b>

</div>
  

</div>







 

  </div>

 
</div>
 

 
  </div>



<script src="assets/js/jquery.min.js"></script> 


<script src="assets/js/jquery.nicescroll.js"></script> 




<script>

  

(function() {
    "use strict";

    // custom scrollbar

    $("html").niceScroll({styler:"fb",cursorcolor:"rgb(255, 64, 129)", cursorwidth: '6', cursorborderradius: '10px', background: '#424f63', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});
     $(".scrollbar1").niceScroll({styler:"fb",cursorcolor:"rgba(97, 100, 193, 0.78)", cursorwidth: '6', cursorborderradius: '0',autohidemode: 'false', background: '#F1F1F1', spacebarenabled:false, cursorborder: '0'});

  
  
    $(".scrollbar1").getNiceScroll();
    if ($('body').hasClass('scrollbar1-collapsed')) {
        $(".scrollbar1").getNiceScroll().hide();
    }

})(jQuery);

         



// Calculation for jamb score 

function jamb_score(){
 
 var score = fixInt($("#JambScore").val());
 
 
//you cant score up to 350 are you a wizard
if (score>350){

alert("Please type in your real Jamb score!");

return 0;

}
else
{

 return score / 8;
 
}

}


 
 // Calculation for Post-Utme 


function postUtme_score(){

 var score = fixInt($("#postUtme").val());
 
//you cant score up to 90 are you a wizard
if (score>90){

alert("Please type in your real Post score!");

return 0;

}
else
{

 return score * 0.3;
 
}

}


 
function fixInt(intX){
  
   intX=parseFloat(intX);
 
if (isNaN(intX))  
{

  return 0;
}

else{

return intX;

}

}


 

 // Calculation for Post-Utme 


function Olevel_score(){
 
 var grade1 = fixInt($("#grade1").val());
 var grade2 =  fixInt($("#grade2").val());
 var grade3 =  fixInt($("#grade3").val());
 var grade4 =  fixInt($("#grade4").val());
 var grade5 =  fixInt($("#grade5").val());

 
  
return ((grade1 +  grade2 +  grade3 +  grade4 +  grade5) * 2) / 3; 


 
 
}



function ResetScore(){


  document.getElementById("results").innerHTML = "none";
 
 document.getElementById("results").style.display="inline";

}




//final


function calculateScore(){
 
 document.getElementById("results").style.display="block";


  document.getElementById("results").innerHTML = "<b>Composite Score:  <span class='text-success'>" +  ( parseFloat(jamb_score())  +  parseFloat(postUtme_score()) + parseFloat(Olevel_score()) ).toFixed(2) + "</span> </b>";
 
}
 

</script>






</body>
</html>