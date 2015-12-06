<html>
<head>
    <title>quiz_1</title>
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
<center><font face='Andalus' size='15'>Audio</b></font></center>
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
    //echo " First name :$fname";
    //echo " Start Time :$start_time";
    echo "
    

    <form action='process.php?id=1' method='post' id='1'>
    <input type=\"hidden\" name=\"lname\" id=\"lname\" value=\"$lname\" />
    <input type=\"hidden\" name=\"fname\" id=\"fname\" value=\"$fname\" />
    <input type=\"hidden\" name=\"email\" id=\"email\" value=\"$email\" />
    <input type=\"hidden\" name=\"start_time\" id=\"start_time\" value=\"$start_time\" />

    <ol>
    
        <!-- q4 -->
        <li>
        <h3>How many instances should be flagged for audio sync drift &amp; audio sync offset issues? </h3>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_1' value='A' />
        <label for='ans1_1'>  A) only 1 will ever be present</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_2' value='B' />
        <label for='ans1_2'>  B) 3-4 obvious examples</label>
        </div>
        
        <div>
        <input type='radio' name='answer_1' id='ans1_3' value='C' />
        <label for='ans1_3'>  C) as many issues as can be found in the Spot check</label>
        </div>
        </li>
        
        <!-- q5 -->
        <li>
        <h3>Which audio errors MUST be consistently present throughout the entire file to warrant any flagging? (Choose all that apply) </h3>
        <div>
        <input type='checkbox' name='answer_2[]' id='ans2_1' value='A' />
        <label for='ans2_1'>  A) Audio sync - offset &gt; 100 ms </label>
        </div>
        <div>
        <input type='checkbox' name='answer_2[]' id='ans2_2' value='B' />
        <label for='ans2_2'>  B) Audio sync - drift late</label>
        </div>
        <div>
        <input type='checkbox' name='answer_2[]' id='ans2_3' value='C' />
        <label for='ans2_3'>  C) Audio is in incorrect language</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_4' value='D' />
        <label for='ans2_4'>  D) Audio Crackle</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_5' value='E' />
        <label for='ans2_5'>  E) Audio hit/pop</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_6' value='F' />
        <label for='ans2_6'>  F) Incorrect channel mapping</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_7' value='G' />
        <label for='ans2_7'>  G) Phasing</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_8' value='H' />
        <label for='ans2_8'>  H) Over modulation</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_9' value='I' />
        <label for='ans2_9'>  I) Audio sync - drift early</label>
        </div>
         <div>
        <input type='checkbox' name='answer_2[]' id='ans2_10' value='J' />
        <label for='ans2_10'>  J) Audio sync - sporadic sync</label>
        </div>
        </li>

        <!-- q6 -->
        <li>
        <h3>Which audio errors do NOT need to be consistently present throughout the entire file to warrant any flagging? (Choose all that apply) </h3>

        <div>
        <input type='checkbox' name='answer_3[]' id='ans3_1' value='A' />
        <label for='ans3_1'>  A) Audio sync - drift late </label>
        </div>
        
        <div>
        <input type='checkbox' name='answer_3[]' id='ans3_2' value='B' />
        <label for='ans3_2'>  B) Audio hit/pop</label>
        </div>
        
        <div>
        <input type='checkbox' name='answer_3[]' id='ans3_3' value='C' />
        <label for='ans3_3'>  C) Incorrect channel mapping</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_4' value='D' />
        <label for='ans3_4'>  D) Phasing</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_5' value='E' />
        <label for='ans3_5'>  E) Over modulation</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_6' value='F' />
        <label for='ans3_6'>  F) Audio sync - drift early</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_7' value='G' />
        <label for='ans3_7'>  G) Audio sync - sporadic sync</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_8' value='H' />
        <label for='ans3_8'>  H) Audio drop out</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_9' value='I' />
        <label for='ans3_9'>  I) Crackle</label>
        </div>
         <div>
        <input type='checkbox' name='answer_3[]' id='ans3_10' value='J' />
        <label for='ans3_10'>  J) Audio sync - offset</label>
        </div>
        </li>
        
        <!-- q9 -->
        <li>
        
        <h3>What is the most common customer complaint about audio?</h3>
        <div>
        <input type='radio' name='answer_4' id='ans4_1' value='A' />
        <label for='ans4_1'>  A) over modulation </label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_2' value='B' />
        <label for='ans4_2'>  B) language not available</label>
        </div>
        
        <div>
        <input type='radio' name='answer_4' id='ans4_3' value='C' />
        <label for='ans4_3'>  C) sync </label>
        </div>
        </li>

        <!-- q10 -->
        <li>
        <h3>Every audio issue found must be reproducible before flagging. </h3>
        <div>
        <input type='radio' name='answer_5' id='ans5_1' value='A' />
        <label for='ans5_1'>  A) true, if the audio issue cannot be reproduced then there is no reason to flag</label>
        </div>
        
        <div>
        <input type='radio' name='answer_5' id='ans5_2' value='B' />
        <label for='ans5_2'>  B) false, audio issues can have inconsistent playback </label>
        </div>
        </li>
        
        <!-- q12 -->
        <li>
        <h3>What kind of operator is permitted to check Secondary Audio Dubs?</h3>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_1' value='A' />
        <label for='ans6_1'>  A) operators with audio skill sets </label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_2' value='B' />
        <label for='ans6_2'>  B) operators who are fluent in the language of the dubbed audio </label>
        </div>
        
        <div>
        <input type='radio' name='answer_6' id='ans6_3' value='C' />
        <label for='ans6_3'>  C) operators who are native speakers of the language of the dubbed audio </label>
        </div>
        </li>

        <!-- q13 -->
        <li>
        <h3>How many instances of &quot;audio crackle&quot; must be present to warrant flagging?</h3>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_1' value='A' />
        <label for='ans7_1'>  A) consistently present throughout the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_2' value='B' />
        <label for='ans7_2'>  B) any single instance can be flagged if it is disruptive </label>
        </div>
        
        <div>
        <input type='radio' name='answer_7' id='ans7_3' value='C' />
        <label for='ans7_3'>  C) all instances found in the Spot check </label>
        </div>
        </li>

        <!-- q18 -->
        <li>
        <h3>Audiences are generally more lenient with poor quality audio than poor quality video.</h3>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_1' value='A' />
        <label for='ans8_1'>  A) True</label>
        </div>
        
        <div>
        <input type='radio' name='answer_8' id='ans8_2' value='B' />
        <label for='ans8_2'>  B) False </label>
        </div>
        </li>

         <!-- q19 -->
        <li>
        <h3>When should an operator &quot;unassign&quot; a Secondary Audio Dub?</h3>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_1' value='A' />
        <label for='ans9_1'>  A) when they are not a native speaker of the language the Audio Dub is in</label>
        </div>
        
        <div>
        <input type='radio' name='answer_9' id='ans9_2' value='B' />
        <label for='ans9_2'>  B) when they are encountering the secondary audio latency bug </label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_3' value='C' />
        <label for='ans9_3'>  C) when the audio track is silent </label>
        </div>

        <div>
        <input type='radio' name='answer_9' id='ans9_4' value='D' />
        <label for='ans9_4'>  D) all of the above </label>
        </div>
        </li>

         <!-- q20 -->
        <li>
        <h3>What is the definition of &quot;audio-drift&quot; ?</h3>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_1' value='A' />
        <label for='ans10_1'>  A) when the audio starts in sync but becomes progressively out of sync as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_10' id='ans10_2' value='B' />
        <label for='ans10_2'>  B) when the audio is consistently out of sync by the same amount of time</label>
        </div>

        <div>
        <input type='radio' name='answer_10' id='ans10_3' value='C' />
        <label for='ans10_3'>  C) when certain lines of dialogue are out of sync at different points </label>
        </div>
        </li>


         <!-- q21 -->
        <li>
        <h3>If an audio error exists in the stream, it can be flagged.</h3>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_1' value='A' />
        <label for='ans11_1'>  A) True, audio errors can always be flagged if present.</label>
        </div>
        
        <div>
        <input type='radio' name='answer_11' id='ans11_2' value='B' />
        <label for='ans11_2'>  B) False, audio errors can only be flagged if disruptive to viewing experience.</label>
        </div>
        </li>

         <!-- q23 -->
        <li>
        <h3>The AV Sync Compensation tool permanently edits the audio &amp; video streams.</h3>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_1' value='A' />
        <label for='ans12_1'>  A) True</label>
        </div>
        
        <div>
        <input type='radio' name='answer_12' id='ans12_2' value='B' />
        <label for='ans12_2'>  B) False</label>
        </div>
        </li>

        <!-- q26-->
        <li>
        <h3>How many instances should be flagged for each consistently present audio error code?</h3>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_1' value='A' />
        <label for='ans13_1'>  A) 3-4 obvious examples</label>
        </div>
        
        <div>
        <input type='radio' name='answer_13' id='ans13_2' value='B' />
        <label for='ans13_2'>  B) 1 obvious example is sufficient</label>
        </div>

        <div>
        <input type='radio' name='answer_13' id='ans13_3' value='C' />
        <label for='ans13_3'>  C) as many issues as can be found in the spot check</label>
        </div>
        </li>

        <!-- q28-->
        <li>
        <h3>It is not possible to encounter drift-early and drift-late in the same audio stream.</h3>
        
        <div>
        <input type='radio' name='answer_14' id='ans14_1' value='A' />
        <label for='ans14_1'>  A) True</label>
        </div>
        
        <div>
        <input type='radio' name='answer_14' id='ans14_2' value='B' />
        <label for='ans14_2'>  B) False</label>
        </div>
        </li>

         <!-- q30-->
        <li>
        <h3>How many instances of &quot;audio duration truncation&quot; should be flagged?</h3>
        
        <div>
        <input type='radio' name='answer_15' id='ans15_1' value='A' />
        <label for='ans15_1'>  A) only 1 will ever be present</label>
        </div>
        
        <div>
        <input type='radio' name='answer_15' id='ans15_2' value='B' />
        <label for='ans15_2'>  B) 3-4 obvious examples</label>
        </div>

        <div>
        <input type='radio' name='answer_15' id='ans15_2' value='C' />
        <label for='ans15_2'>  C) as many issues as can be found in the Spot check</label>
        </div>
        </li>

         <!-- q32-->
        <li>
        <h3>Which combination will bring up the Diagnostics window in the CQC Player?</h3>
        
        <div>
        <input type='radio' name='answer_16' id='ans16_1' value='A' />
        <label for='ans16_1'>  A) SHIFT + ALT</label>
        </div>
        
        <div>
        <input type='radio' name='answer_16' id='ans16_2' value='B' />
        <label for='ans16_2'>  B) SHIFT + ALT + LEFT CLICK</label>
        </div>

        <div>
        <input type='radio' name='answer_16' id='ans16_2' value='C' />
        <label for='ans16_2'>  C) SHIFT + LEFT CLICK</label>
        </div>
        </li>

        <!-- q33-->
        <li>
        <h3>It is not possible to encounter drift &amp; offset in the same audio stream.</h3>
        
        <div>
        <input type='radio' name='answer_17' id='ans17_1' value='A' />
        <label for='ans17_1'>  A) True</label>
        </div>
        
        <div>
        <input type='radio' name='answer_17' id='ans17_2' value='B' />
        <label for='ans17_2'>  B) False</label>
        </div>
        </li>

        <!-- q35-->
        <li>
        <h3>Match the audio error code with its definition : Audio is incorrect content</h3>
        
        <div>
        <input type='radio' name='answer_18' id='ans18_1' value='A' />
        <label for='ans18_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_18' id='ans18_2' value='B' />
        <label for='ans18_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_18' id='ans18_3' value='C' />
        <label for='ans18_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_4' value='D' />
        <label for='ans18_4'>  D) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_5' value='E' />
        <label for='ans18_5'>  E) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_6' value='F' />
        <label for='ans18_6'>  F) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_7' value='G' />
        <label for='ans18_7'>  G) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_8' value='H' />
        <label for='ans18_8'>  H) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_9' value='I' />
        <label for='ans18_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_18' id='ans18_10' value='J' />
        <label for='ans18_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>


        <!-- q36-->
        <li>
        <h3>Match the audio error code with its definition : Audio drop out</h3>
        
        <div>
        <input type='radio' name='answer_19' id='ans19_1' value='A' />
        <label for='ans19_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_19' id='ans19_2' value='B' />
        <label for='ans19_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternating quickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_19' id='ans19_3' value='C' />
        <label for='ans19_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_4' value='D' />
        <label for='ans19_4'>  D)there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_5' value='E' />
        <label for='ans19_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_6' value='F' />
        <label for='ans19_6'>  F) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_7' value='G' />
        <label for='ans19_7'>  G) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_8' value='H' />
        <label for='ans19_8'>  H)the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_9' value='I' />
        <label for='ans19_9'>  I) the audio stream cuts off before the end of the program</label>
        </div>
        <div>
        <input type='radio' name='answer_19' id='ans19_10' value='J' />
        <label for='ans19_10'>  J) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        </li>

        <!-- q37-->
        <li>
        <h3>Match the audio error code with its definition : Audio duration truncation</h3>
        
        <div>
        <input type='radio' name='answer_20' id='ans20_1' value='A' />
        <label for='ans20_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_20' id='ans20_2' value='B' />
        <label for='ans20_2'>  B) there is a static sound in the audio stream</label>
        </div>

        <div>
        <input type='radio' name='answer_20' id='ans20_3' value='C' />
        <label for='ans20_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_4' value='D' />
        <label for='ans20_4'>  D) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_5' value='E' />
        <label for='ans20_5'>  E) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_6' value='F' />
        <label for='ans20_6'>  F) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_7' value='G' />
        <label for='ans20_7'>  G) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_8' value='H' />
        <label for='ans20_8'>  H) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_9' value='I' />
        <label for='ans20_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_20' id='ans20_10' value='J' />
        <label for='ans20_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q38-->
        <li>
        <h3>Match the audio error code with its definition : Audio hit/pop</h3>
        
        <div>
        <input type='radio' name='answer_21' id='ans21_1' value='A' />
        <label for='ans21_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_21' id='ans21_2' value='B' />
        <label for='ans21_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternating quickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_21' id='ans21_3' value='C' />
        <label for='ans21_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_4' value='D' />
        <label for='ans21_4'>  D) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_5' value='E' />
        <label for='ans21_5'>  E) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_6' value='F' />
        <label for='ans21_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_7' value='G' />
        <label for='ans21_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_8' value='H' />
        <label for='ans21_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_9' value='I' />
        <label for='ans21_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_21' id='ans21_10' value='J' />
        <label for='ans21_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q39-->
        <li>
        <h3>Match the audio error code with its definition : Audio is in incorrect language</h3>
        
        <div>
        <input type='radio' name='answer_22' id='ans22_1' value='A' />
        <label for='ans22_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_22' id='ans22_2' value='B' />
        <label for='ans22_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternating quickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_22' id='ans22_3' value='C' />
        <label for='ans22_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_4' value='D' />
        <label for='ans22_4'>  D) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_5' value='E' />
        <label for='ans22_5'>  E) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_6' value='F' />
        <label for='ans22_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_7' value='G' />
        <label for='ans22_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_8' value='H' />
        <label for='ans22_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_9' value='I' />
        <label for='ans22_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_22' id='ans22_10' value='J' />
        <label for='ans22_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q40-->
        <li>
        <h3>Match the audio error code with its definition :Audio sync - drift early</h3>
        
        <div>
        <input type='radio' name='answer_23' id='ans23_1' value='A' />
        <label for='ans23_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_23' id='ans23_2' value='B' />
        <label for='ans23_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_23' id='ans23_3' value='C' />
        <label for='ans23_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_4' value='D' />
        <label for='ans23_4'>  D) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_5' value='E' />
        <label for='ans23_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_6' value='F' />
        <label for='ans23_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_7' value='G' />
        <label for='ans23_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_8' value='H' />
        <label for='ans23_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_9' value='I' />
        <label for='ans23_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_23' id='ans23_10' value='J' />
        <label for='ans23_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q41-->
        <li>
        <h3>Match the audio error code with its definition : Audio sync - drift late</h3>
        
        <div>
        <input type='radio' name='answer_24' id='ans24_1' value='A' />
        <label for='ans24_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_24' id='ans24_2' value='B' />
        <label for='ans24_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_24' id='ans24_3' value='C' />
        <label for='ans24_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_4' value='D' />
        <label for='ans24_4'>  D) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_5' value='E' />
        <label for='ans24_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_6' value='F' />
        <label for='ans24_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_7' value='G' />
        <label for='ans24_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_8' value='H' />
        <label for='ans24_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_9' value='I' />
        <label for='ans24_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_24' id='ans24_10' value='J' />
        <label for='ans24_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q42-->
        <li>
        <h3>Match the audio error code with its definition : Audio sync - offset &gt; 100ms</h3>
        
        <div>
        <input type='radio' name='answer_25' id='ans25_1' value='A' />
        <label for='ans25_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_25' id='ans25_2' value='B' />
        <label for='ans25_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_25' id='ans25_3' value='C' />
        <label for='ans25_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_4' value='D' />
        <label for='ans25_4'>  D) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_5' value='E' />
        <label for='ans25_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_6' value='F' />
        <label for='ans25_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_7' value='G' />
        <label for='ans25_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_8' value='H' />
        <label for='ans25_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_9' value='I' />
        <label for='ans25_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_25' id='ans25_10' value='J' />
        <label for='ans25_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q43-->
        <li>
        <h3>Match the audio error code with its definition : Audio sync - sporadic sync</h3>
        
        <div>
        <input type='radio' name='answer_26' id='ans26_1' value='A' />
        <label for='ans26_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_26' id='ans26_2' value='B' />
        <label for='ans26_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_26' id='ans26_3' value='C' />
        <label for='ans26_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_4' value='D' />
        <label for='ans26_4'>  D) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_5' value='E' />
        <label for='ans26_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_6' value='F' />
        <label for='ans26_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_7' value='G' />
        <label for='ans26_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans268_8' value='H' />
        <label for='ans26_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_9' value='I' />
        <label for='ans26_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_26' id='ans26_10' value='J' />
        <label for='ans26_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q44-->
        <li>
        <h3>Match the audio error code with its definition : Crackle</h3>
        
        <div>
        <input type='radio' name='answer_27' id='ans27_1' value='A' />
        <label for='ans27_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_27' id='ans27_2' value='B' />
        <label for='ans27_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternating quickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_27' id='ans27_3' value='C' />
        <label for='ans27_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_4' value='D' />
        <label for='an27_4'>  D) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_5' value='E' />
        <label for='ans27_5'>  E) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_6' value='F' />
        <label for='ans27_6'>  F) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_7' value='G' />
        <label for='ans27_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_8' value='H' />
        <label for='ans27_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_9' value='I' />
        <label for='ans27_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_27' id='ans27_10' value='J' />
        <label for='ans27_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q45-->
        <li>
        <h3>Match the audio error code with its definition : Incorrect Channel Mapping</h3>
        
        <div>
        <input type='radio' name='answer_28' id='ans28_1' value='A' />
        <label for='ans28_1'>  A) the audio starts in sync but becomes progressively late as time goes on</label>
        </div>
        
        <div>
        <input type='radio' name='answer_28' id='ans28_2' value='B' />
        <label for='ans28_2'>  B) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>

        <div>
        <input type='radio' name='answer_28' id='ans28_3' value='C' />
        <label for='ans28_3'>  C) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_4' value='D' />
        <label for='ans28_4'>  D) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_5' value='E' />
        <label for='ans28_5'>  E) the audio starts in sync but becomes progressively early as time goes on</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_6' value='F' />
        <label for='ans28_6'>  F) there are major sync issues in the stream that cannot be defined as offset or drift</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_7' value='G' />
        <label for='ans28_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_8' value='H' />
        <label for='ans28_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_9' value='I' />
        <label for='ans28_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_28' id='ans28_10' value='J' />
        <label for='ans28_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q46-->
        <li>
        <h3>Match the audio error code with its definition : Over modulation</h3>
        
        <div>
        <input type='radio' name='answer_29' id='ans29_1' value='A' />
        <label for='ans29_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_29' id='ans29_2' value='B' />
        <label for='ans29_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternating quickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_29' id='ans29_3' value='C' />
        <label for='ans29_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_4' value='D' />
        <label for='ans29_4'>  D) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_5' value='E' />
        <label for='ans29_5'>  E) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_6' value='F' />
        <label for='ans29_6'>  F) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_7' value='G' />
        <label for='ans29_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_8' value='H' />
        <label for='ans29_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_9' value='I' />
        <label for='ans29_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_29' id='ans29_10' value='J' />
        <label for='ans29_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

        <!-- q47-->
        <li>
        <h3>Match the audio error code with its definition : Phasing</h3>
        
        <div>
        <input type='radio' name='answer_30' id='ans30_1' value='A' />
        <label for='ans30_1'>  A) there is a static sound in the audio stream</label>
        </div>
        
        <div>
        <input type='radio' name='answer_30' id='ans30_2' value='B' />
        <label for='ans30_2'>  B) there is a thinning sound (as if missing bass) in the stream that sounds like it is alternatingquickly from one speaker to the other</label>
        </div>

        <div>
        <input type='radio' name='answer_30' id='ans30_3' value='C' />
        <label for='ans30_3'>  C) the audio stream is missing a particular track such as dialogue, background sound or music</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_4' value='D' />
        <label for='ans30_4'>  D) the sync is consistently off throughout the program by the same amount of time</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_5' value='E' />
        <label for='ans30_5'>  E) there is an occurrence of a blip or popping sound in the audio stream</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_6' value='F' />
        <label for='ans30_6'>  F) the audio stream assigned for QC does not match the video stream attached to it</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_7' value='G' />
        <label for='ans30_7'>  G) the language assigned for QC is not the language that plays</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_8' value='H' />
        <label for='ans30_8'>  H) there is noticeable distortion in the audio stream that produces a tinny sound</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_9' value='I' />
        <label for='ans30_9'>  I) the audio goes silent for any duration of time that dramatically impacts the viewing experience</label>
        </div>
        <div>
        <input type='radio' name='answer_30' id='ans30_10' value='J' />
        <label for='ans30_10'>  J) the audio stream cuts off before the end of the program</label>
        </div>
        </li>

    </ol>

     <button id='sub' class='btn btn-primary btn-lg' onclick='return confirmSubmit()'>Submit</button>
    
</form>" ;

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
<!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>