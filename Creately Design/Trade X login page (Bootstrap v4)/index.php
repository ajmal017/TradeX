<!DOCTYPE html>
<html>
<title>TradeX</title>
<link rel="stylesheet" href="login.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
<div class="container-fluid">
<ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" id ="xuser">Sign in</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id ="nuser">Sign up</a>
    </li>
  </ul>

<p id="logo">Trade X</p>
  <!-- The sign in Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign in</h4>
         <span class="close" style="color: #ffffff">&times;</span>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="validate.php" method="post">
         <div class="container">
         <label for="uname"><b></b></label>
         <input type="text" placeholder="Enter Username!" name="uname" required>
          <br>
         <label for="psw"><b></b></label>
         <input type="password" placeholder="Enter Password!" name="psw" required>
         <br>
         <button type="submit" name="submit" class="btn btn-primary" id="submit-credentials">Login</button>
         <br>
         <br>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
</div>
<!-- Java script for the modal --> 
<script> 
  // When the user clicks the button, open the modal
  var modal = document.getElementById("myModal");
  var xuser = document.getElementById('xuser')  
  //Closing the modal
  var span = document.getElementsByClassName("close")[0]
  xuser.onclick = function() {
  modal.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script> 

    
    <!-- Create user php script -->
<!--
   <?php
    session_start();
    
    if(isset($_SESSION['inactive'])){
        if($_SESSION['inactive'] == true){
            phpAlert("You have been automatically logged out due to being inactive for too long.");
        
        // Set our inactive marker back to false;
            $_SESSION['inactive'] = false;
        }
    }
    
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if (isset($_POST['create'])) { 
    require "config.php";
    require "common.php";
    try {
      
        /* This try block connects to the database and builds the SQL statement.
         * It accesses the required information, and then inserts it into the user table using an
         * insert command.
        */
        $connection = new PDO($dsn, $username, $password, $options);
        
        //hashes and salts(?) user's password using bcrypt (documentation here: https://www.php.net/manual/en/function.password-hash.php)
        //"Warning: The salt option has been deprecated as of PHP 7.0.0. It is now preferred to simply use the salt that is generated by default."
        $hashedPassword = password_hash($_POST['psw'],PASSWORD_DEFAULT);
        $new_user = array(
            "first_name" => $_POST['first_name'],
            "last_name"  => $_POST['last_name'],
            "email"     =>  $_POST['email'],
            "password"   => $hashedPassword,
            "is_admin" => 0,
        );
        if(!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
            phpAlert($_POST['email'] . " is not a valid email, account could not be created. Please try again with a valid email.");
        }
        
        else{
        $selectEmails = $connection->prepare("SELECT email FROM user WHERE email = :email");
        $selectEmails->bindParam(':email', $_POST['email']);
        $selectEmails->execute();
        
        if($selectEmails->rowCount() >0){
            phpAlert("Email is already attached to an account. Please try again with a new email.");
        }
        else{
            
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "user",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user))
        );
        phpAlert("Account successfully created! Please proceed to sign in.");
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } 
    }
    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
  }
}
?>
-->

<!-------------------------------------------------------------------------> 

<!-- The sign up Modal -->

  <div class="modal" id="myModal2"  >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
    <!--modal header -->
    <div class="modal-header">
    <h4 class="modal-title">Sign up</h4>
    <span class="close2">&times;</span>
    </div>
    <!--modal body -->
<div class="modal-body">
  <form method="post" onSubmit="return checkPassword(this)">
  <div class="container">
    <label for="email"><b></b></label>
    <input type="text" placeholder="Email!" name="email" required>
    <br>
    <label for="first_name"><b></b></label>
    <input type="text" placeholder="First name!" name="first_name" required>
    <br>
    <label for="last_name"><b></b></label>
    <input type="text" placeholder="Last name!" name="last_name" required>
    <br>
    <label for="psw"><b></b></label>
    <input type="password" placeholder="Password!" name="psw" required>
    <br>
    <label for="rpsw"><b></b></label>
    <input type="password" placeholder="Re-enter Password!" name="rpsw" required>
    <br>
    <button type="submit" name= "create" class="btn btn-primary" value= "Submit">Sign up</button>
    <br>
  </div>
  </form>
</div>    

    </div>
  </div>
      </div>
<!-- Java script for entering password correctly (reentered and meets strength requirements) -->
<script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                var passRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                /*password must contain
                (?=.*[a-z])	The string must contain at least 1 lowercase alphabetical character
                (?=.*[A-Z])	The string must contain at least 1 uppercase alphabetical character
                (?=.*[0-9])	The string must contain at least 1 numeric character
                (?=.[!@#\$%\^&])	The string must contain at least one special character
                (?=.{8,})	The string must be eight characters or longer
                example working password: 123Pd%aaaa
                */
                password1 = form.psw.value; 
                password2 = form.rpsw.value; 
  
                // Passwords don't match return false     
                if (password1 != password2) { 
                    alert ("\nMake sure your passwords match before submitting!"); 
                    return false; 
                } 
                
                else if(!(password1.match(passRegex))){
                    alert("Password does not meet strength requirements, please try again with a new password. Passwords must contain 1 lowercase letter, 1 uppercase letter, 1 numeric character, 1 special character (%,$,&,@,#,!), and must be 8 characters in length or longer.");
                    return false;
                }
  
                // If same return True. 
                else{  
                    return true; 
                } 
            } 
        </script> 
    
<!-- Java script for the signup modal --> 
<script> 
  // When the user clicks the button, open the modal
  var modal2 = document.getElementById("myModal2");
  var nuser = document.getElementById('nuser')  
  //Closing the modal
  var span2 = document.getElementsByClassName("close2")[0]
  nuser.onclick = function() {
  modal2.style.display = "block";
  }
  // When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}
</script> 
 


<!-------------------------------------------------------------------------> 
<!-- The following is for the HYPONOS-->
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      html, body {
        height: auto;
      }
      canvas {
        display: block;
        
        margin: auto;
      }
      p {
        position: relative;
        text-align: center;
        margin-top: 10px;
        font-family: monospace;
      }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <div class="main-container">
      <canvas></canvas>
    </div>

    <script>
      (function() {
        var canvas = document.querySelector( 'canvas' ),
          context = canvas.getContext( '2d' ),
          width = window.innerWidth * 0.7,
          height = window.innerHeight * 0.7,
          radius = Math.min( width, height ) * 0.5,
          // Number of layers
          quality = 180,
          // Layer instances
          layers = [],
          // Width/height of layers
          layerSize = radius * 0.25,
          // Layers that overlap to create the infinity illusion
          layerOverlap = Math.round( quality * 0.1 );
        function initialize() {
          for( var i = 0; i < quality; i++ ) {
            layers.push({
              x: width/2 + Math.sin( i / quality * 2 * Math.PI ) * ( radius - layerSize ),
              y: height/2 + Math.cos( i / quality * 2 * Math.PI ) * ( radius - layerSize ),
              r: ( i / quality ) * Math.PI
            });
          }
          resize();
          update();
        }
        function resize() {
          canvas.width = width;
          canvas.height = height;
        }
        function update() {
          requestAnimationFrame( update );
          step();
          clear();
          paint();
        }
        // Takes a step in the simulation
        function step () {
          for( var i = 0, len = layers.length; i < len; i++ ) {
            layers[i].r += 0.01;
          }
        }
        // Clears the painting
        function clear() {
          context.clearRect( 0, 0, canvas.width, canvas.height );
        }
        // Paints the current state
        function paint() {
          // Number of layers in total
          var layersLength = layers.length;
          // Draw the overlap layers
          for( var i = layersLength - layerOverlap, len = layersLength; i < len; i++ ) {
            context.save();
            context.globalCompositeOperation = 'destination-over';
            paintLayer( layers[i] );
            context.restore();
          }
          // Cut out the overflow layers using the first layer as a mask
          context.save();
          context.globalCompositeOperation = 'destination-in';
          paintLayer( layers[0], true );
          context.restore();
          // // Draw the normal layers underneath the overlap
          for( var i = 0, len = layersLength; i < len; i++ ) {
            context.save();
            context.globalCompositeOperation = 'destination-over';
            paintLayer( layers[i] );
            context.restore();
          }
        }
        // Pains one layer
        function paintLayer( layer, mask ) {
          size = layerSize + ( mask ? 10 : 0 );
          size2 = size / 2;
          context.translate( layer.x, layer.y );
          context.rotate( layer.r );
          // No stroke if this is a mask
          if( !mask ) {
            context.strokeStyle = '#000';
            context.lineWidth = 1;
            context.strokeRect( -size2, -size2, size, size );
          }
          context.fillStyle = '#fff'; 
          context.fillRect( -size2, -size2, size, size );
        }
        /**
         * rAF polyfill.
         */
        (function() {
          var lastTime = 0;
          var vendors = ['ms', 'moz', 'webkit', 'o'];
          for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
            window.cancelAnimationFrame = 
              window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
          }
          if (!window.requestAnimationFrame)
            window.requestAnimationFrame = function(callback, element) {
              var currTime = new Date().getTime();
              var timeToCall = Math.max(0, 16 - (currTime - lastTime));
              var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
                timeToCall);
              lastTime = currTime + timeToCall;
              return id;
            };
          if (!window.cancelAnimationFrame)
            window.cancelAnimationFrame = function(id) {
              clearTimeout(id);
            };
        }());
        initialize();
      })();
    </script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  <!----------------------------------End of HYPNOS----------------------------------------------------------------->  

  <!-----------------------------------background--------------------------------------------------------------------->
  <link rel='stylesheet' id='screen-css'  href='https://www.clarium.com/themes/clarium-intranet/assets/styles/screen.css?ver=1570399193' type='text/css' media='all' />
  <script type="text/javascript">
      if( typeof window.globals != 'object' ) {
        window.globals = {
          urls : {"site":"https:\/\/www.clarium.com","template":"https:\/\/www.clarium.com\/themes\/clarium-intranet","scripts":"https:\/\/www.clarium.com\/themes\/clarium-intranet\/assets\/scripts","styles":"https:\/\/www.clarium.com\/themes\/clarium-intranet\/assets\/styles","images":"https:\/\/www.clarium.com\/themes\/clarium-intranet\/assets\/images","lib":"https:\/\/www.clarium.com\/themes\/clarium-intranet\/helper","prototype":"https:\/\/www.clarium.com\/themes\/clarium-intranet\/prototype"}        };
      } 
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script src="https://www.clarium.com/themes/clarium-intranet/assets/scripts/plugins.js?1570399193"></script>
  <script src="https://www.clarium.com/themes/clarium-intranet/assets/scripts/global.js?1570399193"></script>
  <!-----------------------------------End of Background-------------------------------------------------------------------->
      <p id="help"><u>Need Help?</u></p>
      </div>
  </body>
  </html> 
 
 <!--  <footer>
    <p class="copyright">© GROUP Z 2019</p>
</footer>
<style>
    footer {
        position: relative;
        height: 25px;
        width: 100%;
        background-color: #333333;
    }
    p.copyright {
        position: absolute;
        width: 100%;
        color: #fff;
        line-height: 40px;
        font-size: 1em;
        text-align: center;
        bottom:0;
    }
</style> -->