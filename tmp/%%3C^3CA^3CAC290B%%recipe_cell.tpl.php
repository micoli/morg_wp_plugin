<?php /* Smarty version 2.6.26, created on 2012-05-22 21:31:02
         compiled from templates/recipe_cell.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'templates/recipe_cell.tpl', 4, false),array('modifier', 'capitalize', 'templates/recipe_cell.tpl', 4, false),)), $this); ?>
<td style="border: none; padding: 0">
	<div style="position: relative">
		<img width="36" height="36" src="<?php echo $this->_tpl_vars['datas']['morg_wi_export_root']; ?>
/../plugins/minecraft-wp-WebInterface/image/Grid_layout_None_(small).png" >
		<span class="grid-input"><a title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['dataI']['str'][$this->_tpl_vars['x']][$this->_tpl_vars['y']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
" href="/wiki/">
		<img width="32" height="32" src="<?php echo $this->_tpl_vars['dataI']['col'][$this->_tpl_vars['x']][$this->_tpl_vars['y']]; ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['dataI']['str'][$this->_tpl_vars['x']][$this->_tpl_vars['y']])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
"> </a> </span>
	</div>
</td>