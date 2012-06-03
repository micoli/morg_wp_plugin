<?php /* Smarty version 2.6.26, created on 2012-05-22 21:32:50
         compiled from templates/heroes_player.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'templates/heroes_player.tpl', 15, false),array('modifier', 'capitalize', 'templates/heroes_player.tpl', 15, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
../plugins/minecraft-wp-WebInterface/skin2/backend/resources/3d/Three.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
../plugins/minecraft-wp-WebInterface/skin2/backend/resources/3d/RequestAnimationFrame.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
../plugins/minecraft-wp-WebInterface/skin2/backend/resources/3d/mineCraftPlayer.js"></script>
<?php echo '
<script type="text/javascript">
	$(document).ready(function (){
		$(\'.mineCraftPlayer\').each(function(k,ele){
			mineCraftPlayer($(ele).attr(\'title\'),ele,\''; ?>
<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
<?php echo '../plugins/minecraft-wp-WebInterface/skin2/images/skins/\');
		});
	});
</script>
'; ?>

<div>
	<span style="float:left;">
		<h1><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['hero']['name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</h1>
		<h2><i><?php echo $this->_tpl_vars['data']['hero']['class']; ?>
</i></h2>
		<ul>
			<li>Health : <?php echo $this->_tpl_vars['data']['hero']['health']; ?>
</li>
			<li>Mana : <?php echo $this->_tpl_vars['data']['hero']['mana']; ?>
</li>
		</ul>
	</span>
	<span id="divRenderer" class="mineCraftPlayer" title="<?php echo $this->_tpl_vars['data']['hero']['imgName']; ?>
" style="float:right;height:200px;width:200px;">
	</span>
</div>