<?php /* Smarty version 2.6.26, created on 2012-05-22 21:29:43
         compiled from templates/recipe_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'is_array', 'templates/recipe_list.tpl', 33, false),)), $this); ?>
<?php echo '
<style>
	.minecraftItemBP{
		width:20px;
		height:20px;
		background-image:url('; ?>
<?php echo $this->_tpl_vars['data']['morg_wi_export_root']; ?>
<?php echo '/items/__allicons.jpg);
	}
	.entry-content table, .comment-content table {
		border-bottom: 1px solid #DDDDDD;
		margin: 0 0 1.625em;
		width: 100%;
	}
	.grid-input {
		left: 2px;
		position: absolute;
		top: 2px;
		z-index: 1;
	}
	.grid-output {
		left: 10px;
		position: absolute;
		top: 10px;
		z-index: 1;
	}
	.tablerecipe {
		border-collapse: separate;
		border-spacing: 0;
	}
</style>
'; ?>


<?php $_from = $this->_tpl_vars['datas']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['dataL']):
?>
	<?php if (is_array($this->_tpl_vars['dataL'])): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "templates/recipe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>