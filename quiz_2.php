
<html>
<head>
    <title>quiz_2</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="js/respond.js"></script>
    <style type='text/css'>
        body {
            background-color: #000000;
        }

        h3{
            font-family: 'Roboto Condensed', sans-serif;
        }
        
        label{
            font-family: 'Lora', serif;
        }

        #wrapper {
            
             width:1024px;
             height:auto;
             padding: 13px;
             margin-right:auto;
             margin-left:auto;
             background-color:#fff;
            
        }

        #sub {
            position: relative;
            bottom: 0;
            left: 900px;
            right: 0;
        }
    </style>

<script>
function confirmSubmit(){

    if (confirm("Are you sure to submit your answers") == true) {
       
    } else {
        return false;
    }
}

</script>

    <SCRIPT language=Javascript>       
        function NoRightClick(evnt) {       
        if (navigator.appName.toUpperCase().match(/NETSCAPE/) != null)
        {       
        if (evnt.which == 3)
        {alert("Right click blocked! ©Copyright of My Eye Media.");return false;
        }
        }else       
        if (event.button==2)alert("Right click blocked! ©Copyright of My Eye Media.");
        }       
        document.onmousedown = NoRightClick; 


        function dm(){return false;} 
        function dp(e){if(e.which==1)
        {w=window;w.releaseEvents(Event.MOUSEMOVE);w.onmousemove=null;}} 
        function da(){{alert("This function is disabled. ©Copyright of My Eye Media.");return false;}} 
        function dd(e){if(e.which==3){return da();}}
        function cm(){hg=event.button;if(hg==2||hg==3)da();}
        d=document;w=window;vc=d.all;qb=d.getElementById;
        if(vc){if(qb){d.oncontextmenu=da;d.onselectstart=dm}else{d.onmousedown=cm;}}
        if(qb&&!vc){d.onmousedown=dm;d.onmouseup=dd;d.oncontextmenu=dm;}
        if(d.layers){w=window;w.captureEvents(event.MOUSEUP|event.MOUSEDOWN);w.onmousedown=dd;w.onmouseup=dp;}  
    </SCRIPT>

</head>


<body bgcolor='#e1e1e1'>

<?php


    //Creating random number s

    $rid = 1;
//  $rid = rand(1,3);
    //echo $rid;
?>

<div id='wrapper'>
    <div class="row">

<center><font face='Andalus' size='15'>Captions</font></center>
<br />
<br />
<br /><br />

<?php
    session_start();
    if ($_SESSION['testcomplete'] == 'yes') {
        header("Location:index.php");
    }


    $lname=$_GET['lname'];
    $fname=$_GET['fname'];
    $email=$_GET['email'];
    date_default_timezone_set("America/Los_Angeles");
    // echo "Today is " . date("Y-m-d h:i:sa") . "<br>";
    // echo "The time is " . date("h:i:sa");

    $PTZ = new DateTimeZone('America/Los_Angeles');
    $dt = new DateTime(date("m/d/Y h:i:sa"),$PTZ);
    $start_time = $dt->format('m/d/Y h:i:sa'); 
    // echo $start_time;

    if ($rid == 1){
    // echo " First name :$fname";
    // echo " Start Time :$start_time";
    echo "
<form action='process.php?id=2' method='post' id='quizForm' id='2'>
    <input type=\"hidden\" name=\"lname\" id=\"lname\" value=\"$lname\" />
    <input type=\"hidden\" name=\"fname\" id=\"fname\" value=\"$fname\" />
    <input type=\"hidden\" name=\"email\" id=\"email\" value=\"$email\" />
    <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"$start_time\" />

    <ol>
   
        <li>
        <h3>Match the timed text error code with its definition: CONTENT: Incorrect Content</h3>
        <div>
        <input type='radio' name='answer_1' id='ans1_1' value='A' />
        <label for='ans1_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_2' value='B' />
        <label for='ans1_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_3' value='C' />
        <label for='ans1_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_4' value='D' />
        <label for='ans1_4'>  D) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_5' value='E' />
        <label for='ans1_5'>  E) The file reads like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_6' value='F' />
        <label for='ans1_6'>  F) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_7' value='G' />
        <label for='ans1_7'>  G) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_8' value='H' />
        <label for='ans1_8'>  H) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_9' value='I' />
        <label for='ans1_9'>  I) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_10' value='J' />
        <label for='ans1_10'>  J) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>
        </li>
        
        <li>
        <h3>Match the timed text error code with its definition: CONTENT: Incorrect Language</h3>
        <div>
        <input type='radio' name='answer_2' id='ans2_1' value='A' />
        <label for='ans2_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_2' id='ans2_2' value='B' />
        <label for='ans2_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_2' id='ans2_3' value='C' />
        <label for='ans2_3'>  C) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_4' value='D' />
        <label for='ans2_4'>  D) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_5' value='E' />
        <label for='ans2_5'>  E) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_6' value='F' />
        <label for='ans2_6'>  F) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_7' value='G' />
        <label for='ans2_7'>  G) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_8' value='H' />
        <label for='ans2_8'>  H) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_9' value='I' />
        <label for='ans2_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_10' value='J' />
        <label for='ans2_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: CONTENT: Incorrect Audience</h3>
        <div>
        <input type='radio' name='answer_3' id='ans3_1' value='A' />
        <label for='ans3_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_3' id='ans3_2' value='B' />
        <label for='ans3_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_3' id='ans3_3' value='C' />
        <label for='ans3_3'>  C) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_4' value='D' />
        <label for='ans3_4'>  D) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_5' value='E' />
        <label for='ans3_5'>  E) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_6' value='F' />
        <label for='ans3_6'>  F) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_7' value='G' />
        <label for='ans3_7'>  G) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_8' value='H' />
        <label for='ans3_8'>  H) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_9' value='I' />
        <label for='ans3_9'>  I) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_10' value='J' />
        <label for='ans3_10'>  J) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: CONTENT: Unidiomatic/Mis-hear</h3>
        <div>
        <input type='radio' name='answer_4' id='ans4_1' value='A' />
        <label for='ans4_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_2' value='B' />
        <label for='ans4_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_3' value='C' />
        <label for='ans4_3'>  C) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_4' value='D' />
        <label for='ans4_4'>  D) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_5' value='E' />
        <label for='ans4_5'>  E) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_6' value='F' />
        <label for='ans4_6'>  F) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_7' value='G' />
        <label for='ans4_7'>  G) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_8' value='H' />
        <label for='ans4_8'>  H) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_9' value='I' />
        <label for='ans4_9'>  I) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_10' value='J' />
        <label for='ans4_10'>  J) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: CONTENT: Captions Missing</h3>
        <div>
        <input type='radio' name='answer_5' id='ans5_1' value='A' />
        <label for='ans5_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_2' value='B' />
        <label for='ans5_2'>  B) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_3' value='C' />
        <label for='ans5_3'>  C) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_4' value='D' />
        <label for='ans5_4'>  D) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_5' value='E' />
        <label for='ans5_5'>  E) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_6' value='F' />
        <label for='ans5_6'>  F) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_7' value='G' />
        <label for='ans5_7'>  G) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_8' value='H' />
        <label for='ans5_8'>  H) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_9' value='I' />
        <label for='ans5_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_10' value='J' />
        <label for='ans5_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: TIMING: Wrong Frame Rate - Early</h3>
        <div>
        <input type='radio' name='answer_6' id='ans6_1' value='A' />
        <label for='ans6_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_2' value='B' />
        <label for='ans6_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_3' value='C' />
        <label for='ans6_3'>  C) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_4' value='D' />
        <label for='ans6_4'>  D) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_5' value='E' />
        <label for='ans6_5'>  E) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_6' value='F' />
        <label for='ans6_6'>  F) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_7' value='G' />
        <label for='ans6_7'>  G) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_8' value='H' />
        <label for='ans6_8'>  H) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_9' value='I' />
        <label for='ans6_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_10' value='J' />
        <label for='ans6_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: TIMING: Wrong Frame Rate - Late</h3>
        <div>
        <input type='radio' name='answer_7' id='ans7_1' value='A' />
        <label for='ans7_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_2' value='B' />
        <label for='ans7_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_3' value='C' />
        <label for='ans7_3'>  C) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_4' value='D' />
        <label for='ans7_4'>  D) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_5' value='E' />
        <label for='ans7_5'>  E) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_6' value='F' />
        <label for='ans7_6'>  F) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_7' value='G' />
        <label for='ans7_7'>  G) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_8' value='H' />
        <label for='ans7_8'>  H) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_9' value='I' />
        <label for='ans7_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_10' value='J' />
        <label for='ans7_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: TIMING: Offset</h3>
        <div>
        <input type='radio' name='answer_8' id='ans8_1' value='A' />
        <label for='ans8_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_2' value='B' />
        <label for='ans8_2'>  B) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_3' value='C' />
        <label for='ans8_3'>  C) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_4' value='D' />
        <label for='ans8_4'>  D) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_5' value='E' />
        <label for='ans8_5'>  E) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_6' value='F' />
        <label for='ans8_6'>  F) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_7' value='G' />
        <label for='ans8_7'>  G) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_8' value='H' />
        <label for='ans8_8'>  H) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_9' value='I' />
        <label for='ans8_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_10' value='J' />
        <label for='ans8_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: TIMING: Sporadic</h3>
        <div>
        <input type='radio' name='answer_9' id='ans9_1' value='A' />
        <label for='ans9_1'>  A) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_2' value='B' />
        <label for='ans9_2'>  B) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_3' value='C' />
        <label for='ans9_3'>  C) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_4' value='D' />
        <label for='ans9_4'>  D) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_5' value='E' />
        <label for='ans9_5'>  E) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_6' value='F' />
        <label for='ans9_6'>  F) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_7' value='G' />
        <label for='ans9_7'>  G) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_8' value='H' />
        <label for='ans9_8'>  H) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_9' value='I' />
        <label for='ans9_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_10' value='J' />
        <label for='ans9_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: TIMING: Duration Long/Short</h3>
        <div>
        <input type='radio' name='answer_10' id='ans10_1' value='A' />
        <label for='ans10_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_2' value='B' />
        <label for='ans10_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_3' value='C' />
        <label for='ans10_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_4' value='D' />
        <label for='ans10_4'>  D) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_5' value='E' />
        <label for='ans10_5'>  E) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_6' value='F' />
        <label for='ans10_6'>  F) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_7' value='G' />
        <label for='ans10_7'>  G) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_8' value='H' />
        <label for='ans10_8'>  H) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_9' value='I' />
        <label for='ans10_9'>  I) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_10' value='J' />
        <label for='ans10_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: FORMATTING: Corruption</h3>
        <div>
        <input type='radio' name='answer_11' id='ans11_1' value='A' />
        <label for='ans11_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_2' value='B' />
        <label for='ans11_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_3' value='C' />
        <label for='ans11_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_4' value='D' />
        <label for='ans11_4'>  D) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_5' value='E' />
        <label for='ans11_5'>  E) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_6' value='F' />
        <label for='ans11_6'>  F) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_7' value='G' />
        <label for='ans11_7'>  G) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_8' value='H' />
        <label for='ans11_8'>  H) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_9' value='I' />
        <label for='ans11_9'>  I) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_10' value='J' />
        <label for='ans11_10'>  J) The timed text file is out of sync in random places and doesn't following any common sync pattern.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: FORMATTING: Positioning</h3>
        <div>
        <input type='radio' name='answer_12' id='ans12_1' value='A' />
        <label for='ans12_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_2' value='B' />
        <label for='ans12_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_3' value='C' />
        <label for='ans12_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_4' value='D' />
        <label for='ans12_4'>  D) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_5' value='E' />
        <label for='ans12_5'>  E) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_6' value='F' />
        <label for='ans12_6'>  F) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_7' value='G' />
        <label for='ans12_7'>  G) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_8' value='H' />
        <label for='ans12_8'>  H) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_9' value='I' />
        <label for='ans12_9'>  I) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_10' value='J' />
        <label for='ans12_10'>  J) The timed text file is running at a slower speed than the audio and video.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: FORMATTING: Line Length</h3>
        <div>
        <input type='radio' name='answer_13' id='ans13_1' value='A' />
        <label for='ans13_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_2' value='B' />
        <label for='ans13_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_3' value='C' />
        <label for='ans13_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_4' value='D' />
        <label for='ans13_4'>  D) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_5' value='E' />
        <label for='ans13_5'>  E) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_6' value='F' />
        <label for='ans13_6'>  F) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_7' value='G' />
        <label for='ans13_7'>  G) Any timed text event that contains five or more lines of text.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_8' value='H' />
        <label for='ans13_8'>  H) The timed text asset is in another language or does not match the language it is labeled.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_9' value='I' />
        <label for='ans13_9'>  I) The timed text file is running at a slower speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_10' value='J' />
        <label for='ans13_10'>  J) Any instance of timed text not displaying correctly, including issues with letters, spacing, color, italics, etc.</label>
        </div>
        </li>

        <li>
        <h3>Match the timed text error code with its definition: FORMATTING: Exceeeds 4 Line Max</h3>
        <div>
        <input type='radio' name='answer_14' id='ans14_1' value='A' />
        <label for='ans14_1'>  A) Any line of text that extends to the very edge or beyond the edge of the screen.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_14' id='ans14_2' value='B' />
        <label for='ans14_2'>  B) The timed text asset is for those who can hear but don't necessarily understand the language of the audio.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_14' id='ans14_3' value='C' />
        <label for='ans14_3'>  C) Any timed text event that covers on-screen text rendering the on-screen text or the caption difficult to read, as well as events that are raised towards the middle of the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_4' value='D' />
        <label for='ans14_4'>  D) Plot-pertinent dialogue is not included in the caption file.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_5' value='E' />
        <label for='ans14_5'>  E) The timed text file is running at a faster speed than the audio and video.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_6' value='F' />
        <label for='ans14_6'>  F) The file seems like it was translated by a non-native speaker or by a machine and/or there are mistakes throughout.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_7' value='G' />
        <label for='ans14_7'>  G) The entire timed text file is off audio by the same amount of time throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_8' value='H' />
        <label for='ans14_8'>  H) Any timed text event besides song lyrics that remains on screen for over 10 seconds or less than Â½ second.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_9' value='I' />
        <label for='ans14_9'>  I) The timed text file is for another title.</label>
        </div>

        <div>
        <input type='radio' name='answer_14' id='ans14_10' value='J' />
        <label for='ans14_10'>  J) Any timed text event that contains five or more lines of text.</label>
        </div>
        </li>

        <li>
        <h3>You should report &quot;Content: Incorrect Audience&quot; if the captions are in a different language than the audio.</h3>
        <div>
        <input type='radio' name='answer_15' id='ans15_1' value='A' />
        <label for='ans15_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_15' id='ans15_2' value='B' />
        <label for='ans15_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>You should report &quot;Content: Un-idiomatic/Mis-hear&quot; any and every time the captions don't say verbatim what the character on-screen says.</h3>
        <div>
        <input type='radio' name='answer_16' id='ans16_1' value='A' />
        <label for='ans16_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_16' id='ans16_2' value='B' />
        <label for='ans16_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>You should report &quot;Content: Incorrect Audience&quot; every single time you hear a sound that does not have a sound cue.</h3>
        <div>
        <input type='radio' name='answer_17' id='ans17_1' value='A' />
        <label for='ans17_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_17' id='ans17_2' value='B' />
        <label for='ans17_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>You should report ANY caption that is more than two lines as which of the following errors?</h3>
        <div>
        <input type='radio' name='answer_18' id='ans18_1' value='A' />
        <label for='ans18_1'>  A) Formatting: Exceeds Four-Line Max.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_18' id='ans18_2' value='B' />
        <label for='ans18_2'>  B) Formatting: Exceeds Two-Line Max.</label>
        </div>

        <div>
        <input type='radio' name='answer_18' id='ans18_3' value='C' />
        <label for='ans18_3'>  C) Formatting: Positioning.</label>
        </div>

        <div>
        <input type='radio' name='answer_18' id='ans18_4' value='D' />
        <label for='ans18_4'>  D) Formatting: Corruption.</label>
        </div>

        <div>
        <input type='radio' name='answer_18' id='ans18_5' value='E' />
        <label for='ans18_5'>  E) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>If AT LEAST the last 9 captions at the end of the file are out of sync (there could be more out of sync), which of the following error codes would NOT be a possible issue?</h3>
        <div>
        <input type='radio' name='answer_19' id='ans19_1' value='A' />
        <label for='ans19_1'>  A) Timing: Incorrect Frame Rate - Early.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_19' id='ans19_2' value='B' />
        <label for='ans19_2'>  B) Timing: Incorrect Frame Rate - Late.</label>
        </div>

        <div>
        <input type='radio' name='answer_19' id='ans19_3' value='C' />
        <label for='ans19_3'>  C) Timing: Offset.</label>
        </div>

        <div>
        <input type='radio' name='answer_19' id='ans19_4' value='D' />
        <label for='ans19_4'>  D) Timing: Sporadic Sync.</label>
        </div>

        <div>
        <input type='radio' name='answer_19' id='ans19_5' value='E' />
        <label for='ans19_5'>  E) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>If the caption file is in the incorrect language, you should still check the file for other issues such as formatting and timing.</h3>
        <div>
        <input type='radio' name='answer_20' id='ans20_1' value='A' />
        <label for='ans20_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_20' id='ans20_2' value='B' />
        <label for='ans20_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>Which of the following errors should not be reported with &quot;Formatting: Corruption&quot;?</h3>
        <div>
        <input type='radio' name='answer_21' id='ans21_1' value='A' />
        <label for='ans21_1'>  A) Extra empty lines between two lines of text for one-speaker in a caption.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_21' id='ans21_2' value='B' />
        <label for='ans21_2'>  B) Italics are missing for narration.</label>
        </div>

        <div>
        <input type='radio' name='answer_21' id='ans21_3' value='C' />
        <label for='ans21_3'>  C) All accents and/or diacritical marks are missing throughout the file.</label>
        </div>

        <div>
        <input type='radio' name='answer_21' id='ans21_4' value='D' />
        <label for='ans21_4'>  D) A caption changes color in the middle of the sentence.</label>
        </div>
        </li>

        <li>
        <h3>You should report any captions that are four or more lines as &quot;Formatting: Exceeds Four-Line Max&quot;?</h3>
        <div>
        <input type='radio' name='answer_22' id='ans22_1' value='A' />
        <label for='ans22_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_22' id='ans22_2' value='B' />
        <label for='ans22_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>Under which of the following circumstances should you NOT report &quot;Formatting: Positioning&quot;? Select all that apply</h3>
        <div>
        <input type='checkbox' name='answer_23[]' id='ans23_1' value='A' />
        <label for='ans23_1'>  A) Captions that appear in the middle of the screen. </label>
        </div>
        
        <div>
        <input type='checkbox' name='answer_23[]' id='ans23_2' value='B' />
        <label for='ans23_2'>  B) Captions that are raised to avoid covering a character's face. </label>
        </div>
        
        <div>
        <input type='checkbox' name='answer_23[]' id='ans23_3' value='C' />
        <label for='ans23_3'>  C) Captions that do cover a character's face </label>
        </div>

        <div>
        <input type='checkbox' name='answer_23[]' id='ans23_4' value='D' />
        <label for='ans23_4'>  D) Captions that are left justified and left aligned </label>
        </div>
        </li>

        <li>
        <h3>If the caption file is not in the same language as the audio, you should report which of the following error codes?</h3>
        <div>
        <input type='radio' name='answer_24' id='ans24_1' value='A' />
        <label for='ans24_1'>  A) Content: Incorrect Language.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_24' id='ans24_2' value='B' />
        <label for='ans24_2'>  B) Content: Incorrect Audience.</label>
        </div>

        <div>
        <input type='radio' name='answer_24' id='ans24_3' value='C' />
        <label for='ans24_3'>  C) Content: Incorrect Content.</label>
        </div>

        <div>
        <input type='radio' name='answer_24' id='ans24_4' value='D' />
        <label for='ans24_4'>  D) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>If you see a huge explosion on screen, but there is no sound cue, which of the following errors should you report?</h3>
        <div>
        <input type='radio' name='answer_25' id='ans25_1' value='A' />
        <label for='ans25_1'>  A) Content: Captions Missing.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_25' id='ans25_2' value='B' />
        <label for='ans25_2'>  B) Content: Non-idiomatic/Mis-hear.</label>
        </div>

        <div>
        <input type='radio' name='answer_25' id='ans25_3' value='C' />
        <label for='ans25_3'>  C) Content: Incorrect Content.</label>
        </div>

        <div>
        <input type='radio' name='answer_25' id='ans25_4' value='D' />
        <label for='ans25_4'>  D) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>You should report &quot;Timing: Duration Long/Short&quot; when you see music notes that remain on screen for the duration of a song.</h3>
        <div>
        <input type='radio' name='answer_26' id='ans26_1' value='A' />
        <label for='ans26_1'>  A) True.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_26' id='ans26_2' value='B' />
        <label for='ans26_2'>  B) False.</label>
        </div>
        </li>

        <li>
        <h3>Which of the following error code(s) should you report if the captions start in sync, then start to fire earlier and earlier towards the middle, and then later and later by the end?</h3>
        <div>
        <input type='radio' name='answer_27' id='ans27_1' value='A' />
        <label for='ans27_1'>  A) ONLY Timing: Wrong Frame Rate - Late.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_27' id='ans27_2' value='B' />
        <label for='ans27_2'>  B) ONLY Timing: Wrong Frame Rate - Early.</label>
        </div>

        <div>
        <input type='radio' name='answer_27' id='ans27_3' value='C' />
        <label for='ans27_3'>  C) BOTH Timing: Wrong Frame Rate - Late and Timing: Wrong Frame Rate - Early.</label>
        </div>

        <div>
        <input type='radio' name='answer_27' id='ans27_4' value='D' />
        <label for='ans27_4'>  D) Timing: Sporadic Sync.</label>
        </div>

        <div>
        <input type='radio' name='answer_27' id='ans27_5' value='E' />
        <label for='ans27_5'>  E) Timing: Duration Long/Short.</label>
        </div>
        </li>

        <li>
        <h3>If you find five instances of periods that would be better as exclamation points, which of the following error codes should you use to report this?</h3>
        <div>
        <input type='radio' name='answer_28' id='ans28_1' value='A' />
        <label for='ans28_1'>  A) Content: Incorrect Content.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_28' id='ans28_2' value='B' />
        <label for='ans28_2'>  B) Content: Incorrect Language.</label>
        </div>

        <div>
        <input type='radio' name='answer_28' id='ans28_3' value='C' />
        <label for='ans28_3'>  C) Content: Unidiomatic/Mis-hear.</label>
        </div>

        <div>
        <input type='radio' name='answer_28' id='ans28_4' value='D' />
        <label for='ans28_4'>  D) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>If you click to the middle of a video and immediately see a caption that stays on screen for over 10 seconds, which of the following should you do?</h3>
        <div>
        <input type='radio' name='answer_29' id='ans29_1' value='A' />
        <label for='ans29_1'>  A) Report the error &quot;Timing: Duration Long/Short&quot;.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_29' id='ans29_2' value='B' />
        <label for='ans29_2'>  B) Rewatch that section starting a few seconds before that caption would appear.</label>
        </div>

        <div>
        <input type='radio' name='answer_29' id='ans29_3' value='C' />
        <label for='ans29_3'>  C) Unassign the asset.</label>
        </div>

        <div>
        <input type='radio' name='answer_29' id='ans29_4' value='D' />
        <label for='ans29_4'>  D) Just ignore that one since it's probably a bug in the CQC player.</label>
        </div>
        </li>

        <li>
        <h3>Which of the following error codes should you report if you encounter a caption file at 23.976 frames per second playing against a video at 24 frames per second?</h3>
        <div>
        <input type='radio' name='answer_30' id='ans30_1' value='A' />
        <label for='ans30_1'>  A) Timing: Sporadic.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_30' id='ans30_2' value='B' />
        <label for='ans30_2'>  B) Timing: Wrong Frame Rate - Late.</label>
        </div>

        <div>
        <input type='radio' name='answer_30' id='ans30_3' value='C' />
        <label for='ans30_3'>  C) Timing: Wrong Frame Rate - Early.</label>
        </div>

        <div>
        <input type='radio' name='answer_30' id='ans30_4' value='D' />
        <label for='ans30_4'>  D) None of the above.</label>
        </div>
        </li>

        <li>
        <h3>If you've found 2 instances of character corruptions, how many more should you find before clicking done and moving on to the next title?</h3>
        <div>
        <input type='radio' name='answer_31' id='ans31_1' value='A' />
        <label for='ans31_1'>  A) 1.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_31' id='ans31_2' value='B' />
        <label for='ans31_2'>  B) 2.</label>
        </div>

        <div>
        <input type='radio' name='answer_31' id='ans31_3' value='C' />
        <label for='ans31_3'>  C) 3.</label>
        </div>

        <div>
        <input type='radio' name='answer_31' id='ans31_4' value='D' />
        <label for='ans31_4'>  D) 0.</label>
        </div>
        </li>

    </ol>
    <button id='sub' class='btn btn-primary btn-lg' onclick='return confirmSubmit()'>Submit</button>
    
</form>";

}

?>
    </div>
</div><!--- end of wrapper div -->

<footer class="row">
    <div class="footer">
        ©Copyright 2014 My Eye Media | <a href="http://www.myeyemedia.com/main.html">Site Map</a> | <a href="http://www.myeyemedia.com/privacy.html">Privacy Policy</a> | 
        <a href="http://www.myeyemedia.com/terms.html">Terms &amp; Conditions</a> | Site by 2014 summer interns of My Eye Media, LLC.
    </div>
</footer>

</body>
</html>
