# Bootstrap 4 - PHP Basic Template v2.5

View the [demo](https://devtestweb.com/phpbasic-v2.5/) site [here](https://devtestweb.com/phpbasic-v2.5/).

This is a basic PHP template using the Bootstrap 4 framework, as well as utilizing many of the Bootstrap 4 page templates, and the Bootstrap theming guidelines. Using the theming guide gives you the ability to change, edit and update SCSS variables (etc) as required - more details below. You can view the theming guide [here](https://getbootstrap.com/docs/4.4/getting-started/theming/).

Hopefully this is pretty self explanatory. Each page has an "include" for required files like the header and footer.  Instead of editing every page if you change something in the header and/or footer you only edit one file. You'll notice there's a jumbotron and banner php file.  I wanted the jumbotron on the index page only but wanted a banner on all other pages. I created a file called banner.php and used PHP to display the page name.

Next up for me is using a database... that'll be fun.


### Active Menu
The PHP code in the file 'includes/a_config.php' will highlight the menu link for the current page and set the title for that particular page.  If you add more pages you will need to add an entry to that file.

```html
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
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>
```

### Replace the favicons
Create your custom favicon [here](https://www.favicon-generator.org/) or [here](https://favicon.io/).  Then with the code generated replace the code below in your header.php, and replace the favicon images in assets/img/favicons folder with yours.

```html
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
<link rel="manifest" href="assets/favicons/site.webmanifest">
```

View the [demo](https://devtestweb.com/phpbasic-v2.5/) site [here](https://devtestweb.com/phpbasic-v2.5/).

---------------------------------------------------------
### Edit the SCSS Defaults
To follow Bootstrap's theming guidelines download the Bootstrap 4 source files - the source download includes the SCSS folder.  This project's scss and css folder structure looks like the diagram below.

		this-project/
		├── assets
		│		└── css
		│				└── custom.css
		│		└── scss
		│				└── custom.scss
		└── bootstrap/
		    ├── js
		    └── scss

In your custom.scss import Bootstrap’s source Sass files. You have two options: include all of Bootstrap, or pick the parts you need. In this theme I have included all of Bootstrap. Note that bootstrap.scss has to be imported at the bottom of the custom.scss file to work on this project.

Using your favorite code editor (I use Atom) compile your custom.scss file to assets/css/custom.css, and replace bootstrap.css in your header.php with custom.css.  

Below some examples of overriding Bootstrap (using custom.scss).  For more examples visit the Bootstrap 4 theming page [here](https://getbootstrap.com/docs/4.4/getting-started/theming/).

```scss
// override bootstrap default theme colors
$theme-colors: (
  "primary": #375a7f,
  "secondary": #444,
  "success": #00bc8c,
  "info": #3498DB,
  "warning": #F39C12,
  "danger": #E74C3C,
);

// increase the default spacing
$spacer:1.25rem;

// adjust the default heading font weight
$headings-font-weight:300;

// adjust the default font weights
$font-weight-light:200;
$font-weight-normal:300;
$font-weight-bold:500;

// adjust the default font size
$font-size-base:1.2rem;

// add more spacers
$spacer: 1rem !default;
$spacers: (
    6: ($spacer * 4),
    7: ($spacer * 5),
    8: ($spacer * 7.50),
    9: ($spacer * 10)
  );

// set the button border radius
$btn-border-radius:2px;

// change the hyperlink color
$link-color: #00bc8c;

// remove underline from hyperlinks
$link-hover-decoration: none;


// Core bootstrap scss import - this should always be at the bottom of the custom.scss file
@import '../../bootstrap/scss/bootstrap';
```
You can view the current color scheme [here](https://devtestweb.com/phpbasic-v2.5/custom.php)

View the [demo](https://devtestweb.com/phpbasic-v2.5/) site [here](https://devtestweb.com/phpbasic-v2.5/).
