<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>𝙅𝙚𝙩𝙞𝙭 𝘾𝙃𝙀𝘾𝙆𝙀𝙍</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
  <script>
      function submitForm(event) {
            event.preventDefault();

            const checkoutLink = document.getElementById('checkoutlink').value;

            fetch('process_form.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        checkoutlink: checkoutLink
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                    document.querySelector('#cslive').value = data.cslive ?? '';
                    document.querySelector('#email').value = data.email ?? '';
                    document.querySelector('#pklive').value = data.pklive ?? 'pk_live not found';
                    document.querySelector('#ip').value = data.ip ?? '';
                    document.querySelector('#hydra').value = data.hydra ?? '';
                });
        }
  </script>
<body class="vertical-layout" style="background-color:#000000;" data-color="bg-gradient-x-purple-blue">   
  <style>
    h5,h4{
      color:white;
    }
    .text-center{
      background-color:#000000;
      border:1px solid;
      border-color: #18d6a3;
      border-radius: 15px;
      font-family: 'Fjalla One', sans-serif;
      letter-spacing: 2px;
    }
    textarea{
      color:white;
      resize: none;
      border: 1px white solid;
    }

    .text-center::placeholder{
      color:grey;
    }
    .text-center:focus{
      background-color:#000000;
      border: 1px solid black;
      transition: 0.5s;
    }

    textarea::-webkit-scrollbar {
        width: 2px;
      background-color: #112132; 
    }

    textarea::-webkit-scrollbar-thumb {
      border-radius: 10px;
        background-color: #2e4964; 
    }
    .lista_reprovadass{
      color:#747474;
    }
    .card-body{
      background-color: black; 
      border: 1px solid;
      border-color: #2e2e2e;
      border-radius: 15px;
    }
    .text-center{
      background-color: black;
      border: 1px solid;
      border-color: #1a1a1a;
      border-radius: 15px;
      box-shadow: 5px #18d6a3
    }
    .badge-success,.btn-success{
      background-color: #5ed84f;
      color:black;
      border:none;
    }
    .btn-success:hover{
      background-color: #28af17;
      border:none;
      color:black;
      shadow:hidden;
    }
    .aprovadas{
      background-color: #35a7ff;
      color:black ;
    }
    .badge-danger{
      background-color: #ff1b23;
      color:black;
    }
    .html body .content .content-wrapper{
      background-color:#112132;
    }
    .statusbar {
            height: 320px;
            padding-top: 50px;
        }
        .hr-statusbar {
            border: none;
            height: 0.5px;
            background-image: linear-gradient(to right, #000000, #000000);
        }
        .footer-C {
            background-color: #1f1f29;
            color: white;
            text-align: center;
            font-family: 'Fjalla One', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }
  </style>
  
    <div class="app-content content" style="display:block;">
      <div class="content-wrapper" style="background-color:#000000;">
          
    <div class="text-center" style="background-color:#000000;">
<h4 class="mb-2"><strong>𝙅𝙚𝙩𝙞𝙭 𝘾𝙃𝙀𝘾𝙆𝙀𝙍</strong></h4>
<div class="form-group">
<strong>CHARGED : </strong><span class="badge badge-success charge">0</span>
<strong>LIVE : </strong><span class="badge badge-primary aprovadas"> 0</span>
<strong>DEAD : </strong><span class="badge badge-danger reprovadas"> 0</span>
<strong>TOTAL : </strong><span class="badge badge-dark carregadas"> 0</span>
</div>
  <form autocomplete="off" onsubmit="submitForm(event)">
  <input type="text" style="background-color:#00000;" class="form-control text-center" id="checkoutlink" name="checkoutlink" style="width: 100%;" placeholder="𝙋𝙖𝙨𝙩𝙚 𝙔𝙤𝙪𝙧 𝙎𝙩𝙧𝙞𝙥𝙚 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙇𝙞𝙣𝙠">
    <button class="btn btn-submit btn-bg-black text-white" style="background-color:#000000; width: 100%;"><i class="fa fa-submit"></i>♥ PARSE ♥</button>
  </form>
    </div>
           
  <div class="content-body">
    <div class="mt-2"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="background-color:transparent;">
        <div class="card-body text-center">
          <textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="ᴘᴜᴛ ʏᴏᴜʀ ᴄᴀʀᴅꜱ ʜᴇʀᴇ :>"></textarea>
          
          <div class="mb-1" >
                  <div class="input-group">
                    <select name="gates" id="gates" class="form-control text-white gates" style="margin-bottom: 5px; background-color: #000000;">
                      <option class="form-control" style="background-color: #000000;" value="new-co.php">𝙁𝙊𝙍 𝙉𝙊𝙍𝙈𝘼𝙇 𝙎𝙄𝙏𝙀𝙎 </option><option class="form-control" style="background-color: #000000;" value="new-co-chatgpt.php">𝙁𝙊𝙍 [𝙏𝙤𝙎 𝙎𝙞𝙩𝙚𝙨] 𝙚𝙭: 𝘾𝙃𝘼𝙏𝙂𝙋𝙏</option></select>
                    
                  </div>
                </div>


          <div class="input-group mb-1">
          <input type="text" style="background-color:#000000;" class="form-control" id="cslive" placeholder="CS_LIVE" name="cslive">&nbsp;       
          <input type="text" style="background-color:#000000;" class="form-control" id="pklive" placeholder="PK_LIVE" name="pklive">
          <input type="text" style="background-color:#000000;" class="form-control" id="email" placeholder="EMAIL" name="email">
                    </div>
                    
                    <div class="input-group mb-1">
          <input type="text" style="background-color:#000000;" class="form-control" id="ip" placeholder="𝐄𝐧𝐭𝐞𝐫 𝐏𝐫𝐨𝐱𝐲:𝐏𝐨𝐫𝐭 𝐇𝐞𝐫𝐞
" name="ip">&nbsp;
          <input type="text" style="background-color:#000000;" class="form-control" id="hydra" placeholder="𝐏𝐫𝐨𝐱𝐲 𝐮𝐬𝐞𝐫𝐧𝐚𝐦𝐞:𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝 𝐇𝐞𝐫𝐞" name="hydra">
          </div>


          <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i>START</button>
          <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i>STOP</button>
        </div>
      </div>
    </div>

                <div class="col-xl-12">
      <div class="card" style="background-color:transparent;">
        <div class="card-body">
          <div class="float-right">
            <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
          <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>          
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> 𝘾𝙃𝘼𝙍𝙂𝙀𝘿 <span class="badge badge-success charge">0</span></h4>          
      <div id='cards_charge'></div>
        </div>        
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card" style="background-color:transparent;">
        <div class="card-body">
          <div class="float-right">
            <button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
          <button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>         
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> 𝙞𝙣𝙨𝙪𝙛𝙛𝙞𝙘𝙞𝙚𝙣𝙩 𝙘𝙖𝙧𝙙𝙨
 <span class="badge badge-success aprovadas">0</span></h4>          
      <div id='cards_aprovadas'></div>
        </div>        
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card" style="background-color:transparent;">
        <div class="card-body">
          <div class="float-right">
            <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
          <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>          
          </div>
          <h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> 𝘿𝙀𝘾𝙇𝙄𝙉𝙀𝘿 <span class="badge badge-danger reprovadas">0</span></h4>    
            <div style='display: none;' id='cards_reprovadas'></div>
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


// Swal.fire({ title: "Dynamic DR Flash", text: "DDRF Auto Checkouter", icon: "warning", confirmButtonText: "OK", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});


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
  Swal.fire({title: 'REMOVE CC DEAD SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#cards_reprovadas').text('');
});

$('.btn-copy1').click(function(){
  Swal.fire({title: 'COPY CC CHARGED SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_charge = document.getElementById('cards_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-copy').click(function(){
  Swal.fire({title: 'COPY CC LIVE SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_lives = document.getElementById('cards_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){

var cards = $('.form-checker').val().trim();
var array = cards.split('\n');
var pklive = $("#pklive").val().trim();
var cslive = $("#cslive").val().trim();
var email = $("#email").val().trim();
var ip = $("#ip").val().trim();
var hydra = $("#hydra").val().trim();
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';
var whichgate = document.getElementById('gates').value;
if(!cards){
  Swal.fire({title: 'Wheres your card?? please add a card!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

if(!pklive){
  Swal.fire({title: 'Wheres your pklive?? please add a pklive!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

if(!cslive){
  Swal.fire({title: 'Wheres your cslive?? please add a cslive!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}
if(!email){
  Swal.fire({title: 'Please enter your email', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

// if(!ip){
//  Swal.fire({title: 'Wheres the amount?? please add a amount!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//  return false;
// }

// if(!hydra){
//  Swal.fire({title: 'Wheres the email?? please add a email!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//  return false;
// }

Swal.fire({title: 'Please wait for the card to be processed !!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

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
if(total > 10000){
  Swal.fire({title: 'LIMIT TO 50 CARDS ONLY ', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.every(function(data, index){
setTimeout(
function() {
var callBack = $.ajax({
  url: whichgate + '?cards=' + data + '&cslive=' + cslive + '&email=' + email + '&pklive=' + pklive + '&ip=' + ip + '&hydra=' + hydra + '&referrer=Auth',
  success: function(retorno){
    if(retorno.indexOf("#CHARGED") >= 0){
      Swal.fire({title: '+1 CHARGED CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_charge').append(retorno);
      removelinha();
      charge = charge +1;
      }
      else if(retorno.indexOf("#LIVE") >= 0){
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
      Swal.fire({title: 'HAVE BEEN DISPOSED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
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


function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}

  
  
</script>

  </body>
</html>