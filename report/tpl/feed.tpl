<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>הודעות נעות</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/feed.css" />
<script>
	var speed = "{if isset($request->speed)}{$request->speed}{else}30{/if}";	// ADJUST SCROLL JUMPING = RANGE 0 TO 1000
	var frameheight = "{if isset($request->frameheight)}{$request->frameheight}{else}250{/if}px";	// ADJUST TO FRAME HEIGHT
</script>
<script src="../../jxset/jset/jquery/jquery-1.8.2.js" type="text/javascript"></script>
<script src="../../jxset/jset/jquery/jquery.urlvars.js" type="text/javascript"></script>
<script src="../js/feed.js" type="text/javascript"></script>
</head>

<body dir="rtl" bgcolor="#F0F0F0" text="#000000">

<div id="NewsDiv">
<table id="contents" cellpadding="5" cellspacing="0" border="0" width="100%"><tr><td>
<!-- SCROLLER CONTENT STARTS HERE -->
{include file="tpl/data.tpl"}
<!-- SCROLLER CONTENT ENDS HERE -->
</td></tr></table>
</div>
</body>
</html>
