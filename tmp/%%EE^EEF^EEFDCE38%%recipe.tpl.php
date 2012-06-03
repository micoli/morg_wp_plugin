<?php /* Smarty version 2.6.26, created on 2012-05-22 21:32:31
         compiled from templates/recipe.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'templates/recipe.tpl', 15, false),array('modifier', 'capitalize', 'templates/recipe.tpl', 15, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['dataL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dataI']):
?>
<br/><?php echo $this->_tpl_vars['name']; ?>
&nbsp;<img src="<?php echo $this->_tpl_vars['dataI']['col_result']; ?>
">
			
<table cellspacing="0" cellpadding="0" class="tablerecipe" style="background: #C6C6C6; border: outset 2px #999; padding: 6px; width:230px;height:148px">
	<tbody>
		<tr>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 0,'y' => 2)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 1,'y' => 2)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 2,'y' => 2)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<td width="40" align="center" style="border: none; padding: 0" rowspan="3"><img width="32" height="27" src="<?php echo $this->_tpl_vars['datas']['morg_wi_export_root']; ?>
/../plugins/minecraft-wp-WebInterface/image/Grid_layout_Arrow_(small).png" alt="">
			</td>
			<td style="border: none; padding: 0" rowspan="3">
				<div style="position: relative">
					<img width="52" height="52" src="<?php echo $this->_tpl_vars['datas']['morg_wi_export_root']; ?>
/../plugins/minecraft-wp-WebInterface/image/Grid_layout_None_(small).png" alt="">
					<span class="grid-output"><a title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['str_result'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
" href="/wiki/"><img width="32" height="32" src="<?php echo $this->_tpl_vars['dataI']['col_result']; ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['str_result'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
"> </a> </span>
				</div>
			</td>
		</tr>
		<tr>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 0,'y' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 1,'y' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 2,'y' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</tr>
		<tr>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 0,'y' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 1,'y' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe_cell.tpl", 'smarty_include_vars' => array('x' => 2,'y' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</tr>
	</tbody>
</table>
<?php endforeach; endif; unset($_from); ?>