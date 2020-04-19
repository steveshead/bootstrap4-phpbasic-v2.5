<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "About Us";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Us";
			break;
		case "/news.php":
			$CURRENT_PAGE = "News";
			$PAGE_TITLE = "News Page";
			break;
		case "/album.php":
			$CURRENT_PAGE = "Album";
			$PAGE_TITLE = "Album Page";
			break;
		case "/pricing.php":
			$CURRENT_PAGE = "Pricing";
			$PAGE_TITLE = "Pricing Page";
			break;
		case "/signin.php":
			$CURRENT_PAGE = "Signin";
			$PAGE_TITLE = "Sign in Page";
			break;
		case "/checkout.php":
			$CURRENT_PAGE = "Checkout";
			$PAGE_TITLE = "Checkout Page";
			break;
		case "/product.php":
			$CURRENT_PAGE = "Product";
			$PAGE_TITLE = "Product Page";
			break;
		case "/custom.php":
			$CURRENT_PAGE = "Custom";
			$PAGE_TITLE = "Custom Colors";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>
