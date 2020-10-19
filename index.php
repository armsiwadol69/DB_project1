<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home BETA</title>
    <link rel="stylesheet" href="bootstrap4_data\bootstrap.css">
    <link rel="stylesheet" href="bootstrap4_data\pagesty.css">
    <link rel="stylesheet" href="bootstrap4_data\bg_v.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script type="text/javascript" src="bootstrap4_data\bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap4_data\jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<style media="screen">
.file {
visibility: hidden;
position: absolute;
}
</style>
  </head>
  <body>
    <a name="start"></a>
    <div class="video-background" style="opacity:0.9;">
    <div class="video-foreground">
      <div id="player">
      </div>
      <script>
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '1920',
          width: '1080',
          videoId: '4QXCPuwBz2E',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars: {
       'autoplay': 1,
       'controls': 0,
       'rel' : 0,
       'fs' : 0,
       'playlist': '4QXCPuwBz2E',
       'loop' : 1,

   },
        });
      }
      function onPlayerReady(event) {
        event.target.setVolume(10);
        event.target.playVideo();
      }

      function onPlayerStateChange(event) {

}

      function stopVideo() {
        player.stopVideo();
      }
    </script>
    </div>
  </div>
    <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" >
           <img src="favicon\favicon-96x96.png" width="30" height="30" class="d-inline-block align-top rounded" alt="" loading="lazy" hidden>
           Register BETA | SiX HexenjagD | ACP II
         </a>
       </nav>
       <div class="jumbotron jumbotron-fluid" style="background:rgba(255,255,255,0.1)">
         <div class="container">
           <h1 class="display-4 text-white">Register BETA</h1>
           <p class="lead text-white">Fill all box below!</p>
         </div>
       </div>
       <div class="container">
         <div class="row row-break">
           <div class="col-12">
             <div class="alert alert-warning" role="alert">
     Now playing : ツユ - あの世行きのバスに乗ってさらば。
   </div>
           </div>
         </div>

         <div class="row row-break">
           <div class="col-12">
             <div class="card w-100 h-100">
     <div class="card-body">

         <form method="post" action="submit_re.php">
         <div class="form-row">
           <div class="form-group col-md-4">
             <label for="idstd">Student ID</label>
             <input type="text" class="form-control" name="idstd" placeholder="13 Digit">
           </div>
           <div class="form-group col-md-4">
             <label for="name">First Name</label>
             <input type="text" class="form-control" name="name">
           </div>
           <div class="form-group col-md-4">
             <label for="sname">Surname</label>
             <input type="text" class="form-control" name="sname">
           </div>
         </div>
         <div class="form-row">
           <div class="form-group col-md-4">
             <label for="nickname">NickName</label>
             <input type="text" class="form-control" name="nickname">
           </div>
           <div class="form-group col-md-4">
             <label for="sex">Gender</label>
             <select name="sex" class="form-control">
        <option selected>Choose...</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
           </div>
           <div class="form-group col-md-4">
             <label for="email">E-Mail</label>
             <input type="email" class="form-control" name="email" placeholder="yourmomgay@example.com">
           </div>
         </div>
         <div class="form-row">
           <div class="form-group col-md-4">
             <label for="age">Age</label>
             <input type="text" class="form-control" name="age">
           </div>
           <div class="form-group col-3">
             <label for="birthday">Birthday</label>
             <input type="date" class="form-control" name="birthday">
           </div>
           <div class="form-group col-5">
             <label for="inputName">Password</label>
             <input type="text" class="form-control" name="password" placeholder="YOURMOMGAY">
           </div>
         </div>
         <button hidden type="submit" class="btn btn-block btn-primary">Submit</button>
         <div class="form-group">
           <label for="picture">Upload Image</label>
    <input type="file" name="picture" class="file" accept="image/*">
    <div class="input-group my-3">

      <input type="text" class="form-control" disabled placeholder="Upload File" name="picture">
      <div class="input-group-append">
        <button type="button" class="browse btn btn-primary">Browse...</button>
      </div>
    </div>
  </div>
<div class="">
  <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
</div>
<br>
<button type="submit" class="btn btn-block btn-primary">Submit</button>
       </form>
     </div>
   </div>

           </div>

         </div>
         <div class="row row-break">
           <div class="col-12">
             <div class="alert alert-info" role="alert">
     Siwadol M. | ACP II
   </div>
           </div>
         </div>
         <div class="row row-break">
           <div class="col-12" style="text-align: center">
            <a type="button" href="#bgimg" class="btn btn-info shadow-sm" style="margin-right:10px;">View Background Video</a> <br> <br>
            <h3 style="color:white;">ชาติ ศาสนา อาจารย์จุ๋ม</h3> <br>
            <img class="rounded shadow" src="img/tjum12.jpg" style="max-width:350px" width="100%" alt="">
           </div>
         </div>
       <h1 style="margin-bottom:1000px"></h1>
       <div class="" style="text-align:center;">
         <a href="#start"><button type="button" class="btn btn-outline-light" style="opacity:0.5;">Back To Top</button></a>
         <br> <br>
         <a name="bgimg"></a> <h4 style="color:rgba(0,0,0,0.5)">For View BackgrounD</h4>

       </div>
       </div>
       <?php
      /* $n1 = "Siwadol Malisorn";
       $n2 = 20;
       $n3 = "MCT/DM";
       $n4 = "Male";
       $n5 = "Si";
       echo "Hello! Mr.",$n1;
       echo "<br>";
       echo  "Your Age :",$n2;
       echo "<br>";
       echo "You are in ",$n3;
       echo "<br>";
       echo "Gender : ",$n4;
       echo "<br>";
       echo "Goodday, ",$n5;
       */
        ?>

       <script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (function() {
       'use strict';
       window.addEventListener('load', function() {
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
           form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
             }
             form.classList.add('was-validated');
           }, false);
         });
       }, false);
     })();
     </script>
     <script type="text/javascript">
     $(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});

     </script>
  </body>
</html>
