<!DOCTYPE html>
<html class="loading">
 <head>
  <meta charset="UTF-8">
  <meta name="description" content="Stripe InstaPay Checker">
  <meta name="keywords" content="Stripe Key, Credit Card, Checker, SK, CC, Bin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
  <title> ♕︎𝙅𝙚𝙩𝙞𝙭♕︎ </title>
  <link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v14.0/512px/1f4b3.png" type="image/x-icon" />
  <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- /------ GPY PVUFS ------/ -->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/styles.css">
  <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
  <style>
   footer {
    text-align: center;
    padding: 3px;
    background-color: #1c3044;
    color: #ffffff;
   }

   .custom-grab-button {
    display: flex;
    justify-content: center;
    align-items: center;
   }

   .btn-grab:hover {
    background-color: #5a59b2 !important;
   }

   .highlight {
    color: #fdb901;
   }
  </style>
 </head>
 <body class="vertical-layout" style="background-color:#112132;" data-color="bg-gradient-x-purple-blue">
  <div class="app-content content" style="display:block;">
   <div class="content-wrapper" style="background-color:#112132;">
    <div class="text-center" style="background-color:#112132;">
     <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
     <h4 class="mb-2">
      <strong>𝙅𝙚𝙩𝙞𝙭 𝙎𝙆 𝘾𝙃𝙀𝘾𝙆𝙀𝙍</strong>
     </h4>
     <div class="form-group"> 
        𝙏𝙊𝙏𝘼𝙇 : <span class="badge badge-secondary carregadas">0</span> 
        𝙇𝙄𝙑𝙀 : <span class="badge badge-success charge">0</span> 
        𝙍𝘼𝙏𝙀 𝙇𝙄𝙈𝙄𝙏 : <span class="badge badge-success aprovadas">0</span> 
        𝘿𝙀𝘼𝘿 : <span class="badge badge-danger reprovadas">0</span> 
        𝙏𝙀𝙎𝙏𝙀𝘿 : <span class="badge badge-primary testadas">0</span> 
        𝘿𝘼𝙏𝙀 : <span class="badge badge-info" id="datetime">04/04/2023</span> 
        𝙏𝙄𝙈𝙀: <span class="badge badge-info" id="timenow">12:00:00 AM</span>
     </div>
     <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
    </div>
    <div class="content-body">
     <div class="mt-2"></div>
     <div class="row">
      <div class="col-md-12">
       <div class="card">
        <div class="card-body text-center">
         <!-- /------ GPY PVUFS ------/ -->
         <textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="sk_live_xxxxxxxxxxxxxxxxxxxx"></textarea>
         <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
         <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;">
          <i class="fa fa-play"></i> START </button>
         <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled>
          <i class="fa fa-stop"></i> STOP </button>
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
          <i class="fa fa-check-circle text-success"></i> 𝙇𝙄𝙑𝙀 𝙆𝙀𝙔 <span class="badge badge-success charge">0</span>
         </h4>
         <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
         <div id='sk_charge'></div>
        </div>
       </div>
      </div>
      <div class="col-xl-12">
       <div class="card">
        <div class="card-body">
         <div class="float-right">
          <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
          <button type="show" class="btn btn-primary btn-sm show-lives">
           <i class="fa fa-eye-slash"></i>
          </button>
          <button class="btn btn-success btn-sm btn-copy">
           <i class="fa fa-copy"></i>
          </button>
         </div>
         <h4 class="card-title mb-1">
          <i class="fa fa-exclamation-triangle text-warning"></i> 𝙍𝘼𝙏𝙀 𝙇𝙄𝙈𝙄𝙏𝙀𝘿 𝙆𝙀𝙔 <span class="badge badge-success aprovadas">0</span>
         </h4>
         <div id='sk_aprovadas'></div>
        </div>
       </div>
      </div>
      <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
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
          <i class="fa fa-times text-danger"></i> 𝘿𝙀𝘼𝘿 𝙆𝙀𝙔 <span class="badge badge-danger reprovadas">0</span>
         </h4>
         <div style='display: none;' id='sk_reprovadas'></div>
         <!-- /.-.. .. - - .-.. . ..-. --- -..-/ -->
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- /------ GPY PVUFS ------/ -->
   <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
   <script>
$(document).ready((function() {
    $(".show-charge").click((function() {
        var t = $(".show-charge").attr("type");
        $("#sk_charge").slideToggle(), "show" == t ? ($(".show-charge").html('<i class="fa fa-eye"></i>'), $(".show-charge").attr("type", "hidden")) : ($(".show-charge").html('<i class="fa fa-eye-slash"></i>'), $(".show-charge").attr("type", "show"))
    })), $(".show-lives").click((function() {
        var t = $(".show-lives").attr("type");
        $("#sk_aprovadas").slideToggle(), "show" == t ? ($(".show-lives").html('<i class="fa fa-eye"></i>'), $(".show-lives").attr("type", "hidden")) : ($(".show-lives").html('<i class="fa fa-eye-slash"></i>'), $(".show-lives").attr("type", "show"))
    })), $(".show-dies").click((function() {
        var t = $(".show-dies").attr("type");
        $("#sk_reprovadas").slideToggle(), "show" == t ? ($(".show-dies").html('<i class="fa fa-eye"></i>'), $(".show-dies").attr("type", "hidden")) : ($(".show-dies").html('<i class="fa fa-eye-slash"></i>'), $(".show-dies").attr("type", "show"))
    })), $(".btn-trash").click((function() {
        Swal.fire({
            title: "Removed Dead SK!",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), $("#sk_reprovadas").text("")
    })), $(".btn-copy1").click((function() {
        Swal.fire({
            title: "Copied Live SK!",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var t = document.getElementById("sk_charge").innerText,
            e = document.createElement("textarea");
        e.value = t, document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e)
    })), $(".btn-copy").click((function() {
        Swal.fire({
            title: "Copied Rate Limited SK!",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var t = document.getElementById("sk_aprovadas").innerText,
            e = document.createElement("textarea");
        e.value = t, document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e)
    })), $(".btn-play").click((function() {
        var t = new Audio("jetix.mp3");
        t.play();
        var e = $(".form-checker").val().trim(),
            o = e.split("\n"),
            i = 0,
            s = 0,
            a = 0,
            n = 0,
            r = "";
        if (!e) return Swal.fire({
            title: "Add SK!",
            icon: "error",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        Swal.fire({
            title: "Proccessing!",
            icon: "success",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        });
        var c = o.filter((function(t) {
                if ("" !== t.trim()) return r += t.trim() + "\n", t.trim()
            })),
            l = c.length;
        if ($(".form-checker").val(r.trim()), l > 1e4) return Swal.fire({
            title: "LMAO! No More Than 10K, You Noob!",
            icon: "warning",
            showConfirmButton: !1,
            toast: !0,
            position: "top-end",
            timer: 3e3
        }), !1;
        $(".carregadas").text(l), $(".btn-play").attr("disabled", !0), $(".btn-stop").attr("disabled", !1), async function() {
            var e = !1;
            async function o(o) {
                e || await $.ajax({
                    url: "sk.php?sk=" + o + "&referrer=Auth",
                    success: function(e) {
                        e.indexOf("LIVE KEY ✅") >= 0 ? (t.play(), Swal.fire({
                            title: "+1 Live Key!",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $("#sk_charge").append(e), removelinha(), i += 1) : e.indexOf("RATE LIMITED KEY ⚠️") >= 0 ? (t.play(), Swal.fire({
                            title: "+1 Rate Limited Key!",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $("#sk_aprovadas").append(e), removelinha(), s += 1) : ($("#sk_reprovadas").append(e), removelinha(), a += 1), n = i + s + a, $(".charge").text(i), $(".aprovadas").text(s), $(".reprovadas").text(a), $(".testadas").text(n), n == l && (t.play(), Swal.fire({
                            title: "All SK Checked!",
                            icon: "success",
                            showConfirmButton: !1,
                            toast: !0,
                            position: "top-end",
                            timer: 3e3
                        }), $(".btn-play").attr("disabled", !1), $(".btn-stop").attr("disabled", !0))
                    }
                })
            }
            $(".btn-stop").click((function() {
                return Swal.fire({
                    title: "Paused!",
                    icon: "warning",
                    showConfirmButton: !1,
                    toast: !0,
                    position: "top-end",
                    timer: 3e3
                }), $(".btn-play").attr("disabled", !1), $(".btn-stop").attr("disabled", !0), e = !0, !1
            })), async function() {
                for (let t = 0; t < c.length && !e; t++) await o(c[t])
            }()
        }()
    }))
}));

function removelinha() {
    var lines = $('.form-checker').val().split('\n');
    lines.splice(0, 1);
    $('.form-checker').val(lines.join("\n"));
}

/* /------ GPY PVUFS ------/ */

var myVar = setInterval(function() {
    myTimer()
}, 1000);

function myTimer() {
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}
   </script>
   <script>
    function copyToClipboard(element) {
     var text = element.textContent;
     var input = document.createElement('input');
     input.value = text;
     document.body.appendChild(input);
     input.select();
     document.execCommand('copy');
     document.body.removeChild(input);
     alert('Copied: ' + text);
    }
   </script>
   <!-- BEGIN: Powered by Supercounters.com -->
   <center>
    <script type="text/javascript" src="//widget.supercounters.com/ssl/flag.js"></script>
    <script type="text/javascript">
     sc_flag(1661385, "FFFFFF", "000000", "cccccc", 2, 10, 0, 0)
    </script>
    <br>
    <noscript>
     <a href="http://www.supercounters.com/">Flag Counter</a>
    </noscript>
   </center>
   <!-- END: Powered by Supercounters.com -->
   <!-- BEGIN: Powered by Supercounters.com -->
   <center>
    <script type="text/javascript" src="//widget.supercounters.com/ssl/vt.js"></script>
    <script type="text/javascript">
     var sc_visitor_var = sc_visitor_var || [];
     sc_vt(1661386, "FFFFFF", "cccccc", "000000", 10)
    </script>
    <br>
    <noscript>
     <a href="http://www.supercounters.com/">free online counter</a>
    </noscript>
   </center>
   <!-- END: Powered by Supercounters.com -->
 </body>
</html>