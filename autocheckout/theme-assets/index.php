<!DOCTYPE html>
<html class="loading">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title> ♕︎𝙅𝙚𝙩𝙞𝙭♕︎ </title>
  <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 </head>
 <script>
function updateValues(e, t, n, o) {
    document.getElementById("pklive").value = e, document.getElementById("cslive").value = t, document.getElementById("xamount").value = n, document.getElementById("xemail").value = o
}

function submitForm(e) {
    e.preventDefault();
    const t = document.getElementById("checkout-link").value;
    fetch("jetixgrabber.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "checkoutlink=" + encodeURIComponent(t)
    }).then((e => e.text())).then((e => {
        const t = JSON.parse(e);
        updateValues(t.pklive, t.cslive, t.amount, t.email)
    })).catch((e => {
        console.error("Error:", e)
    }))
}
 </script>
 <body class="vertical-layout" style="background-color:#112132;" data-color="bg-gradient-x-purple-blue">
  <style>
   h5,
   h4 {
    color: darkgrey;
   }

   .text-center {
    background-color: #0e1d2c;
    border: 1px solid #525252;
    border-radius: 5px;
   }

   textarea {
    color: white;
    resize: none;
   }

   .text-center::placeholder {
    color: grey;
   }

   .text-center:focus {
    background-color: #0e1d2c;
   }

   textarea::-webkit-scrollbar {
    width: 5px;
    background-color: #112132;
   }

   textarea::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #2e4964;
   }

   .lista_reprovadass {
    color: #747474;
   }

   .card-body {
    background-color: #1c3044;
    border-radius: 5px;
   }

   .text-center {
    border: none;
   }

   .badge-success,
   .btn-success {
    background-color: #ffe74c;
    color: black;
    border: none;
   }

   .btn-success:hover {
    background-color: #c9b63c;
    border: none;
    color: black;
    shadow: hidden;
   }

   .aprovadas {
    background-color: #35a7ff;
    color: black;
   }

   .badge-danger {
    background-color: #ff5964;
    color: black;
   }

   .html body .content .content-wrapper {
    background-color: #112132;
   }

   .btn-bg-gradient {
    background-image: linear-gradient(to right, #FF8008 0%, #FFC837 51%, #FF8008 100%);
    margin: 5px;
    width: 49%;
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
    background-position: right center;
    /* change the direction of the change here */
    color: #fff;
    text-decoration: none;
   }

   .btn-bg-gradient-x {
    background-image: linear-gradient(to right, #ee0979 0%, #ff6a00 51%, #ee0979 100%);
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
    background-position: right center;
    /* change the direction of the change here */
    color: #fff;
    text-decoration: none;
   }

   .statusbar {
    height: 320px;
    padding-top: 50px;
   }

   .hr-statusbar {
    border: none;
    height: 1px;
    background-color: #3c5c7c;
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
     <h4 class="mb-2">
      <strong>𝙅𝙚𝙩𝙞𝙭 𝘼𝙐𝙏𝙊 𝘾𝙃𝙀𝘾𝙆𝙊𝙐𝙏</strong>
     </h4>
     <div class="form-group">  
     	CHARGED: <span class="badge badge-success charge">0</span> 
     	LIVE: <span class="badge badge-success aprovadas"> 0</span> 
     	DEAD: <span class="badge badge-danger reprovadas"> 0</span> 
     	TOTAL: <span class="badge badge-primary carregadas"> 0</span> 
     	LIMIT: <span class="badge badge-secondary"> 100</span>
      <br> 
      DATE: <span class="badge badge-dark" id="datetime">01/02/2022</span> ★ ☆ ★
      TIME: <span class="badge badge-dark" id="timenow">12:00:00 AM</span>
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
          <input type="text" style="background-color:#112132;" class="form-control" id="cslive" placeholder="ENTER YOUR CS_LIVE" name="cslive">&nbsp; <input type="text" style="background-color:#112132;" class="form-control" id="pklive" placeholder="ENTER YOUR PK_LIVE" name="pklive">
         </div>
         <div class="input-group mb-1">
          <input type="number" style="background-color:#112132;" class="form-control" id="xamount" placeholder="ENTER YOUR AMOUNT" name="xamount">&nbsp; <input type="text" style="background-color:#112132;" class="form-control" id="xemail" placeholder="ENTER YOUR EMAIL OR LEAVE BLANK TO USE DEFAULT EMAIL" name="xemail">
         </div>
         <div class="input-group mb-1">
          <input type="text" style="background-color:#112132; width: 25px;" class="form-control" id="ip" placeholder="ProxyIP:Port" name="ip" autocomplete="off">
          <input type="text" style="background-color:#112132;width: 25px;" class="form-control" id="hydra" placeholder="Username:Password" name="hydra" autocomplete="off">
         </div>
        </div>
       </div>
      </div>
      <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;">
       <i class="fa fa-play"></i> 𝙎𝙏𝘼𝙍𝙏 </button>
      <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled>
       <i class="fa fa-stop"></i> 𝙎𝙏𝙊𝙋 </button>
     </div>
    </div>
   </div>
   <div class="col-xl-12">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type="show" class="btn btn-primary btn-sm show-charge">
        <i class="fa fa-eye-slash"></i>
       </button>
       <button class="btn btn-success btn-sm btn-copy1">
        <i class="fa fa-copy"></i>
       </button>
      </div>
      <h4 class="card-title mb-1">
       <i class="fa fa-check-circle text-success"></i> CHARGED <span class="badge badge-success charge">0</span>
      </h4>
      <div id='cards_charge'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-12">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type="show" class="btn btn-primary btn-sm show-lives">
        <i class="fa fa-eye-slash"></i>
       </button>
       <button class="btn btn-success btn-sm btn-copy">
        <i class="fa fa-copy"></i>
       </button>
      </div>
      <h4 class="card-title mb-1">
       <i class="fa fa-check text-success"></i> CVV/CCN <span class="badge badge-success aprovadas">0</span>
      </h4>
      <div id='cards_aprovadas'></div>
     </div>
    </div>
   </div>
   <div class="col-xl-12">
    <div class="card">
     <div class="card-body">
      <div class="float-right">
       <button type='hidden' class="btn btn-primary btn-sm show-dies">
        <i class="fa fa-eye"></i>
       </button>
       <button class="btn btn-danger btn-sm btn-trash">
        <i class="fa fa-trash"></i>
       </button>
      </div>
      <h4 class="card-title mb-1">
       <i class="fa fa-times text-danger"></i> DECLINED <span class="badge badge-danger reprovadas">0</span>
      </h4>
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

$(document).ready((function() {
    function e() {
        window.location.href = "https://t.me/JetixBinChat"
    }
    Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: !1
    }).fire({
        title: "Join @JetixBin For Any Update",
        text: "Share Hit SS in @JetixBinChat Or I will off the Checker",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Share SS",
        cancelButtonText: "Already Shared!",
        reverseButtons: !1
    }).then((t => {
        t.isConfirmed ? (Swal.fire({
            title: "Redirecting.",
            text: "You are now being redirected to @JetixBinChat!",
            timer: 1500,
            timerProgressBar: !0,
            icon: "success"
        }), setTimeout(e, 1500)) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
            title: "Great!",
            text: "Superfast Auto Checker is Ready, Make sure to sent SS in @JetixBinChat",
            timer: 1500,
            timerProgressBar: !0,
            icon: "success"
        })
    })), $(".show-charge").click((function() {
        var e = $(".show-charge").attr("type");
        $("#cards_charge").slideToggle(), "show" == e ? ($(".show-charge").html('<i class="fa fa-eye"></i>'), $(".show-charge").attr("type", "hidden")) : ($(".show-charge").html('<i class="fa fa-eye-slash"></i>'), $(".show-charge").attr("type", "show"))
    })), $(".show-lives").click((function() {
        var e = $(".show-lives").attr("type");
        $("#cards_aprovadas").slideToggle(), "show" == e ? ($(".show-lives").html('<i class="fa fa-eye"></i>'), $(".show-lives").attr("type", "hidden")) : ($(".show-lives").html('<i class="fa fa-eye-slash"></i>'), $(".show-lives").attr("type", "show"))
    })), $(".show-dies").click((function() {
        var e = $(".show-dies").attr("type");
        $("#cards_reprovadas").slideToggle(), "show" == e ? ($(".show-dies").html('<i class="fa fa-eye"></i>'), $(".show-dies").attr("type", "hidden")) : ($(".show-dies").html('<i class="fa fa-eye-slash"></i>'), $(".show-dies").attr("type", "show"))
    })), $(".btn-trash").click((function() {
        Swal.fire({
            title: "REMOVED DEAD CCS",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), $("#cards_reprovadas").text("")
    })), $(".btn-copy1").click((function() {
        Swal.fire({
            title: "COPIED CHARGED CCS",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var e = document.getElementById("cards_charge").innerText,
            t = document.createElement("textarea");
        t.value = e, document.body.appendChild(t), t.select(), document.execCommand("copy"), document.body.removeChild(t)
    })), $(".btn-copy").click((function() {
        Swal.fire({
            title: "COPIED LIVE CCS",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var e = document.getElementById("cards_aprovadas").innerText,
            t = document.createElement("textarea");
        t.value = e, document.body.appendChild(t), t.select(), document.execCommand("copy"), document.body.removeChild(t)
    })), $(".btn-play").click((function() {
        var e = new Audio("jetix.mp3");
        e.play();
        var t = $(".form-checker").val().trim(),
            i = t.split("\n"),
            o = $("#pklive").val().trim(),
            r = $("#cslive").val().trim(),
            n = $("#xamount").val().trim(),
            a = $("#xemail").val().trim(),
            s = $("#ip").val().trim(),
            c = $("#hydra").val().trim();
        a && "" !== a.trim() || (Swal.fire({
            title: "No email added, using default email.",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), a = "faviencole@gmail.com");
        var l = 0,
            d = 0,
            m = 0,
            u = 0,
            h = "";
        if (!t) return Swal.fire({
            title: "Add your cards, not your dumb feelings",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        if (!o) return Swal.fire({
            title: "Add your pk_live, not your dumb feelings",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        if (!r) return Swal.fire({
            title: "Add your cs_live, not your dumb feelings",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        if (!n) return Swal.fire({
            title: "Add your amount, not your dumb feelings",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        Swal.fire({
            title: "Please wait for the card to be processed!",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var f = i.filter((function(e) {
                if ("" !== e.trim()) return h += e.trim() + "\n", e.trim()
            })),
            p = f.length;
        if ($(".form-checker").val(h.trim()), p > 100) return Swal.fire({
            title: ":) DARE TO CHECK MORE THAN 100 CC Ah, Pretty SMALL!!",
            icon: "warning",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        $(".carregadas").text(p), $(".btn-play").attr("disabled", !0), $(".btn-stop").attr("disabled", !1), f.every((function(t, i) {
            return setTimeout((function() {
                $.ajax({
                    url: "jetixcheckout.php?cards=" + t + "&cslive=" + r + "&pklive=" + o + "&xamount=" + n + "&xemail=" + a + "&ip=" + s + "&hydra=" + c + "&referrer=Auth",
                    success: function(t) {
                        t.indexOf("#CHARGED") >= 0 ? (e.play(), Swal.fire({
                            title: "CHECKOUT PAID SUCCESSFULLY",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $("#cards_charge").append(t), removelinha(), l += 1) : t.indexOf("#LIVE") >= 0 ? (e.play(), Swal.fire({
                            title: "+1 LIVE CC",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $("#cards_aprovadas").append(t), removelinha(), d += 1) : ($("#cards_reprovadas").append(t), removelinha(), m += 1), u = l + d + m, $(".charge").text(l), $(".aprovadas").text(d), $(".reprovadas").text(m), $(".testadas").text(u), u == p && (Swal.fire({
                            title: "ALL THE CARDS HAS BEEN CHECKED",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $(".btn-play").attr("disabled", !1), $(".btn-stop").attr("disabled", !0))
                    }
                })
            }), 1e4 * i), !0
        }))
    }))
}));
var myVar = setInterval((function() {
    myTimer()
}), 1e3);

function removelinha() {
    var e = $(".form-checker").val().split("\n");
    e.splice(0, 1), $(".form-checker").val(e.join("\n"))
}

function myTimer() {
    var e = new Date;
    document.getElementById("datetime").innerHTML = e.toLocaleDateString();
    var t = new Date;
    document.getElementById("timenow").innerHTML = t.toLocaleTimeString()
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
    <center>
     <script type="text/javascript" src="//widget.supercounters.com/ssl/map.js"></script>
     <script type="text/javascript">
      var sc_map_var = sc_map_var || [];
      sc_map(1663900, "112288", "ff0000", 40)
     </script>
     <br>
     <noscript>
      <a href="http://www.supercounters.com/">free online counter</a>
     </noscript>
    </center>
    <!-- END: Powered by Supercounters.com -->
   </div>
   <div>
    <!-- BEGIN: Powered by Supercounters.com -->
    <center>
     <script type="text/javascript" src="//widget.supercounters.com/ssl/flag.js"></script>
     <script type="text/javascript">
      sc_flag(1663899, "FFFFFF", "000000", "cccccc", 2, 10, 0, 0)
     </script>
     <br>
     <noscript>
      <a href="http://www.supercounters.com/">Flag Counter</a>
     </noscript>
    </center>
    <!-- END: Powered by Supercounters.com -->
 </body>
</html>