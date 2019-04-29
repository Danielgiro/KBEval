<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
      <style type="text/css">
        a.send-button{
      margin-top: 30px;
      margin-bottom: 30px;
      color: white;
      border-radius: 1px;
      background-color: #888;
      border: 1px #888;
      padding: 14px 40px;
      font-family: Sense;
      font-size: 24px;
      cursor:pointer;
      transition-duration: 0.2s;
        }
        h5.sentence{ margin-left: 1em; font-family: Sense;}
        }
      </style>
<body>
<?php
function extractInfo($fname) {
    $var = $_POST[$fname];
    return $var;
}
?>


<?php $alum = extractInfo("Student");?><br>
<center><h5 class="sentence"><?php echo("{$alum} Evaluation Has Been Sended") ?></h5><br>
<a href="https://childrenevaluationtemplatekb.000webhostapp.com/Children%20Evaluation%20Template.html" class="send-button">Evaluate other Students</a></center>
<?php $prof = extractInfo("Teacher");?>
<?php $lang = extractInfo("Language");?>

<?php $book =  extractInfo("book");?>
<?php $grammar =  extractInfo("grammar");?>

<?php $Attitude =  extractInfo("Attitude");?>
<?php $Attcomment =  extractInfo("act-com");?>

<?php $Parti =  extractInfo("Participation");?>
<?php $Particomment =  extractInfo("parti-com");?>

<?php $Speaking =  extractInfo("Speaking");?>
<?php $Speakcomment =  extractInfo("speak-com");?>

<?php $Listening =  extractInfo("Speaking");?>
<?php $Listencomment =  extractInfo("speak-com");?>

<?php $Writing =  extractInfo("Writing");?>
<?php $Writecomment =  extractInfo("write-com");?>

<?php $Reading =  extractInfo("Reading");?>
<?php $Readcomment =  extractInfo("read-com");?>

<?php $directoryName = "Evaluacions/".$prof;

if (!is_dir($directoryName)){
  mkdir($directoryName);
}
?>
<?php //CREACIÓ HTML

$myFile = "Evaluacions/{$prof}/{$alum} - {$lang}.html"; // or .php   
$fh = fopen($myFile, 'w'); // or die("error");
$stringHead = '<!DOCTYPE html>
<html>
<head>
<title id="title-id">'.$alum.' Evaluation</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" 
      type="image/png" 
      href="../../favicon.png">
      <style type="text/css">
        @font-face{ font-family: Sense;src:"../../Sense_Reg"; }
        h1.title{font-family: Sense; font-size: 40px}
      	h4.outbox{ margin-left: 2em; margin-top: 2em;font-family: Sense; font-size: 24px;}
      	h5.outbox{ margin-left: 2em; font-family: Sense;}
      	p.peu{ color:#888 ;margin-left: 4em; font-size: 12px; }
      	div.box-title{
			  background-color: #999;
  			border-bottom: 1px solid black;
  			padding-top: 2px;
  			margin-right: 20px;
  			margin-left: 20px;

      	}
      	table{

      		margin-right: 20px;
  			margin-left: 20px;  			
  			border:1px solid black;
      	}
      	th{			
  			background-color: #999;
  			padding:20px;
  			width:250px;
  			height: auto;
  			color:white;

      	}
      	td{
			background-color: lightgrey;
			padding:20px;
			width: 1500px;
			height: auto;
      	}

      </style>

  </head>
  ';
$stringData = '  <body>
<h4 class="outbox"><p id="alum-id"> ALUMNE/A:  &nbsp'.$alum.'</p>
<p id="prof-id"> PROFESSOR: &nbsp '.$prof.'</p>
<p id="lang-id"> IDIOMA: &nbsp '.$lang.'</h4>
  	<img style="position:absolute;top:0px;left:75%;width:306px;border: 5px #888" src="../../Logo Kingsbrook gris.jpg" class="image-logo" alt="Kingsbrook Logo"/>
<br>
<div class="box-title">
	<center><h1 class="title"><b>EVALUACIÓ CURS 2018-2019</b></h1></center>
</div>
<br>
<h5 class="outbox">
<p id="book-id">- Llibre utilitzat / <i>Book used: &nbsp </i> '.$book.'</p>
<p id="grammar-id">- Gramàtica / <i>Grammar: &nbsp </i> '.$grammar.'</p>
</h5>
<br>
<table>
<tr>
	<th>ACTITUD<br><br><i>ATTITUDE</i></th>
	<td id="act-id">'.$Attitude.'</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-act">'.$Attcomment.'</td>
</tr>
</table>
<br>
<br>
<table>
<tr>
	<th>PARTICIPACIÓ I MOTIVACIÓ<br><br><i>PARTICIPATION AND MOTIVATION</i></th>
	<td id="parti-id">'.$Parti.'</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-parti">'.$Particomment.'</td>
</tr>
</table>
<br>
<br>
<table>
<tr>
	<th>EXPRESSIÓ ORAL<br><br><i>SPEAKING</i></th>
	<td id="speak-id">'.$Speaking.'</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-speak">'.$Speakcomment.'</td>
</tr>
</table>
<br>
<br>
<table>
<tr>
	<th>COMPRENSIÓ ORAL<br><br><i>LISTENING</i></th>
	<td id="listen-id">'.$Listening.'</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-listen">'.$Listencomment.'</td>
</tr>
</table>
<br>
<br>
<table>
<tr>
	<th>EXPRESSIÓ ESCRITA<br><br><i>WRITING</i></th>
	<td id="write-id">' .$Writing. '</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-write">'.$Writecomment.'</td>
</tr>
</table>
<br>
<br>
<table>
<tr>
	<th>COMPRENSIÓ ESCRITA<br><br><i>READING</i></th>
	<td id="read-id"> '.$Reading.'</td>
</tr>
<tr>
	<th>COMENTARIS<br><i>COMMENTS</i></th>
	<td id="com-read">'.$Readcomment.'</td>
</tr>
</table>
<br>
<br>
<p class="peu">K I N G S B R O O K&nbsp&nbsp I D I O M A S  |  Travessera de Gràcia, 60 (08006 Barcelona)  |  T. (+34) 93 209 37 63  |  M. (+34) 628 004 799  |  infokingsbrookbcn.com</p>
 </body>
';   
fwrite($fh, $stringHead.$stringData);
fclose($fh);
?>

</body>
</html>