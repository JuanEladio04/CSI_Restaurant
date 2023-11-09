<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/index.php":
		$CURRENT_PAGE = "index";
		$PAGE_TITLE = "Ristorante Luna della Rossa";
		break;
	case "/about.php":
		$CURRENT_PAGE = "About";
		$PAGE_TITLE = "About Us";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	case "/view/userGestion.php":
		$CURRENT_PAGE = "userGestion";
		$PAGE_TITLE = "Cuenta de usuario";
		break;
	case "/view/login.php":
		$CURRENT_PAGE = "login";
		$PAGE_TITLE = "Cuenta de usuario";
		break;
	case "/view/register.php":
		$CURRENT_PAGE = "login";
		$PAGE_TITLE = "Cuenta de usuario";
		break;
	case "/view/forgottenPassword.php":
		$CURRENT_PAGE = "login";
		$PAGE_TITLE = "Cuenta de usuario";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
?>