<? add_theme_support( 'title-tag' );

add_filter( 'wp_mail_from_name', function($from_name){
	return 'Cyberful form handler';
} );

function form_handle() {
	
	
	$title = $_POST["form_name"] ? $_POST["form_name"] : "Новая заявка";
	
	$headers = 'From: Cyberful form handler' . "\r\n";
	
	$content = "";
	
	$content .= 'Имя клиента: ' .$_POST["name"]. "\r\n";
	$content .= 'Телефон/email: ' .$_POST["phone"]. "\r\n";
	
	if($_POST["email"]) {
		$content .= 'Сообщение: ' .$_POST["text"]. "\r\n";
	}
	
	if($_POST["message"]) {
		$content .= 'Сообщение: ' .$_POST["text"]. "\r\n";
	}
	
	wp_mail("eqbit@ya.ru", $title, $content, $headers);
	echo json_encode('success');
	die();
}

add_action( 'wp_ajax_form_handle', 'form_handle' );
add_action( 'wp_ajax_nopriv_form_handle', 'form_handle' );