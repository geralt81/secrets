<?php

if(isset($_GET['action'])){
	switch ($_GET['action']) {
		case 'view_registration_form':
			$content = view_registration_form();
			break;
		case 'view_login_form':
			$content = view_login_form();
			break;
		case 'registration':
			$content = registration($my_conn);
			break;
		case 'login':
			$content = login($my_conn);
			break;
    case 'logout':
			logout();
			break;
		default:
			$content = view_mainpage($my_conn);
			break;
	}
}
else{
	$content = view_mainpage($my_conn);
}

echo $content;

?>