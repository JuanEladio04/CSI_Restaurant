<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/index.php":
		$CURRENT_PAGE = "index";
		$PAGE_TITLE = "Ristorante Luna della Rossa";
		break;
	case "/view/userGestion.php":
		$CURRENT_PAGE = "userGestion";
		$PAGE_TITLE = "Cuenta de usuario";
		break;
	case "/view/login.php":
		$CURRENT_PAGE = "login";
		$PAGE_TITLE = "Identificarse";
		break;
	case "/view/register.php":
		$CURRENT_PAGE = "register";
		$PAGE_TITLE = "Registro";
		break;
	case "/view/forgottenPassword.php":
		$CURRENT_PAGE = "forgottenPassword";
		$PAGE_TITLE = "Contraseña olvidada";
		break;
	case "/view/aboutUs.php":
		$CURRENT_PAGE = "aboutus";
		$PAGE_TITLE = "Sobre nosotros";
		break;
	case "/view/reserve.php":
		$CURRENT_PAGE = "reserve";
		$PAGE_TITLE = "Reservas";
		break;
	case "/view/termsAndConditions.php":
		$CURRENT_PAGE = "termsAndConditions";
		$PAGE_TITLE = "Términos y Condiciones";
		break;

	case "/view/feedback.php":
		$CURRENT_PAGE = "feedback";
		$PAGE_TITLE = "Opiniones";
		break;

	case "/view/offers.php":
		$CURRENT_PAGE = "offers";
		$PAGE_TITLE = "Ofertas";
		break;

	case "/view/card.php":
		$CURRENT_PAGE = "card";
		$PAGE_TITLE = "Carta";
		break;
	case "/view/addPlate.php":
		$CURRENT_PAGE = "addPlate";
		$PAGE_TITLE = "Añadir plato";
		break;
	case "/view/games.php":
		$CURRENT_PAGE = "games";
		$PAGE_TITLE = "Juegos";
		break;

	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Welcome to my homepage!";
}
