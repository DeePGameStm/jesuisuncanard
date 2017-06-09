<?php
    session_start();
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u181361040_yop;charset=utf8', 'u181361040_yop', '123bonsoir');
    
    if(!isset($_SESSION['username']))
    {
        $_SESSION['id'] = -1;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="google-site-verification" />
    <link rel="stylesheet" href="styledeep.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>DeePGameS</title>
    
</head>

<body id='body'>
    <div id="tt">
    <div class="total">
    
        <div class="CO">
            <p class="CO0">&nbsp;&nbsp; Member List : &nbsp;&nbsp;</p>
            <div class="CO1">
                <?php
                    $reponse = $bdd->query('SELECT * FROM users');
                    while($donne = $reponse->fetch())
                    {
                        echo '-' . $donne['username'] . '<br>';
                    }
                    $reponse->closeCursor();
                ?>
            </div>
        
        </div>
    
    
    
    <div class="barreG">
        <a href="index.php" class="abarreG"><img src="1barreG.jpg"></a><br><br>
        <a href="index.php" class="abarreG"><img src="2barreG.jpg"></a><br><br>
        <a href="index.php" class="abarreG"><img src="3barreG.jpg"></a><br><br>
        <a href="index.php" class="abarreG"><img src="4barreG.jpg"></a><br><br>
        <a href="index.php" class="abarreG"><img src="5barreG.jpg"></a><br><br>
    
    </div>
    
    <p class="bodyB">
        <strong>nouveautées:</strong>
    </p>
    
    <div class="body">
        <div class="Bleft">
        bonjour
        </div>
        
        <div class="Bright">
        bonsoir
        </div>
    </div>
        
    </div>
    </div>
    
    
    
    <!--<script src="socket.io/socket.io.js"></script> -->
    <script>
        //var socket = io.connect('http://87.89.80.51:8080');
    </script>

    <script type="text/javascript" src="http://livejs.com/live.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <header>
        <div class="headDiv" id="headDiv">


                <a class="logoA" style="color: darkgray;" href="index">
                    <div class="logoL">
                        <img class="logo" src="logo.png" width=165 alt="SWAGE!" />
                        
                    </div>
                </a>
                <div class="casetop">
                    <p class="test1text">Nos jeux</p>
                </div>
               

            <div>
                <div class="casetop">
                    <p class="test1text">Média</p>
                </div>

                <form method="POST" id="loginForm" action="/login.php?url=http://www.jesuisuncanard.hol.es/DeePGameS">
                    <input type="hidden" name="username" id="user1">
                    <input type="hidden" name="password" id="pass1">
                </form>
                
                <form method="POST" id="signupForm" action="/signup.php?url=http://www.jesuisuncanard.hol.es/DeePGameS">
                    <input type="hidden" name="username" id="user2" value="0">
                    <input type="hidden" name="password" id="pass2" value="0">
                    <input type="hidden" name="mail" id="mail1" value="0">
                </form>
                
                <div class="loginDiv">
                    <?php
                        if($_SESSION['id'] == -1)
                        {
                    ?>
                    <input type="image" src="login.png" name="login" id="login">
                    <input type="image" src="signup.png" name="signup" id="signup">
                    <?php } 
                    else{
                            echo '<p style="color: white;">bonjour ' . $_SESSION['username'] . '!</p>';
                            echo '<input type="button" name="disconnect" id="disconnect" value="disconnect">';
                        }
                    ?>
                </div>
                
            </div>        



            <div id="yop">
                <a href="#">YOP</a>
            </div>
        </div>

       
    </header>

    <footer>
        <p>
        
        Nous contacter
        </p>
    </footer>
    
    <div id="fondLogin" style='background-color: rgba(0, 0, 0, 0.6); position: absolute; height: 100%; width: 100%;'>
    </div>
    <div id="loginDiv2">
        <form id="formLogin" method="post" action="/login.php?url=http://jesuisuncanard.hol.es/DeePGameS">
            <label for="id">ID: </label>
            <input type=text name="ID" id="ID" placeholder="UserName"/><br><br>
            <label for="password">Pass: </label>
            <input type="password" name="password" id="password" placeholder="Password"/><br><br><br>
            <input type="image" src="login.png" name="login2" id="login2">
        </form>
    </div>
    <div id="signupDiv2">
        <form>
            <label for="ID2">ID: </label>
            <input type="text" name="ID" id="ID2" /><br><br>
            <label for="password2">Pass: </label>
            <input type="password" name="password" id="password2" /><br><br>
            <label for="passConfirm">Confirm Pass: </label>
            <input type="password" name="passConfirm" id="passConfirm"/><br><br>
            <label for="pseudo">Pseudo: </label>
            <input type="text" name="pseudo" id="pseudo"/><br><br>
            <label for="email">eMail: </label>
            <input type="email" name="email" id="email"/><br><br><br>
            <input type="image" src="signup.png" name="signup2" id="signup2">
        </form>
    </div>


    <script>
        $(document).ready(function() {
            $('#login').click(function(){
                /*var username = prompt('mail: ');
                var password = prompt('password: ');
                /*xhr.open('POST', '/login.php?http://jesuisuncanard.hol.es/DeePGameS');
            
                form.append('username', username);
                form.append('password', password);
            
                xhr.send(form);* /
                $('#user1').val(username);
                $('#pass1').val(password);
                
                $('#loginForm').submit();*/
                $('#loginDiv2').css({
                    top: '-800px',
                    bottom : '',
                    transition: '1s'
                });
                
                $('#loginDiv2').css('visibility', 'visible');
                $('#fondLogin').css('visibility', 'visible');
                $('#loginDiv2').animate({top: '0px', bottom: '0px'}, 1000);
            });
            
            $('#login2').click(function(){
                $('#formLogin').submit();
            });
            
            $('#signup').click(function(){
                /*var username2 = prompt('username: ');
                var password2 = prompt('password: ');
                var mail1 = prompt('mail: ');
                
                if(username2 !== null && password2 !== null && mail1 !== null)
                {
                var xhr = new XMLHttpRequest();
                
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                        var result = xhr.responseText;
                        console.log(result);
                
                        if(result == 1)
                        {
                            alert('existe deja dsl!');
                        }
                        else{
                            console.log('username2: ' + username2);
                            $('#user2').val(username2);
                            $('#pass2').val(password2);
                            $('#mail1').val(mail1);
                
                            $('#signupForm').submit();
                        }
                    }
                };
                
                xhr.open("GET", "http://www.jesuisuncanard.hol.es/comptetest.php?mail=" + mail1, true);
                xhr.send(null);
                }
                else
                    alert('tu as annule quelque part!');
                    */
                $('#signupDiv2').css({
                    top: '-800px',
                    bottom : '',
                    transition: '1s'
                });
                
                $('#signupDiv2').css('visibility', 'visible');
                $('#fondLogin').css('visibility', 'visible');
                $('#signupDiv2').animate({top: '0px', bottom: '0px'}, 1000);
            });
            
            $('#signup2').click(function(){
                 
            });
            
            
            $('#fondLogin').click(function(){
                $('#loginDiv2').css({
                    top: '-800px',
                    bottom : '',
                    transition: '0s'
                });
                $('#signupDiv2').css({
                    top: '-800px',
                    bottom : '',
                    transition: '0s'
                });
                $('#loginDiv2').css('visibility', 'hidden');
                $('#fondLogin').css('visibility', 'hidden');
                $('#signupDiv2').css('visibility', 'hidden');
            });
            
            $('#disconnect').click(function(){
                $.get('/disconnect.php');
                window.location.reload();
                
            });
        });
    </script>

</body>
</html>