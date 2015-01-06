<?php /* Smarty version Smarty-3.0.8, created on 2014-12-09 21:58:20
         compiled from "tpl/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272045487464c0e7640-17451472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7203ab4008a72728e7344990a3c14a54096d5c1' => 
    array (
      0 => 'tpl/page.tpl',
      1 => 1418151020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272045487464c0e7640-17451472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"/>
<META HTTP-EQUIV="EXPIRES" CONTENT="-1"/>
<link rel="shortcut icon" href="../../jxset/jset/img/smile.gif" type="image/x-icon" />
<title><?php if ($_smarty_tpl->getVariable('error')->value){?>Error in report<?php }else{ ?><?php echo $_smarty_tpl->getVariable('title')->value;?>
<?php }?></title>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<script src="../../jxset/jset/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/reporting.js" type="text/javascript"></script>
</head>
<body dir="rtl">
<?php $_template = new Smarty_Internal_Template("tpl/content.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
