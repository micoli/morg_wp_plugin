<?php /* Smarty version 2.6.26, created on 2012-06-01 00:14:48
         compiled from templates/localplan_view_parcel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lower', 'templates/localplan_view_parcel.tpl', 8, false),array('modifier', 'capitalize', 'templates/localplan_view_parcel.tpl', 8, false),)), $this); ?>
<div class="localplan" style="display:block;">
	<div class="divcell">
		<div class="divtitle"><?php echo $this->_tpl_vars['data']['parcel']['regionId']; ?>
 of "<?php echo $this->_tpl_vars['data']['world']; ?>
"</div>
		<img class="parcelimg" src="<?php echo $this->_tpl_vars['data']['morg_wi_url_root']; ?>
/localPlan/<?php echo $this->_tpl_vars['data']['parcel']['world']; ?>
__<?php echo $this->_tpl_vars['data']['parcel']['regionId']; ?>
.png">
		<div class="divtxt">
			<ul>
				<li>surface : <?php echo $this->_tpl_vars['data']['parcel']['surface']; ?>
 block&#178;</li>
				<li><?php if ($this->_tpl_vars['data']['parcel']['owner']): ?>owner : <?php echo $this->_tpl_vars['data']['parcel']['owner']; ?>
, <?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['parcel']['buyStatus'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</li>
				<li>price : <?php echo $this->_tpl_vars['data']['parcel']['price']; ?>
</li>
				<li>
					<a href="#" class=" dynmapcoord" rel="{'container':'#<?php echo $this->_tpl_vars['data']['uid']; ?>
','world':'<?php echo $this->_tpl_vars['data']['world']; ?>
','map':'surface','zoom':6,'x':<?php echo $this->_tpl_vars['data']['parcel']['baryX']; ?>
,'y':64,z:<?php echo $this->_tpl_vars['data']['parcel']['baryZ']; ?>
}">
						onMap
					</a>
				</li>		
			</ul>
		</div>	
	</div>
</div>	