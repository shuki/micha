<?php 
/*
 * jxset
 * Copyright (c) 2010 - 2013, Shuki Shukrun (shukrun.shuki at gmail.com).
 * Dual licensed under the MIT and GPL licenses
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 include_once("autoload.php");
 $manager = isset($_GET['manager']) && $_GET['manager'] == 'micha_bar_meir';
 if(!$manager)
 	die();
 jset_page::create(config::jxset, 'he', '', true);
?>
<!--script src="../../jxset/jset/i18n/grid.locale-he.js" type="text/javascript"></script-->

<head>
<title>רשימות</title>
<script src="js/defaults.js" type="text/javascript"></script>
<?php if($manager){ ?>
<script src="js/defaults_manager.js" type="text/javascript"></script>
<?php } ?>
<script src="js/jset_list.js" type="text/javascript"></script>
</head>

<body>
	<table id="grid"></table>
</body>
</html>