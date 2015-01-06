<?php /* Smarty version Smarty-3.0.8, created on 2014-12-09 21:58:20
         compiled from "tpl/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100295487464c5e8b78-11630505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c6a6e58a085e2634b739ff233ba98ae6a821b0' => 
    array (
      0 => 'tpl/content.tpl',
      1 => 1418151020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100295487464c5e8b78-11630505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'smarty/libs/plugins\function.html_options.php';
?><table class="data">
<?php if ($_smarty_tpl->getVariable('jset_user_document_footer')->value){?>
<tfoot>
    <tr>
        <!--td colspan="100"><img width="100%" src="../img/gai_footer.png"></td-->
        <td colspan="100"><img width="100%" src="../<?php echo $_smarty_tpl->getVariable('jset_user_document_footer')->value;?>
"></td>
    </tr>
</tfoot>
<?php }?>
<thead>
<?php if ($_smarty_tpl->getVariable('jset_user_document_header')->value){?>
	<tr class="heading">
		<!--th colspan="100"><img  height="105px" src="../img/adanim_header.png"></th-->
		<th colspan="100"><img  width="100%" src="../<?php echo $_smarty_tpl->getVariable('jset_user_document_header')->value;?>
"></th>
	</tr>
<?php }?>
	<tr class="heading">
		<th colspan="100" class="description"><?php echo $_smarty_tpl->getVariable('description')->value;?>
</th>
	</tr>
	<tr class="heading">
		<th colspan="100">
			<?php if ($_smarty_tpl->getVariable('error')->value){?>
			<div dir="ltr">
			<span style="color:red">Error in report</span><br />
			<?php echo $_smarty_tpl->getVariable('error')->value;?>
<br />
			<?php echo $_smarty_tpl->getVariable('error_msg')->value;?>
<br />
			<?php echo $_smarty_tpl->getVariable('error_dump')->value;?>

			</div>
			<?php }else{ ?>
			<form>
			<table>
			<tr style="display:none;"><td colspan="2"><input type="text" name="reportId"  value="<?php echo $_smarty_tpl->getVariable('reportId')->value;?>
" /></td></tr>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('parameters')->value->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			<tr <?php if (!$_smarty_tpl->getVariable('row')->value->value){?>style="background-color:yellow"<?php }?>>
			<td><?php echo $_smarty_tpl->getVariable('row')->value->title;?>
</td>
			<?php if (isset($_smarty_tpl->getVariable('row',null,true,false)->value->list)){?>
			<td>
			    <?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->getVariable('row')->value->name,'options'=>$_smarty_tpl->getVariable('row')->value->list,'selected'=>$_smarty_tpl->getVariable('row')->value->value),$_smarty_tpl);?>
 
			</td>
			<?php }else{ ?>
			<td><input type="text" name="<?php echo $_smarty_tpl->getVariable('row')->value->name;?>
" value="<?php echo $_smarty_tpl->getVariable('row')->value->value;?>
" /></td>
			<?php }?>
			</tr>	
			<?php }} ?>
			<?php if ($_smarty_tpl->getVariable('parameters')->value->interactive){?>
			<tr style="display:none;"><td colspan="2"><input type="text" name="interactive"  value="1" /></td></tr> 
			<?php }?>
			<tr><td colspan="2"><input type="submit" value="הרץ דוח" /></td></tr>
			</table>
			</form>	
			
			<?php if ($_smarty_tpl->getVariable('report')->value->actionParamName){?>
				<table>
				<tr <?php if (!$_smarty_tpl->getVariable('action_parameter')->value->value){?>style="background-color:yellow"<?php }?>>
				<td><?php echo $_smarty_tpl->getVariable('action_parameter')->value->title;?>
</td>
				<?php if (isset($_smarty_tpl->getVariable('action_parameter',null,true,false)->value->list)){?>
				<td>
				    <?php echo smarty_function_html_options(array('name'=>'action_parameter','options'=>$_smarty_tpl->getVariable('action_parameter')->value->list,'selected'=>$_smarty_tpl->getVariable('action_parameter')->value->value),$_smarty_tpl);?>

				    <script type="text/javascript">
				    	var action_parameter_list_extra_array = <?php echo json_encode($_smarty_tpl->getVariable('action_parameter')->value->list_extra);?>
;
					</script>
				</td>
				<?php }else{ ?>
					<td><input type="text" name="action_parameter" value="<?php echo $_smarty_tpl->getVariable('action_parameter')->value->value;?>
" /></td>
				<?php }?>
				
				<td colspan="1"><input type="button" id="action_button" value="הפעל" style="color:red"/></td>
				<td style="display:none;"><input type="text" id="actionDelayMSeconds"  value="<?php echo $_smarty_tpl->getVariable('report')->value->actionDelayMSeconds;?>
" /></td>
				</tr>
				</table> 
			<?php }?>
			
			<?php if ($_smarty_tpl->getVariable('missing')->value){?>
			יש לבחור פרמרטים עבור הדוח
			<?php }elseif($_smarty_tpl->getVariable('parameters')->value->interactive&&!$_smarty_tpl->getVariable('interactive')->value){?>
			<?php }else{ ?>
			
			<?php if (isset($_smarty_tpl->getVariable('affected_rows',null,true,false)->value)){?>
			<h4><?php echo $_smarty_tpl->getVariable('affected_rows')->value;?>
 רשומות הושפעו</h4>
			<?php }else{ ?>
			<?php }?>
			<?php }?>
			<?php }?>
		</th>
	</tr>
	<tr class="columns-titles">
	
	<?php $_smarty_tpl->tpl_vars["column_number"] = new Smarty_variable("1", null, null);?>
	<?php $_smarty_tpl->tpl_vars["fulluri"] = new Smarty_variable($_SERVER['REQUEST_URI'], null, null);?>
	<?php if (strpos($_smarty_tpl->getVariable('fulluri')->value,'orderby')){?>
		<?php $_smarty_tpl->tpl_vars["fulluri"] = new Smarty_variable(substr($_smarty_tpl->getVariable('fulluri')->value,0,((strpos($_smarty_tpl->getVariable('fulluri')->value,'orderby'))-1)), null, null);?>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		<?php if ($_smarty_tpl->getVariable('report')->value->breakOnColumn&&$_smarty_tpl->getVariable('column_number')->value==$_smarty_tpl->getVariable('report')->value->breakOnColumn){?>
			<?php $_smarty_tpl->tpl_vars["breakOnColumnName"] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value, null, null);?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars["column_number"] = new Smarty_variable($_smarty_tpl->getVariable('column_number')->value+1, null, null);?>
		
		<th><!--a href="<?php echo $_smarty_tpl->getVariable('fulluri')->value;?>
&orderby=order by <?php echo $_smarty_tpl->getVariable('column_number')->value-1;?>
">^</a-->&nbsp; <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 &nbsp;<!--a href="<?php echo $_smarty_tpl->getVariable('fulluri')->value;?>
&orderby=order by <?php echo $_smarty_tpl->getVariable('column_number')->value-1;?>
 desc">v</a--></th> 
	<?php }} else { ?>
		<th>No Data</th>
	<?php } ?>
	</tr>
</thead>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<?php if (isset($_smarty_tpl->getVariable('breakOnColumnName',null,true,false)->value)&&$_smarty_tpl->getVariable('breakOnColumnName')->value==$_smarty_tpl->tpl_vars['k']->value){?>
	<?php if (!isset($_smarty_tpl->getVariable('breakOnValue',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars["breakOnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, null);?>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->getVariable('breakOnValue')->value!=$_smarty_tpl->tpl_vars['item']->value){?>
			<?php $_smarty_tpl->tpl_vars["breakOnValue"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, null);?>	
			<tr><td colspan="<?php echo $_smarty_tpl->getVariable('column_number')->value;?>
">------------------------------------------------------------------------------------------------------------------------------</td></tr>
		<?php }?>	
	<?php }?>
<?php }?>
<?php }} ?>

	<tr>
	<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, null);?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
	<?php if ($_smarty_tpl->getVariable('report')->value->actionSelectionColumn==$_smarty_tpl->getVariable('i')->value){?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value){?>
			<td><input type="checkbox" name="selections" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /></td>
		<?php }else{ ?>
			<td></td>
		<?php }?>
	<?php }else{ ?>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
	<?php }?>
	<?php }} ?>
	</tr>	
<?php }} ?>


<?php if (isset($_smarty_tpl->getVariable('aggregate',null,true,false)->value)){?>
	<tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('aggregate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<td class="aggregate"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
		<?php }} ?>
		<?php }} ?>
	</tr>
<?php }?>

</table>
