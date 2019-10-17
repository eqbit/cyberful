<?

function get_block($name) {
	if(!include ($_SERVER["DOCUMENT_ROOT"]. "/wp-content/themes/cyber/blocks/" .$name. ".php")) {
		echo "<div style='padding: 20px; color: red;'>Block ". $name ." not found</div>";
	}
}

function pre($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}