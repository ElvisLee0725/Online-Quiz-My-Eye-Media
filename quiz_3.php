<html>
<head>
    <title>quiz_3</title>
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

    $rid = 1;
?>

<div id='wrapper'>
    <div class='row'>

<center><font face='Andalus' size='15'>Video</b></font></center>
<br />
<br />
<br /><br />

<?php
	session_start();
    if ($_SESSION['testcomplete'] == 'yes') {
        header("Location:index.php");
    }

    date_default_timezone_set("America/Los_Angeles");
    //echo "Today is " . date("Y-m-d h:i:sa") . "<br>";
    //echo "The time is " . date("h:i:sa")."<br />";


    $PTZ = new DateTimeZone('America/Los_Angeles');
    $dt = new DateTime(date("m/d/Y h:i:sa"),$PTZ);
    $start_time = $dt->format('m/d/Y h:i:sa'); 
    //echo $start_time;

if ($rid == 1){
    $lname=$_GET['lname'];
    $fname=$_GET['fname'];
    $email=$_GET['email'];
    echo "
<form action='process.php?id=3' method='post' id='3'>
    <input type=\"hidden\" name=\"lname\" id=\"lname\" value=\"$lname\" />
    <input type=\"hidden\" name=\"fname\" id=\"fname\" value=\"$fname\" />
    <input type=\"hidden\" name=\"email\" id=\"email\" value=\"$email\" />
    <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"$start_time\" />

    <ol>
        <!-- q1 -->
        <li>
        <h3>Match the video error code with its definition : <b>ALIASING / JAGGIES</b> </h3>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_1' value='A' />
        <label for='ans1_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_2' value='B' />
        <label for='ans1_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_3' value='C' />
        <label for='ans1_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_4' value='D' />
        <label for='ans1_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_5' value='E' />
        <label for='ans1_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_6' value='F' />
        <label for='ans1_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_7' value='G' />
        <label for='ans1_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_8' value='H' />
        <label for='ans1_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_9' value='I' />
        <label for='ans1_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_1' id='ans1_10' value='J' />
        <label for='ans1_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>
        
        <!-- q2 -->
        <li>
        <h3>Match the video error code with its definition : <b>BLENDED FRAMES</b> </h3>
        
        <div>
        <input type='radio' name='answer_2' id='ans2_1' value='A' />
        <label for='ans2_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_2' id='ans2_2' value='B' />
        <label for='ans2_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_2' id='ans2_3' value='C' />
        <label for='ans2_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_4' value='D' />
        <label for='ans2_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_5' value='E' />
        <label for='ans2_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_6' value='F' />
        <label for='ans2_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_7' value='G' />
        <label for='ans2_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_8' value='H' />
        <label for='ans2_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_9' value='I' />
        <label for='ans2_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_2' id='ans2_10' value='J' />
        <label for='ans2_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>
        
        <!-- q3 -->
         <li>
        <h3>Match the video error code with its definition : <b>COMBING ARTIFACTS</b> </h3>
        
        <div>
        <input type='radio' name='answer_3' id='ans3_1' value='A' />
        <label for='ans3_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_3' id='ans3_2' value='B' />
        <label for='ans3_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_3' id='ans3_3' value='C' />
        <label for='ans3_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_4' value='D' />
        <label for='ans3_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_5' value='E' />
        <label for='ans3_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_6' value='F' />
        <label for='ans3_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_7' value='G' />
        <label for='ans3_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_8' value='H' />
        <label for='ans3_8'>  H) there are white blinking dashes running vertically across the top of the video.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_9' value='I' />
        <label for='ans3_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_3' id='ans3_10' value='J' />
        <label for='ans3_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

        <!-- q4 -->
        <li>
        <h3>Match the video error code with its definition : <b>COLOR ISSUES</b> </h3>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_1' value='A' />
        <label for='ans4_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_2' value='B' />
        <label for='ans4_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_3' value='C' />
        <label for='ans4_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_4' value='D' />
        <label for='ans4_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_5' value='E' />
        <label for='ans4_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_6' value='F' />
        <label for='ans4_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_7' value='G' />
        <label for='ans4_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_8' value='H' />
        <label for='ans4_8'>  H) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_9' value='I' />
        <label for='ans4_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_4' id='ans4_10' value='J' />
        <label for='ans4_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>
        
        <!-- q5 -->
        <li>
        <h3>Match the video error code with its definition : <b>COLOR BANDING</b> </h3>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_1' value='A' />
        <label for='ans5_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_2' value='B' />
        <label for='ans5_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_3' value='C' />
        <label for='ans5_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_4' value='D' />
        <label for='ans5_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_5' value='E' />
        <label for='ans5_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_6' value='F' />
        <label for='ans5_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_7' value='G' />
        <label for='ans5_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_8' value='H' />
        <label for='ans5_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_9' value='I' />
        <label for='ans5_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_5' id='ans5_10' value='J' />
        <label for='ans5_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

        <!-- q6 -->
        <li>
        <h3>Match the video error code with its definition : <b>EXTENDED COMMERCIAL BLACKS</b> </h3>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_1' value='A' />
        <label for='ans6_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_2' value='B' />
        <label for='ans6_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_3' value='C' />
        <label for='ans6_3'>  C) there are white blinking dashes running vertically across the top of the video.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_4' value='D' />
        <label for='ans6_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_5' value='E' />
        <label for='ans6_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_6' value='F' />
        <label for='ans6_6'>  F) there is any instance of the video going black for 4 or more seconds with no audio</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_7' value='G' />
        <label for='ans6_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_8' value='H' />
        <label for='ans6_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_9' value='I' />
        <label for='ans6_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_6' id='ans6_10' value='J' />
        <label for='ans6_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>
        
        <!-- q7 -->
        <li>
        <h3>Match the video error code with its definition : <b>VIDEO HITS</b> </h3>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_1' value='A' />
        <label for='ans7_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_2' value='B' />
        <label for='ans7_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_3' value='C' />
        <label for='ans7_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_4' value='D' />
        <label for='ans7_4'>  D) there are white blinking dashes running vertically across the top of the video.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_5' value='E' />
        <label for='ans7_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_6' value='F' />
        <label for='ans7_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_7' value='G' />
        <label for='ans7_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_8' value='H' />
        <label for='ans7_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_9' value='I' />
        <label for='ans7_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_7' id='ans7_10' value='J' />
        <label for='ans7_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

        <!-- q8 -->
        <li>
        <h3>Match the video error code with its definition : <b>VIDEO SHORT</b> </h3>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_1' value='A' />
        <label for='ans8_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_2' value='B' />
        <label for='ans8_2'>  B) the content of the video does not match the title of the program.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_3' value='C' />
        <label for='ans8_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_4' value='D' />
        <label for='ans8_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_5' value='E' />
        <label for='ans8_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_6' value='F' />
        <label for='ans8_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_7' value='G' />
        <label for='ans8_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_8' value='H' />
        <label for='ans8_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_9' value='I' />
        <label for='ans8_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_8' id='ans8_10' value='J' />
        <label for='ans8_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

        <!-- q9 -->
        <li>
        <h3>Match the video error code with its definition : <b>DROPPED FRAMES</b> </h3>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_1' value='A' />
        <label for='ans9_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_2' value='B' />
        <label for='ans9_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_3' value='C' />
        <label for='ans9_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_4' value='D' />
        <label for='ans9_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_5' value='E' />
        <label for='ans9_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_6' value='F' />
        <label for='ans9_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_7' value='G' />
        <label for='ans9_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_8' value='H' />
        <label for='ans9_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_9' value='I' />
        <label for='ans9_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_10' value='J' />
        <label for='ans9_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

         <!-- q10 -->
        <li>
        <h3>Match the video error code with its definition : <b>WRONG ASPECT RATIO</b> </h3>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_1' value='A' />
        <label for='ans10_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_2' value='B' />
        <label for='ans10_2'>  B) the content of the video does not match the title of the program.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_3' value='C' />
        <label for='ans10_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_4' value='D' />
        <label for='ans10_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_5' value='E' />
        <label for='ans10_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_6' value='F' />
        <label for='ans10_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_7' value='G' />
        <label for='ans10_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_8' value='H' />
        <label for='ans10_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_9' value='I' />
        <label for='ans10_9'>  I) the video does not play smoothly and the AV Stats Diagnostic tool confirms the issue is inherent in the source.</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_10' value='J' />
        <label for='ans10_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

         <!-- q11 -->
        <li>
        <h3>Match the video error code with its definition : <b>VIDEO HAS EXTRA CONTENT</b> </h3>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_1' value='A' />
        <label for='ans11_1'>  A) major degradation in the video image exhibited as jagged edges and a loss of clarity in shapes.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_2' value='B' />
        <label for='ans11_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_3' value='C' />
        <label for='ans11_3'>  C) the content of the video does not match the title of the program.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_4' value='D' />
        <label for='ans11_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_5' value='E' />
        <label for='ans11_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_6' value='F' />
        <label for='ans11_6'>  F) there is any instance of the video going black for 4 or more seconds with no audio</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_7' value='G' />
        <label for='ans11_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_8' value='H' />
        <label for='ans11_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_9' value='I' />
        <label for='ans11_9'>  I) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_11' id='ans11_10' value='J' />
        <label for='ans11_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>


         <!-- q12 -->
        <li>
        <h3>Match the video error code with its definition : <b>VIDEO ASSET IS INCORRECT CONTENT</b> </h3>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_1' value='A' />
        <label for='ans12_1'>  A) the content of the video does not match the title of the program.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_2' value='B' />
        <label for='ans12_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_3' value='C' />
        <label for='ans12_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_4' value='D' />
        <label for='ans12_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_5' value='E' />
        <label for='ans12_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_6' value='F' />
        <label for='ans12_6'>  F) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_7' value='G' />
        <label for='ans12_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_8' value='H' />
        <label for='ans12_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_9' value='I' />
        <label for='ans12_9'>  I) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_12' id='ans12_10' value='J' />
        <label for='ans12_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

         <!-- q13 -->
        <li>
        <h3>Match the video error code with its definition : <b>VIDEO CONTAINS VITC (VERTICAL INTERVAL TIMECODE)</b> </h3>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_1' value='A' />
        <label for='ans13_1'>  A) the content of the video does not match the title of the program.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_2' value='B' />
        <label for='ans13_2'>  B) noticeable motion artifacts in the video exhibited as frames blending together.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_3' value='C' />
        <label for='ans13_3'>  C) noticeable artifacts in the video that appear as if a comb has been swept across the image.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_4' value='D' />
        <label for='ans13_4'>  D) the contrast looks off.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_5' value='E' />
        <label for='ans13_5'>  E) there are abrupt changes between the shades of the same color (usually seen in displays of natural gradients.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_6' value='F' />
        <label for='ans13_6'>  F) there are white blinking dashes running vertically across the top of the video.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_7' value='G' />
        <label for='ans13_7'>  G) any instance of discolored squares appearing on the screen.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_8' value='H' />
        <label for='ans13_8'>  H) the video content cuts short.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_9' value='I' />
        <label for='ans13_9'>  I) there is any instance of color bars.</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_10' value='J' />
        <label for='ans13_10'>  J) the video seems squeezed or stretched OR the context of the aspect does not make sense with the video content.</label>
        </div>
        </li>

        <!-- q14-->
        <li>
        <h3>Which video errors MUST be consistently present throughout the entire file to warrant any flagging? Choose all that apply. </h3>
        <div>
        <input type='checkbox' name='answer_14[]' id='ans14_1' value='A' />
        <label for='ans14_1'>  A) aliasing/jaggies </label>
        </div>
        <div>
        <input type='checkbox' name='answer_14[]' id='ans14_2' value='B' />
        <label for='ans14_2'>  B) blended frames </label>
        </div>
        <div>
        <input type='checkbox' name='answer_14[]' id='ans14_3' value='C' />
        <label for='ans14_3'>  C) combing artifacts </label> 
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_4' value='D' />
        <label for='ans14_4'>  D) color banding &amp; color issues</label>
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_5' value='E' />
        <label for='ans14_5'>  E) VITC (vertical interval timecode) </label>
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_6' value='F' />
        <label for='ans14_6'>  F) dropped frames </label>
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_7' value='G' />
        <label for='ans14_7'>  G) wrong aspect ratio</label>
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_8' value='H' />
        <label for='ans14_8'>  H) extended commercial blacks</label>
        </div>
         <div>
        <input type='checkbox' name='answer_14[]' id='ans14_9' value='I' />
        <label for='ans14_9'>  I) video has extra content </label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans14_10' value='J' />
        <label for='ans14_10'>  J) video hit</label>
        </div>
        </li>

        <!-- q15-->
        <li>
        <h3>Which video errors do NOT need to be consistently present throughout the entire file to warrant any flagging? Choose all that apply. </h3>
        <div>
        <input type='checkbox' name='answer_15[]' id='ans15_1' value='A' />
        <label for='ans15_1'>  A) aliasing/jaggies </label>
        </div>
        <div>
        <input type='checkbox' name='answer_15[]' id='ans15_2' value='B' />
        <label for='ans15_2'>  B) blended frames </label>
        </div>
        <div>
        <input type='checkbox' name='answer_15[]' id='ans15_3' value='C' />
        <label for='ans15_3'>  C) combing artifacts </label> 
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_4' value='D' />
        <label for='ans15_4'>  D) color banding &amp; color issues</label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_5' value='E' />
        <label for='ans15_5'>  E) VITC (vertical interval timecode) </label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_6' value='F' />
        <label for='ans15_6'>  F) dropped frames </label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_7' value='G' />
        <label for='ans15_7'>  G) wrong aspect ratio</label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_8' value='H' />
        <label for='ans15_8'>  H) extended commercial blacks</label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_9' value='I' />
        <label for='ans15_9'>  I) video has extra content </label>
        </div>
         <div>
        <input type='checkbox' name='answer_15[]' id='ans15_10' value='J' />
        <label for='ans15_10'>  J) video hit</label>
        </div>
        </li>

         <!-- q16-->
        <li>
        <h3>How many instances should be flagged for blended frames?</h3>
        
        <div>
        <input type='radio' name='answer_16' id='ans16_1' value='A' />
        <label for='ans16_1'>  A) only 1 will ever be present</label>
        </div>
        
        <div>
        <input type='radio' name='answer_16' id='ans16_2' value='B' />
        <label for='ans16_2'>  B) 3-4 obvious examples</label>
        </div>

        <div>
        <input type='radio' name='answer_16' id='ans16_3' value='C' />
        <label for='ans16_3'>  C) as many issues as can be found in the Spot check</label>
        </div>
        </li>

        <!-- q17-->
        <li>
        <h3>What is the most common customer complaint about video?</h3>
        
        <div>
        <input type='radio' name='answer_17' id='ans17_1' value='A' />
        <label for='ans17_1'>  A) video asset is incorrect content</label>
        </div>
        
        <div>
        <input type='radio' name='answer_17' id='ans17_2' value='B' />
        <label for='ans17_2'>  B) video has extra content </label>
        </div>

        <div>
        <input type='radio' name='answer_17' id='ans17_3' value='C' />
        <label for='ans17_3'>  C) video has extended commercial blacks</label>
        </div>
        </li>

        <!-- q18-->
        <li>
        <h3>Every video issue found must be reproducible before flagging.</h3>
        
        <div>
        <input type='radio' name='answer_18' id='ans18_1' value='A' />
        <label for='ans18_1'>  A) True</label>
        </div>
        
        <div>
        <input type='radio' name='answer_18' id='ans18_2' value='B' />
        <label for='ans18_2'>  B) False </label>
        </div>
        </li>

        <!--delete Q19-->

        <!-- q21-->
        <li>
        <h3>How many instances of &quot;video short&quot; should be flagged?</h3>
        
        <div>
        <input type='radio' name='answer_20' id='ans20_1' value='A' />
        <label for='ans20_1'>  A) only 1 will ever be present</label>
        </div>
        
        <div>
        <input type='radio' name='answer_20' id='ans20_2' value='B' />
        <label for='ans20_2'>  B) 3-4 obvious examples</label>
        </div>

        <div>
        <input type='radio' name='answer_20' id='ans20_3' value='C' />
        <label for='ans20_3'>  C) as many issues as can be found in the Spot check</label>
        </div>
        </li>

        <!-- q22-->
        <li>
        <h3>How many instances should be flagged for each consistently present video error code?</h3>
        
        <div>
        <input type='radio' name='answer_21' id='ans21_1' value='A' />
        <label for='ans21_1'>  A) 3-4 obvious examples</label>
        </div>
        
        <div>
        <input type='radio' name='answer_21' id='ans21_2' value='B' />
        <label for='ans21_2'>  B) 1 obvious example is sufficient</label>
        </div>

        <div>
        <input type='radio' name='answer_21' id='ans21_3' value='C' />
        <label for='ans21_3'>  C) as many issues as can be found in the Spot check</label>
        </div>
        </li>

         <!-- q23-->
        <li>
        <h3>Which combination will bring up the Diagnostics window in the CQC Player?</h3>
        
        <div>
        <input type='radio' name='answer_22' id='ans22_1' value='A' />
        <label for='ans22_1'>  A) SHIFT + ALT</label>
        </div>
        
        <div>
        <input type='radio' name='answer_22' id='ans22_2' value='B' />
        <label for='ans22_2'>  B) SHIFT + ALT + LEFT CLICK</label>
        </div>

        <div>
        <input type='radio' name='answer_22' id='ans22_3' value='C' />
        <label for='ans22_3'>  C) SHIFT + LEFT CLICK</label>
        </div>
        </li>
    
        <!-- q32 -->
        <li>
        <h3>What best defines adaptive bitrate streaming?</h3>
        <div>
        <input type='radio' name='answer_24' id='ans24_1' value='A' />
        <label for='ans24_1'>  A) A streaming video delivery technique that dynamically switches playback between video streams encoded at various bitrates as an effort to avoid buffering</label>
        </div>
        
        <div>
        <input type='radio' name='answer_24' id='ans24_2' value='B' />
        <label for='ans24_2'>  B) A custom Netflix tool that forces only the highest bitrate encoded video upon its customers as an effort to ensure excellent video quality</label>
        </div>
        
        <div>
        <input type='radio' name='answer_24' id='ans24_3' value='C' />
        <label for='ans24_3'>  C) An internet delivery limitation that only allows Netflix content to play if there is enough bandwidth available to support it as an effort to ensure excellent video quality</label>
        </div>

        <div>
        <input type='radio' name='answer_24' id='ans24_4' value='D' />
        <label for='ans24_4'>  D) A streaming enabled device setting that forces playback to only low quality video encodes as an effort to avoid buffering</label>
        </div>
        </li>
        
        <!-- q33 -->
        <li>
        <h3>How does internet connection affect the playback of Netflix content?</h3>
        <div>
        <input type='radio' name='answer_25' id='ans25_1' value='A' />
        <label for='ans25_1'>  A) There is no correlation between internet connection and the playback of Netflix content</label>
        </div>
        
        <div>
        <input type='radio' name='answer_25' id='ans25_2' value='B' />
        <label for='ans25_2'>  B) Netflix content will play at various quality levels dependent on the speed of the internet connection</label>
        </div>
        
        <div>
        <input type='radio' name='answer_25' id='ans25_3' value='C' />
        <label for='ans25_3'>  C) Netflix content can only play with a fast internet connection</label>
        </div>
        </li>

        <!-- q34 -->
        <li>
        <h3>How can you determine whether issues in the stream are inherent to the source?</h3>
        <div>
        <input type='radio' name='answer_26' id='ans26_1' value='A' />
        <label for='ans26_1'>  A) If the issue can be reproduced a few times at the highest bitrate</label>
        </div>
        
        <div>
        <input type='radio' name='answer_26' id='ans26_2' value='B' />
        <label for='ans26_2'>  B) It is entirely dependent on the type of error code in question</label>
        </div>
        
        <div>
        <input type='radio' name='answer_26' id='ans26_3' value='C' />
        <label for='ans26_3'>  C) All issues present in the stream will be present in the source</label>
        </div>
        </li>
        
        <!-- q37 -->
        <li>
        
        <h3>Stream switching can be witnessed in the CQC Player.</h3>
        <div>
        <input type='radio' name='answer_27' id='ans27_1' value='A' />
        <label for='ans27_1'>  A) True </label>
        </div>
        
        <div>
        <input type='radio' name='answer_27' id='ans27_2' value='B' />
        <label for='ans27_2'>  B) Flase</label>
        </div>
        </li>

        <!-- q38 -->
        <li>
        <h3>What is the most important issue to catch when QCing video assets?</h3>
        <div>
        <input type='radio' name='answer_28' id='ans28_1' value='A' />
        <label for='ans28_1'>  A) video asset is incorrect content</label>
        </div>
        
        <div>
        <input type='radio' name='answer_28' id='ans28_2' value='B' />
        <label for='ans28_2'>  B) video has extra content</label>
        </div>
        
        <div>
        <input type='radio' name='answer_28' id='ans28_3' value='C' />
        <label for='ans28_3'>  C) extended commercial blacks</label>
        </div>
        </li>

        <!-- delete Q28 -->

        <!-- q42 -->
        <li>
        <h3>If a video asset is pristine but there are more than 4 seconds of black at the end with absolutely no accompanying audio</h3>
        
        <div>
        <input type='radio' name='answer_30' id='ans30_1' value='A' />
        <label for='ans30_1'>  A) flag &quot;extended commercial blacks&quot;</label>
        </div>
        
        <div>
        <input type='radio' name='answer_30' id='ans30_2' value='B' />
        <label for='ans30_2'>  B) mark &quot;No Issues detected&quot; as the issue is not severe enough to warrant flagging</label>
        </div>

        <div>
        <input type='radio' name='answer_30' id='ans30_3' value='C' />
        <label for='ans30_3'>  C) flag &quot;extended commercial blacks&quot; and scrub through the rest of the video to check for additional commercial blacks</label>
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