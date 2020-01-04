<? add_theme_support( 'title-tag' );

if (function_exists('add_image_size')){
	add_image_size( 'category-thumb',300,300, true);
	add_image_size( 'blog-thumb', 120, 120, array( 'center', 'center' ) );
}

add_filter( 'wp_mail_from_name', function($from_name){
	return 'Cyberful form handler';
} );

function form_handle() {
	
	$title = $_POST["form_name"] ? $_POST["form_name"] : "Новая заявка";
	
	$content = "";
	
	$content .= 'Имя клиента: ' .$_POST["name"]. "\r\n";
	$content .= 'Телефон/email: ' .$_POST["phone"]. "\r\n";
	
	if($_POST["email"]) {
		$content .= 'Email: ' .$_POST["email"]. "\r\n";
	}
	
	if($_POST["site"]) {
		$content .= 'Сайт: ' .$_POST["site"]. "\r\n";
	}
	
	if($_POST["message"]) {
		$content .= 'Сообщение: '. "\r\n" .$_POST["message"]. "\r\n";
	}
	
	wp_mail("eqbit@ya.ru", $title, $content);
	echo json_encode('success');
	die();
}

add_action( 'wp_ajax_form_handle', 'form_handle' );
add_action( 'wp_ajax_nopriv_form_handle', 'form_handle' );