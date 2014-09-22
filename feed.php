<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>הודעות נעות</title>



<style type="text/css">
<!--
BODY 		{ margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; }


 /* FONT COLORS */


TABLE		{ COLOR: #000000; FONT: 11px arial, sans-serif; font-weight: normal }

.title		{ COLOR: #0033FF; FONT: 12px arial, sans-serif; font-weight: bold; }

#NewsDiv	{ position: absolute; left: 0; top: 0; width: 100% }

 /* PAGE LINK COLORS */

a:link		{ color: #0033FF; text-decoration: underline; }

a:visited	{ color: #6633FF; text-decoration: underline; }

a:active	{ color: #0033FF; text-decoration: underline; }

a:hover		{ color: #6699FF; text-decoration: none; }

-->
</style>



</head>

<body dir="rtl" bgcolor="#F0F0F0" text="#000000" onmouseover="scrollspeed=0" onmouseout="scrollspeed=current" onload="NewsScrollStart();">

<div id="NewsDiv">
<table cellpadding="5" cellspacing="0" border="0" width="100%"><tr><td>






<!-- SCROLLER CONTENT STARTS HERE -->


<span class="title">
הפתעה בבלומפילד<br>
</span>
מכבי תל אביב ניצחה היום את ברצלונה בתוצאה 5:0. זוהי הפעם הראשונה בהיסטוריה שקבוצת כדורגל ישראלית מצליחה לנצח את ברצלונה. <a href="frames.html" target="_top">קישור לדוגמא</a>

<br><br><br>



<span class="title">
מוכרחים להיות שמח!<br>
</span>
נשיא המדינה מבקש מכל האזרחים הנכבדים להיות שמחים בתקופת החגים. השמחה מתברר מאריכה את חיי האדם ובכלל נותת לו סיבות טובות להרגיש טוב עם עצמו.

<br><br><br>





<span class="title">
הודעה לדוגמא<br>
</span>
לקראת החגים מומלץ מאוד להגיש מאכלים טעימים לכל החברים שמגיעים לחדר האוכל. יש להמנע מלבצע פניות חדות מדי עם מגשי האוכל.

<br><br>

נא לא לדרוך על הדשא. <a href="frames.html" target="_top">קישור לדוגמא</a>

<br>



<!-- SCROLLER CONTENT ENDS HERE -->






</td></tr></table>
</div>




<!-- YOU DO NOT NEED TO EDIT BELOW THIS LINE -->




<script language="JavaScript" type="text/javascript">
<!-- HIDE CODE

var scrollspeed		= "1"		// SET SCROLLER SPEED 1 = SLOWEST
var speedjump		= "20"		// ADJUST SCROLL JUMPING = RANGE 20 TO 40
var startdelay 		= "2" 		// START SCROLLING DELAY IN SECONDS
var nextdelay		= "0" 		// SECOND SCROLL DELAY IN SECONDS 0 = QUICKEST
var topspace		= "2px"		// TOP SPACING FIRST TIME SCROLLING
var frameheight		= "204px"	// IF YOU RESIZE THE WINDOW EDIT THIS HEIGHT TO MATCH



current = (scrollspeed)


function HeightData(){
AreaHeight=dataobj.offsetHeight
if (AreaHeight==0){
setTimeout("HeightData()",( startdelay * 1000 ))
}
else {
ScrollNewsDiv()
}}

function NewsScrollStart(){
dataobj=document.all? document.all.NewsDiv : document.getElementById("NewsDiv")
dataobj.style.top=topspace
setTimeout("HeightData()",( startdelay * 1000 ))
}

function ScrollNewsDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-(scrollspeed)
if (parseInt(dataobj.style.top)<AreaHeight*(-1)) {
dataobj.style.top=frameheight
setTimeout("ScrollNewsDiv()",( nextdelay * 1000 ))
}
else {
setTimeout("ScrollNewsDiv()",speedjump)
}}



// END HIDE CODE -->
</script>


</body>
</html>
