<?php /* Smarty version 2.6.26, created on 2012-06-01 00:38:36
         compiled from templates/dynmap_map.tpl */ ?>
<script>
<?php echo '
	var scripturlRoot = \''; ?>
<?php echo $this->_tpl_vars['data']['scripturlRoot']; ?>
<?php echo '\';
	var dynmapAjaxUrl = \'/wp/wp-admin/admin-ajax.php?action=\';
	dynmapPatchMap(scripturlRoot);
	var config = {
		url			: {
			configuration	: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=up/configuration\',
			update			: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=up/world/{world}/{timestamp}\',
			sendmessage		: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=up/sendmessage\',
			login			: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=up/login\',
			register		: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=up/register\',
			webroot			: scripturlRoot+\'/\'
		},
		urlArgsOverride	: {
			worldname		: \''; ?>
<?php echo $this->_tpl_vars['data']['prms']['world']; ?>
<?php echo '\',
			mapname			: \''; ?>
<?php echo $this->_tpl_vars['data']['prms']['map']; ?>
<?php echo '\',
			nopanel			: \''; ?>
<?php echo $this->_tpl_vars['data']['prms']['nopanel']; ?>
<?php echo '\' // be carrefull the test is made on a string
			
		},
		tileUrl		: \''; ?>
<?php echo $this->_tpl_vars['data']['scripturlRoot']; ?>
<?php echo '/tiles/\',
		//tileUrl		: dynmapAjaxUrl+\'minecraft_dynmap_fwd&path=tiles/\',
		tileWidth	: 128,
		tileHeight	: 128,
		inlineComponents:[{
			type				: \'minecraft-wp\',
			showlayercontrol	: '; ?>
<?php echo $this->_tpl_vars['data']['prms']['showlayercontrol']; ?>
<?php echo ',
			chat				: '; ?>
<?php echo $this->_tpl_vars['data']['prms']['chat']; ?>
<?php echo ',
			largeclock			: '; ?>
<?php echo $this->_tpl_vars['data']['prms']['largeclock']; ?>
<?php echo ',
			link				: '; ?>
<?php echo $this->_tpl_vars['data']['prms']['link']; ?>
<?php echo ',
			zoomOnFirstLink		: '; ?>
<?php echo $this->_tpl_vars['data']['prms']['zoomonfirstlink']; ?>
<?php echo '
		}]
	};
jQuery(document).ready(function($) {
	window.dynmap = new DynMap($.extend({
		container: $(\'#'; ?>
<?php echo $this->_tpl_vars['data']['prms']['uid']; ?>
<?php echo '\')
	}, config));
});
'; ?>

</script>
<div class="dynmap_container" style="width:<?php echo $this->_tpl_vars['data']['prms']['width']; ?>
;height:<?php echo $this->_tpl_vars['data']['prms']['height']; ?>
;">
	<div id="<?php echo $this->_tpl_vars['data']['prms']['uid']; ?>
" style="width:100%;height:100%;"></div>
</div>