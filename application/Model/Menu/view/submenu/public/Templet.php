<div class="dropdown-submenu">
	<?
	if( \Library\Permission::get( 'Model', 'FileManager' ) ){
	?>
		<a class="dropdown-item" href="<?=$this->url(array('model' => 'FileManager'));?>"><?=_tr('Faili haldus');?></a>
	<?
	}
	?>
</div>