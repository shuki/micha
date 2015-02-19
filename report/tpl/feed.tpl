<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>הודעות נעות</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/feed.css" />
<script src="../js/feed.js" type="text/javascript"></script>
</head>

<body dir="rtl" bgcolor="#F0F0F0" text="#000000" onmouseover="scrollspeed=0" onmouseout="scrollspeed=current" onload="NewsScrollStart();">

<div id="NewsDiv">
<table cellpadding="5" cellspacing="0" border="0" width="100%"><tr><td>
<!-- SCROLLER CONTENT STARTS HERE -->

{foreach from=$data key=k item=row}
<span class="title">
{$row->creation_date_fmt}<br>
{if $row->title}{$row->title}<br>{/if}
{if $row->name}<span style="color:black;">מאת: </span>{$row->name}<br>{/if}
</span>
{$row->body}
{if $row->link}<a href="{$row->link}" target="_top">קישור</a>{/if}
<br><br><br>
{/foreach}

<!-- SCROLLER CONTENT ENDS HERE -->
</td></tr></table>
</div>
</body>
</html>
