<?php /* Smarty version 2.6.26, created on 2012-06-01 00:12:34
         compiled from templates/localplan_list_parcel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'templates/localplan_list_parcel.tpl', 4, false),array('modifier', 'lower', 'templates/localplan_list_parcel.tpl', 10, false),array('modifier', 'capitalize', 'templates/localplan_list_parcel.tpl', 10, false),)), $this); ?>
<h2>Parcels list of "<?php echo $this->_tpl_vars['data']['world']; ?>
"</h2>
<div class="localplan" style="display:block;">
<?php $_from = $this->_tpl_vars['data']['parcels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parcel']):
?>
<div class="divcell" style="<?php echo smarty_function_cycle(array('values' => "clear:both;,,"), $this);?>
">
	<div class="divtitle"><a href="#" class=" dynmapcoord" rel="{'container':'#<?php echo $this->_tpl_vars['data']['uid']; ?>
','world':'<?php echo $this->_tpl_vars['data']['world']; ?>
','map':'surface','zoom':6,'x':<?php echo $this->_tpl_vars['parcel']['baryX']; ?>
,'y':64,z:<?php echo $this->_tpl_vars['parcel']['baryZ']; ?>
}"><?php echo $this->_tpl_vars['parcel']['regionId']; ?>
</a></div>
	<img class="parcelimg" style="width:100px" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
/localPlan/<?php echo $this->_tpl_vars['parcel']['world']; ?>
__<?php echo $this->_tpl_vars['parcel']['regionId']; ?>
.png">
	<div class="divtxt">
		<ul>
			<li>surface : <?php echo $this->_tpl_vars['parcel']['surface']; ?>
 block&#178;</li>
			<li><?php if ($this->_tpl_vars['parcel']['owner']): ?>owner : <?php echo $this->_tpl_vars['parcel']['owner']; ?>
, <?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['parcel']['buyStatus'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</li>
			<li>price : <?php echo $this->_tpl_vars['parcel']['price']; ?>
</li>
			<li>
				<a href="./<?php echo $this->_tpl_vars['parcel']['regionId']; ?>
">
					detail
				</a>
			</li>		
		</ul>
	</div>	
</div>
<?php endforeach; endif; unset($_from); ?>
</div>	