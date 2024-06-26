<!doctype html>


<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/favicon.svg" type="image/x-icon">

<title> Job Search Management System | Home</title>

<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">


<!--FONTS-->
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@200&display=swap" rel="stylesheet">

<style>
    .tiltContain{margin-top:0%;} 
    .btnTilt{height: 75px;background:rgba(225,225,225,0.2) ;  color:white; font-family: Sora;}
    .textDarkShadow{text-shadow: 0px 0px 3px #000,3px 3px 5px #003333;}
    /*-------------------------------------------*/
    .btn{cursor: pointer; transition: 0.8s;}
    .btn:hover{ transform: scale(1.1);}
    /*-------------------------------------------------*/
    .dm{padding-top: 100px;}
    /*------------------------------------------------------*/
    .mbbtn{width: 120px; height: 40px; background-color: #e9c46a; color: black; transition:0.4s;}
    .mbbtn:hover{transform:scale(1.08); background-color: #e9c46a; color: black;}    
   /*------------------------------------------------------------*/
    .floating { animation-name: floating; animation-duration: 3s; animation-iteration-count: infinite; animation-timing-function: ease-in-out;
                margin-left: 30px; margin-top: 5px; }
    @keyframes floating { 0% { transform: translate(0,  0px); }
                          50%  { transform: translate(0, 15px); }
                          100%   { transform: translate(0, -0px); }   }
    /* ---------------------------------------------------------------------*/
    .crd { height:320px; width:460px; border-radius:20px; cursor: pointer; transition:0.8s;}
    .crd:hover { transform: scale(1.05);} 
    /* -------------------------------------------------------------------------------------- */

</style>


<body onload="logoBeat()" style="font-family: 'Sora', sans-serif;">

<?php
include 'navBar.php';
include 'signinEmployerModals.php';
?>
    
<!-- Main Container -->
<div class="container-fluid" style=" background-color: #18303B; background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <div class="hero" style=" color:whitesmoke; height: 1700px;">
        
      <div>
      <!--	images in home page-->
            <div class="floating-area">
                <img class="floating" src="img/homepage SVG.svg" width="42%" style="padding-top:90px; padding-left: 50px; padding-bottom:100px; float: left;"/>
            </div>



             <!-- Texts in home page with heading and sub texts-->
                  <div class="animated slideInRight">
                   <h1 style="padding-top:250px; padding-right:290px; font-size: 30px; float: right;">
                       <strong style="font-family: 'Schoolbell', cursive; font-family: 'Vollkorn', serif;">Find the career you deserve!</strong>
                   </h1>
                   
                   <h3 style="padding-top:10px; padding-right:285px; font-size: 20px; color:white; float: right;">
                   Find out what you like doing best and <br>get someone to pay you for doing it.<br>
                   <br> Find the job meant for you. <b style="color: #e9c46a">#JobKaro</b>
                   
                  </h3>
        
                         <div class="butn" style="padding-top:15px; padding-right:530px;float:right;">
                         <button type="button" class="btn" style="width:120px; height:40px;  background-color:#e9c46a; border-radius: 0 !important;"> 
                             <a href = "mailto: rakshith.19cs121@sode-edu.in" style="color:black;">  Say Hi! </a>
                         </button>
                         </div>
        
                  </div>
      </div>

                               
	  </div>
  
</div>
        

<!--first row -->
<script src="js/tilt.jquery.min.js"></script>
<script src="js/signinModal.js"></script>

  	<?php include 'footer.php';?>

<button  style="display:none;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#msgModal" id="msgModalBtn">Open Modal</button>

   <!-- Modal -->
   <div id="msgModal" class="modal fade" role="dialog">
      
       <div class="modal-dialog">
       <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <?php if(isset($_GET['msg'])){
               $msg= $_GET['msg'];
                if($msg=='success')
                    {
                      echo  "<h4 class='modal-title'>Job Applied Successfully!</h4>";
                    }
                else if($msg=='error')
                    {
                      echo  "<h4 class='modal-title'>Some Error occured Pls try again later!</h4>";
                    }
                else if($msg=='dup')
                    {
                      echo "<h4 class='modal-title'>You have already applied for this job.\n "
                      . "Check your application status in 'Jobs Applied' section</h4>";
                    }
                       }?>
      </div>
    </div>
  </div>
</div>


  <?php 
        if(isset($_GET['msg']))
          {
            if($_GET['msg']=='login')
              {
  ?>
    
                <script>
                $('#loginAnchor').trigger( "click" );
                </script>    
        <?php }else{
                      ?>
                      <script>
                      $('#msgModalBtn').trigger( "click" );
                      </script>    
                      <?php  
                   } 
          }?> 
</body>
</html>
