<?php
#######################################################
/* advanced configuration options */
#######################################################
# for extra security, store your images in a folder outside
# of the public webtree and define the path, ie,
# define('PATH', '/home/inaccessible_folder/images');
# NOTE: there is no ending slash
// define('PATH', str_replace('\\', '/', getcwd()));
define('Home_path', '/Users/Fernando/Documents/2015/Projects');
define('Home_url', 'http://localhost:8888');
define('PRIVATE_SESSION', Home_path.'/ContactMailer/secure/');
define('PRIVATE_DB', Home_path.'/ContactMailer/secure/ContactMailer/');
define ('Secure_path', Home_path.'/ContactMailer/secure/ContactMailer/');

// url locations
$hdr_image = Home_url."/ContactMailer/images/JCLMHeader.jpg";
$url_images = Home_url."/ContactMailer/images/";
$url_secure_php = Home_url."/ContactMailer/php/";


// set path for location of files on the server
$html_files = Home_path."/ContactMailer/html/";
$php_files  = Home_path."/ContactMailer/php/";
$images_files  = Home_path."/ContactMailer/images/";
$mailer_files = Home_path."/ContactMailer/mailer/";
$secured_php = Secure_path;

// reply email address on the regemail header
// regmail Jesus Caritas Lay Fraternity title
$regemailaddr = "webmaster@bolitec.org";
$regemailtitle = "Contact Mailer Web App";
$brand = "MAMP";

#######################################################
/* optional configuration options */
#######################################################

# table settings for images display
define('ROWS', 3);
define('COLS', 5);

# thumbnail demensions
define('THMBWIDTH', 160);
define('THMBHEIGHT',160);

# Application title
define('TITLE', "Contact Mailer Web Application");

# watermark your images, ie,
# define('WATERMARK', "This is a watermark");
define('WATERMARK', $_SERVER['HTTP_HOST']);

# location to self
define('SELF', $_SERVER['PHP_SELF']);

# allowed image MIME types
define('TYPE', serialize(array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/gif', 'image/png')));

# check for GD library
if(!function_exists('imagegif')) {
	die("<html>\r\n<body>\r\n<b>ERROR:</b> You either do not have the GD library installed, or you are using an outdated version of the library that does not support GIF images. If you are not concerned about GIF images, then you may remove this check from the configuration file. Otherwise, you will need to install or upgrade the GD library before you are able to use this gallery. Please visit <a href=\"http://www.php.net/gd\">http://www.php.net/gd</a> for more information.\r\n</body>\r\n</html>");
}
