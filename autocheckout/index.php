<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title> ♕︎𝙅𝙚𝙩𝙞𝙭♕︎ </title>
    <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
 <script>
        function updateValues(pk, cs, amount, email) {
            document.getElementById("pklive").value = pk;
            document.getElementById("cslive").value = cs;
            document.getElementById("xamount").value = amount;
            document.getElementById("email").value = email;
        }

        function submitForm(e) {
            e.preventDefault();
            const checkoutLink = document.getElementById("checkout-link").value;

            fetch('jetixgrabber.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'checkoutlink=' + encodeURIComponent(checkoutLink)
            })
            .then(response => response.text())
            .then(data => {
                const result = JSON.parse(data);
                updateValues(result.pklive, result.cslive, result.amount, result.email);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
<body class="vertical-layout" style="background-color:#112132;" data-color="bg-gradient-x-purple-blue">   
  <style>
    h5,h4{
      color:darkgrey;
    }
    .text-center{
      background-color:#0e1d2c;
      border:1px solid #525252;
      border-radius:5px;
    }
    textarea{
      color:white;
      resize: none;
    }

    .text-center::placeholder{
      color:grey;
    }
    .text-center:focus{
      background-color:#0e1d2c;
    }

    textarea::-webkit-scrollbar {
        width: 5px;
      background-color: #112132; 
    }

    textarea::-webkit-scrollbar-thumb {
      border-radius: 10px;
        background-color: #2e4964; 
    }
    a:link {
      color: green;
      background-color: transparent;
      text-decoration: none;
    }

    a:visited {
      color: pink;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: red;
      background-color: transparent;
      text-decoration: underline;
    }

    a:active {
      color: yellow;
      background-color: transparent;
      text-decoration: underline;
    }
    .lista_reprovadass{
      color:#747474;
    }
    .card-body{
      background-color: #1c3044; 
      border-radius:5px;
    }
    .text-center{
      border:none;
    }
    .badge-success,.btn-success{
      background-color: #ffe74c;
      color:black ;
      border:none;
    }
    .btn-success:hover{
      background-color: #c9b63c;
      border:none;
      color:black;
      shadow:hidden;
    }
    .aprovadas{
      background-color: #35a7ff;
      color:black ;
    }
    .badge-danger{
      background-color: #ff5964;
      color:black ;
    }
    .html body .content .content-wrapper{
      background-color:#112132;
    }

    .btn-bg-gradient {
        background-image: linear-gradient(to right, #FF8008 0%, #FFC837  51%, #FF8008  100%);
         margin: 5px;
       width:49%;
        padding: 12px 40px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;            
        box-shadow: 0 0 20px #eee;
        border-radius: 5px;
        display: block;
      -webkit-box-shadow: 0 0 0 0 #514a9d;
      }

      .btn-bg-gradient:hover {
        background-position: right center; /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
      }

      .btn-bg-gradient-x {
      background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
            margin: 5px;
            padding: 12px 45px;
      
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
      -webkit-box-shadow: 0 0 0 0 #514a9d;
      }

      .btn-bg-gradient-x:hover {
      background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
      }

      .statusbar{
      height:320px;
      padding-top:50px;
      }
      .hr-statusbar{
      border:none;
      height:1px;
      background-color:#3c5c7c;
      }
      .colored-toast.swal2-icon-success {
  background-color: #a5dc86 !important;
          }
      
      option { 
    /* Whatever color  you want */
    background-color: #112132;
  color: white;
  }
  </style>
  
    <div class="app-content content" style="display:block;">
      <div class="content-wrapper" style="background-color:#0e1d2c;">
          
    <div class="text-center" style="background-color:#0e1d2c;">
<h4 class="mb-2"><strong>𝙅𝙚𝙩𝙞𝙭 𝘼𝙐𝙏𝙊 𝘾𝙃𝙀𝘾𝙆𝙊𝙐𝙏</strong></h4>
<div class="form-group">
CHARGED: <span class="badge badge-success charge">0</span>
LIVE: <span class="badge badge-success aprovadas"> 0</span>
DEAD: <span class="badge badge-danger reprovadas"> 0</span>
TOTAL: <span class="badge badge-primary carregadas"> 0</span>
LIMIT: <span class="badge badge-secondary"> 20</span><br>
DATE: <span class="badge badge-dark" id="datetime">01/02/2022</span>  ★ ☆  TIME: <span class="badge badge-dark" id="timenow">12:00:00 AM</span>
</div>
    </div>
      <form onsubmit="submitForm(event)">
        <input type="text" style="background-color:#112132;" class="form-control text-center" id="checkout-link" name="checkoutlink" style="width: 100%;" placeholder="Paste your checkout link">
        <button class="btn btn-primary btn-sm text-white mb-2" style="width: 100%; float: left;" type="submit">Submit</button>
    </form> 
  <div class="content-body">
    <div class="mt-2"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body text-center">
          <textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="PUT YOUR CARDS HERE :>"></textarea>
          
          <div class="input-group mb-1">
          <input type="text" style="background-color:#112132;" class="form-control" id="cslive" placeholder="ENTER YOUR CS_LIVE" name="cslive">&nbsp;       
          <input type="text" style="background-color:#112132;" class="form-control" id="pklive" placeholder="ENTER YOUR PK_LIVE" name="pklive">
                    </div>
                    
                    <div class="input-group mb-1">
          <input type="number" style="background-color:#112132;" class="form-control" id="xamount" placeholder="ENTER YOUR AMOUNT" name="xamount">&nbsp;
          <input type="text" style="background-color:#112132;" class="form-control" id="email" placeholder="ENTER YOUR EMAIL OR LEAVE BLANK TO USE DEFAULT EMAIL" name="email">
          </div>
                    <div class="input-group mb-1">
          <input type="text" style="background-color:#112132; width: 25px;" class="form-control" id="ip" placeholder="ProxyIP:Port" name="ip" autocomplete="off">
          <input type="text" style="background-color:#112132;width: 25px;" class="form-control" id="hydra" placeholder="Username:Password" name="hydra" autocomplete="off">
          </div>

  </div>
           
</div>
          <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i> 𝙎𝙏𝘼𝙍𝙏</button>
          <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i> 𝙎𝙏𝙊𝙋</button>
          
        </div>
      </div>
      </div>
    </div>

                <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="float-right">
            <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
          <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>          
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED <span class="badge badge-success charge">0</span></h4>          
      <div id='cards_charge'></div>
        </div>        
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="float-right">
            <button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
          <button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>         
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV/CCN <span class="badge badge-success aprovadas">0</span></h4>          
      <div id='cards_aprovadas'></div>
        </div>        
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
          <div class="float-right">
            <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
          <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>          
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED <span class="badge badge-danger reprovadas">0</span></h4>    
            <div style='display: none;' id='cards_reprovadas'></div>
        </div>        
      </div>
        
      </div>
    </div>
    
</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){


const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: "Join @JetixBin For Any Update", 
  text: "Share Hit SS in @JetixBinChat Or I will off the Checker",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Share SS',
  cancelButtonText: 'Already Shared!',
  reverseButtons: false
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title:'Redirecting.',
      text:'You are now being redirected to @JetixBinChat!',
      timer: 1500,
      timerProgressBar: true,
      icon:'success'
    })
    setTimeout(RedirectUrl, 1500);
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    Swal.fire({
      title:'Great!',
      text:'Superfast Auto Checker is Ready, Make sure to sent SS in @JetixBinChat',
      timer: 1500,
      timerProgressBar: true,
      icon:'success'
    })
  }
})

function RedirectUrl(){    
       window.location.href ="https://t.me/JetixBinChat";
    }
    
$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#cards_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#cards_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#cards_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
  Swal.fire({title: 'REMOVED DEAD CCS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#cards_reprovadas').text('');
});

$('.btn-copy1').click(function(){
  Swal.fire({title: 'COPIED CHARGED CCS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_charge = document.getElementById('cards_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-copy').click(function(){
  Swal.fire({title: 'COPIED LIVE CCS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_lives = document.getElementById('cards_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){
  
var audio = new Audio('jetix.mp3');
audio['play']();
var cards = $('.form-checker').val().trim();
var array = cards.split('\n');
var pklive = $("#pklive").val().trim();
var cslive = $("#cslive").val().trim();
var xamount = $("#xamount").val().trim();
var email = $("#email").val().trim();
    if (!email || email.trim() === "") {
        Swal.fire({title: 'No email added, using default email.', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
        email = "faviencole@gmail.com";
    }    
var ip = $("#ip").val().trim();
var hydra = $("#hydra").val().trim();
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!cards){
  Swal.fire({title: 'Add your cards, not your dumb feelings', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

if(!pklive){
  Swal.fire({title: 'Add your pk_live, not your dumb feelings', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

if(!cslive){
  Swal.fire({title: 'Add your cs_live, not your dumb feelings', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

if(!xamount){
  Swal.fire({title: 'Add your amount, not your dumb feelings', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}


Swal.fire({title: 'Please wait for the card to be processed!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
  txt += value.trim() + '\n';
  return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 30){
  Swal.fire({title: ':) DARE TO CHECK MORE THAN 30 CC Ah, Pretty SMALL!!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.every(function(data, index){
setTimeout(
function() {
var callBack = $.ajax({
  url: 'new-co.php?cards=' + data + '&cslive=' + cslive + '&pklive=' + pklive + '&xamount=' + xamount + '&email=' + email + '&ip=' + ip + '&hydra=' + hydra + '&referrer=Auth',
  success: function(retorno){
    if(retorno.indexOf("#CHARGED") >= 0){
            audio['play']();
      Swal.fire({title: 'CHECKOUT PAID SUCCESSFULLY', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_charge').append(retorno);
      removelinha();
      charge = charge +1;
      }
      else if(retorno.indexOf("#LIVE") >= 0){
            audio['play']();
      Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_aprovadas').append(retorno);
      removelinha();
      lives = lives +1;
        }else{
      $('#cards_reprovadas').append(retorno);
      removelinha();
      dies = dies +1;
    }
    testadas = charge + lives + dies;
      $('.charge').text(charge);
    $('.aprovadas').text(lives);
    $('.reprovadas').text(dies);
    $('.testadas').text(testadas);
    
    if(testadas == total){
      Swal.fire({title: 'ALL THE CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);
    }
        }
      });
    }, 10000 * index);
    return true;
    });
  });
});

//line.forEach(function(data){
//var callBack = $.ajax({
//  url: 'kmart.php?cards=' + data + '&kcookie=' + kcookie + '&referrer=Auth',
//  success: function(retorno){
//    if(retorno.indexOf("#CHARGED") >= 0){
//      Swal.fire({title: '+1 CHARGED CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('#cards_charge').append(retorno);
//      removelinha();
//      charge = charge +1;
//      }
//      else if(retorno.indexOf("#LIVE") >= 0){
//      Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('#cards_aprovadas').append(retorno);
//      removelinha();
//      lives = lives +1;
//        }else{
//      $('#cards_reprovadas').append(retorno);
//      removelinha();
//      dies = dies +1;
//    }
//    testadas = charge + lives + dies;
//      $('.charge').text(charge);
//    $('.aprovadas').text(lives);
//    $('.reprovadas').text(dies);
//    $('.testadas').text(testadas);
//    
//    if(testadas == total){
//      Swal.fire({title: 'HAVE BEEN DISPOSED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('.btn-play').attr('disabled', false);
//      $('.btn-stop').attr('disabled', true);
//    }
//        }
//      });
//      $('.btn-stop').click(function(){
//      Swal.fire({title: 'Succeeding Pause !!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('.btn-play').attr('disabled', false);
//      $('.btn-stop').attr('disabled', true);      
//        callBack.abort();
//        return false;
//      });
//    });
//  });
//});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}

var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
  var dt = new Date();
  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}

  
  
</script>

<style>
  .counter-container {
    display: flex;
    justify-content: space-between;
  }
</style>

<div class="counter-container">
  <div>
    <!-- BEGIN: Powered by Supercounters.com -->
    <center><script type="text/javascript" src="//widget.supercounters.com/ssl/map.js"></script><script type="text/javascript">var sc_map_var = sc_map_var || [];sc_map(1663900,"112288","ff0000",40)</script><br><noscript><a href="http://www.supercounters.com/">free online counter</a></noscript>
    </center>
    <!-- END: Powered by Supercounters.com -->
  </div>
  <div>
    <!-- BEGIN: Powered by Supercounters.com -->
    <center><script type="text/javascript" src="//widget.supercounters.com/ssl/flag.js"></script><script type="text/javascript">sc_flag(1663899,"FFFFFF","000000","cccccc",2,10,0,0)</script><br><noscript><a href="http://www.supercounters.com/">Flag Counter</a></noscript>
    </center>
    <!-- END: Powered by Supercounters.com -->

  </body>
</html>