<?php /* Smarty version 2.6.26, created on 2012-05-22 21:32:43
         compiled from templates/localplan_list_world.tpl */ ?>
<h2>Worlds list</h2>
<ul>
<?php $_from = $this->_tpl_vars['data']['worlds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['world'] => $this->_tpl_vars['nb']):
?>
	<li><a href="./<?php echo $this->_tpl_vars['world']; ?>
"><?php echo $this->_tpl_vars['world']; ?>
</a> (<?php echo $this->_tpl_vars['nb']; ?>
 parcels)</li>
<?php endforeach; endif; unset($_from); ?>
</ul>