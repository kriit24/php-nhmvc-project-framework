<div class="dropdown dropdown-group">

	<div class="dropdown-menu dropdown-minimenu">
		<h6 class="dropdown-header"><a class="btn btn-primary"><i class="fa fa-bars"></i></a></h6></div>
	<div class="dropdown-maximenu">

	<?
		echo '<div class="dropdown-menu'.(!$_GET['route'] ? ' active' : '').'">
			<h6 class="dropdown-header"><a href="/admin">'.$this->Language('Dashboard').'</a></h6>';
		echo '</div>';

		echo '<div class="dropdown-menu'.(in_array(strtolower($_GET['model']), array('client', 'user', 'privilege', 'role')) ? ' active' : '').'">
			<h6 class="dropdown-header"><a href="#">'.$this->Language('User interface').'</a></h6>';
		$this->Submenu('admin/User_interface');
		echo '</div>';
		
		echo '<div class="dropdown-menu'.($_GET['model'] == 'Translate' ? ' active' : '').'">
			<h6 class="dropdown-header"><a href="'.$this->url(array('model' => 'Translate')).'">'.$this->Language('Translate').'</a></h6>';
		//$this->Submenu('admin/Translate');
		echo '</div>';

		echo '<div class="dropdown-menu'.($_GET['command'] ? ' active' : '').'">
			<h6 class="dropdown-header"><a href="#">'.$this->Language('Command').'</a></h6>';
		$this->Submenu('admin/Command');
		echo '</div>';

		echo '<div class="dropdown-menu">
			<h6 class="dropdown-header"><a href="/phpmyadmin?db='.\Conf\Conf::_DB_CONN['_default']['_database'].'" target="_blank">'.$this->Language('Phpmyadmin').'</a></h6>';
		//$this->Submenu('admin/Command');
		echo '</div>';
	?>
	</div>
</div>