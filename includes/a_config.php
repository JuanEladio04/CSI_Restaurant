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
<<<<<<< HEAD
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
=======
	case "/view/aboutUs.php":
		$CURRENT_PAGE = "aboutUs";
		$PAGE_TITLE = "Sobre nosotros";
>>>>>>> 40806a41baa827af242900f2d0e2657fb88624c4
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
?>