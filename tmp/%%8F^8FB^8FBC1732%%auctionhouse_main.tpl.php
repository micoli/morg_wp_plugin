<?php /* Smarty version 2.6.26, created on 2012-05-23 23:59:42
         compiled from templates/auctionhouse_main.tpl */ ?>
<script>
	wp_ajax_url='<?php  print get_site_url(); ?>/wp-admin/admin-ajax.php';
</script>
<?php echo '
<style type="text/css"><!--
#auction_house td {
	white-space:nowrap;
}
--></style>
'; ?>

<h2 class="currentUser"></h2>
Balance : <span class="currentBalance"></span><br/>
Inventory : <span class="inventory"><?php echo ''; ?><?php $this->assign('sepa', ""); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['data']['inventory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stack']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['sepa']; ?><?php echo ''; ?><?php echo $this->_tpl_vars['stack']['img']; ?><?php echo '('; ?><?php echo $this->_tpl_vars['stack']['amount']; ?><?php echo ')'; ?><?php $this->assign('sepa', ",&nbsp;"); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
</span>
<hr>
<table id="auction_house" cellspacing="0" cellpadding="0" width="100%"  class="display">
	<thead>
		<tr>
			<th>Item</th>
			<th>Buyer</th>
			<th>Seller</th>
			
			<th>Price</th>
			<th>Quantity</th>
			
			<th>Buy</th>
			<th>Bid</th>
			<th>Expiration</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>