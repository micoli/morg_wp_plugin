<?php /* Smarty version 2.6.26, created on 2012-05-22 21:32:41
         compiled from templates/heroes_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'templates/heroes_list.tpl', 7, false),array('modifier', 'capitalize', 'templates/heroes_list.tpl', 7, false),)), $this); ?>
<ul>
<?php $_from = $this->_tpl_vars['data']['heroes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['hero']):
?>
<li>
	<b>
		<a href="./player/<?php echo $this->_tpl_vars['name']; ?>
/">
		<img style="width:32px;height:32px;" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
../plugins/minecraft-wp-WebInterface/skin2/images/skins/<?php echo $this->_tpl_vars['name']; ?>
/head_front.png">
		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</a>
	</b>&nbsp;
	<i><?php echo $this->_tpl_vars['hero']['class']; ?>
</i>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>