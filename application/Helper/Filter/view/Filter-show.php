<div class="filter_helper_form filter_helper_form_show" style="text-align:center;">
<?
$elemList = $this->Form->Header($this->form);
foreach($elemList as $k => $row){

	if( $this->Form->continue[$k] )
		continue;

	$exp = explode('[', $row['name']);
	$name = $exp[0];

	echo '<div class="filter_helper_show filter_helper_'.$name.'" rel="'.$row['name'].'">'.
		$this->Form->tr($elemList, $k, $row).
	'</div>';
}
?>
	<div class="form-group"><input type="submit" name="filter" class="btn btn-primary form-control" value="<?=_tr('Search');?>"> <a href="<?=($_SERVER['SCRIPT_URI'] ?? './');?>"><?=_tr('Clear');?></a></div>
</div>

<?
\Template\Template::includes();
?>

<script type="text/javascript">
$(document).ready(function(){

	$('.filter_helper_form_show').ClickFilter();
});
</script>