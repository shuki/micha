<?php 
/*
 * jxset
 * Copyright (c) 2010 - 2013, Shuki Shukrun (shukrun.shuki at gmail.com).
 * Dual licensed under the MIT and GPL licenses
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 include_once("autoload.php");
 $dir_pre = config::jxset;
 jset_session::create();
 jset_page::create(config::jxset, 'he', '', true);
 $user_group = $_SESSION['jset_user_group'];
 $manager = isset($_GET['manager']) && $_GET['manager'] == 'micha_bar_meir';
?>

<head>
<title>אירועים</title>
<script type="text/javascript">
	<?php echo jset_permission::get_user_attributes_js(); ?>
</script>
<script src="js/defaults.js" type="text/javascript"></script>
<?php if($manager){ ?>
<script src="js/defaults_manager.js" type="text/javascript"></script>
<?php } ?>
<script src="js/event.js" type="text/javascript"></script>
</head>

<body dir="rtl">
	<?php if(config::login){ ?>
	<div> <a href="login.php?signout"><img src="<?php echo $dir_pre ?>jset/img/out.png" title="צא"></a> <a href="<?php echo config::password_page; ?>"><?php echo $_SESSION['jset_user_login']; ?></a> שלום</div>
		<?php if(!$user_group){ ?>		
		<div style="direction:rtl; text-align:right">  יש להגדיר קבוצת הרשאה למשתמש <?php echo $_SESSION['jset_user_login']; ?> בכדי להשתמש במערכת. </div>
		<?php 
		die;
		} ?>
	<?php
	} ?>
	<table id="grid"></table>
</body>
</html>
