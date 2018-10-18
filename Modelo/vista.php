<?php 

class vista{
	
	function html($vista){
		$html = file_get_contents('../Vistas/'.$vista.'.html');
		return $html;
	}
}



?>