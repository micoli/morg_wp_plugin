<?php /* Smarty version 2.6.26, created on 2012-05-22 21:29:43
         compiled from templates/classes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'templates/classes.tpl', 14, false),array('modifier', 'lower', 'templates/classes.tpl', 54, false),array('modifier', 'capitalize', 'templates/classes.tpl', 54, false),array('modifier', 'replace', 'templates/classes.tpl', 54, false),array('modifier', 'join', 'templates/classes.tpl', 77, false),)), $this); ?>
<?php if ($this->_tpl_vars['data']['withGraph']): ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	<?php $_from = $this->_tpl_vars['data']['classes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['classe']):
?>
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'level');
    data.addColumn('number', 'Mana');
    data.addColumn('number', 'Health');
    data.addRows([
      ['1', <?php echo $this->_tpl_vars['classe']['baseMaxMana']; ?>
,<?php echo $this->_tpl_vars['classe']['baseMaxHealth']; ?>
],
      ['<?php echo smarty_function_math(array('equation' => "x/4",'x' => $this->_tpl_vars['classe']['maxLevel']), $this);?>
',  <?php echo smarty_function_math(array('equation' => "x+y*z/4",'x' => $this->_tpl_vars['classe']['baseMaxMana'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxManaPerLevel']), $this);?>
,<?php echo smarty_function_math(array('equation' => "x+y*z/4",'x' => $this->_tpl_vars['classe']['baseMaxHealth'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxHealthPerLevel']), $this);?>
],
      ['<?php echo smarty_function_math(array('equation' => "x/2",'x' => $this->_tpl_vars['classe']['maxLevel']), $this);?>
',  <?php echo smarty_function_math(array('equation' => "x+y*z/2",'x' => $this->_tpl_vars['classe']['baseMaxMana'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxManaPerLevel']), $this);?>
,<?php echo smarty_function_math(array('equation' => "x+y*z/2",'x' => $this->_tpl_vars['classe']['baseMaxHealth'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxHealthPerLevel']), $this);?>
],
      ['<?php echo smarty_function_math(array('equation' => "x/4*3",'x' => $this->_tpl_vars['classe']['maxLevel']), $this);?>
',  <?php echo smarty_function_math(array('equation' => "x+y*z/4*3",'x' => $this->_tpl_vars['classe']['baseMaxMana'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxManaPerLevel']), $this);?>
,<?php echo smarty_function_math(array('equation' => "x+y*z/4*3",'x' => $this->_tpl_vars['classe']['baseMaxHealth'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxHealthPerLevel']), $this);?>
],
      ['<?php echo smarty_function_math(array('equation' => 'x','x' => $this->_tpl_vars['classe']['maxLevel']), $this);?>
', <?php echo smarty_function_math(array('equation' => "x+y*z",'x' => $this->_tpl_vars['classe']['baseMaxMana'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxManaPerLevel']), $this);?>
,<?php echo smarty_function_math(array('equation' => "x+y*z",'x' => $this->_tpl_vars['classe']['baseMaxHealth'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxHealthPerLevel']), $this);?>
],
    ]);

    var options = {
      width: 250, height: 150,
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div_<?php echo $this->_tpl_vars['data']['uid']; ?>
<?php echo $this->_tpl_vars['classe']['name']; ?>
'));
    chart.draw(data, options);
    <?php endforeach; endif; unset($_from); ?>
  }
</script>
<?php endif; ?>
<?php if ($this->_tpl_vars['data']['menu']): ?>
<ul>
<?php $_from = $this->_tpl_vars['data']['classes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['classe']):
?>
	<li><a href="#skill_<?php echo $this->_tpl_vars['classe']['name']; ?>
"><?php echo $this->_tpl_vars['classe']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['data']['classes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['classe']):
?>
	<a name="skill_<?php echo $this->_tpl_vars['classe']['name']; ?>
"></a>
	<h1><u><?php echo $this->_tpl_vars['classe']['name']; ?>
</u></h1>
	<div>
		<div style="float:left;width:300px">
			<i><?php echo $this->_tpl_vars['classe']['description']; ?>
</i>
			<ul>
				<li>max level: <?php echo $this->_tpl_vars['classe']['maxLevel']; ?>
</li>
				<li>base health : <?php echo $this->_tpl_vars['classe']['baseMaxHealth']; ?>
 (<?php echo $this->_tpl_vars['classe']['maxHealthPerLevel']; ?>
/level, <?php echo smarty_function_math(array('equation' => "x+y*z",'x' => $this->_tpl_vars['classe']['baseMaxHealth'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxHealthPerLevel']), $this);?>
@L<?php echo $this->_tpl_vars['classe']['maxLevel']; ?>
)</li>
				<li>base mana : <?php echo $this->_tpl_vars['classe']['baseMaxMana']; ?>
 (<?php echo $this->_tpl_vars['classe']['maxManaPerLevel']; ?>
/level, <?php echo smarty_function_math(array('equation' => "x+y*z",'x' => $this->_tpl_vars['classe']['baseMaxMana'],'y' => $this->_tpl_vars['classe']['maxLevel'],'z' => $this->_tpl_vars['classe']['maxManaPerLevel']), $this);?>
@L<?php echo $this->_tpl_vars['classe']['maxLevel']; ?>
)</li>
			</ul>
		</div>
		<?php if ($this->_tpl_vars['data']['withGraph']): ?><div style="float:right;" id="chart_div_<?php echo $this->_tpl_vars['data']['uid']; ?>
<?php echo $this->_tpl_vars['classe']['name']; ?>
" style="width: 250px; height: 150px;"></div><?php endif; ?>
	</div>
	<?php if ($this->_tpl_vars['data']['withArmor']): ?>
	<h2>Armors</h2>
	<?php $_from = $this->_tpl_vars['classe']['allowedArmor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['armor']):
?>
		<img src="<?php echo $this->_tpl_vars['data']['morg_wi_export_root']; ?>
/items/<?php echo $this->_tpl_vars['armor']; ?>
_000.png" title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['armor'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['armor'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['data']['withWeapon']): ?>
	<h2>Weapons</h2>
	<?php $_from = $this->_tpl_vars['classe']['allowedWeapons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['weapon']):
?>
		<img src="<?php echo $this->_tpl_vars['data']['morg_wi_export_root']; ?>
/items/<?php echo $this->_tpl_vars['weapon']; ?>
_000.png" title="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['weapon'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['weapon'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['data']['withSkill']): ?>
		<br /><br />
		<table>
			<thead>
				<td><b>Skill</b></td>
				<td><b>Usage</b></td>
				<td><b>Notes</b></td>
				<td><b>Types</b></td>
			</thead>
		
		<?php $_from = $this->_tpl_vars['classe']['skills']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skill']):
?>
			<tr>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['skill']['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</td>
				<td><?php echo $this->_tpl_vars['skill']['usage']; ?>
</td>
				<td><?php echo join($this->_tpl_vars['skill']['notes'], ","); ?>
</td>
				<td><?php echo ((is_array($_tmp=((is_array($_tmp=join(((is_array($_tmp=$this->_tpl_vars['skill']['types'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)), ", "))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
	<?php endif; ?>
	<hr />
<?php endforeach; endif; unset($_from); ?>