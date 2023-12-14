<?php

/**
 * DATABASE
 */

if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "root");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "brilliantmind");
} else {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "jsbril46_root");
    define("CONF_DB_PASS", "LqO!T#h!.&-u");
    define("CONF_DB_NAME", "jsbril46_brilliantmind");
}


/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.fluxus.co.mz");
define("CONF_URL_TEST", "https://www.localhost/fluxus");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Fluxus");
define("CONF_SITE_TITLE", "O lugar onde a sua empresa ganha destaque");
define("CONF_SITE_DESC", "Marketplace");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "fluxus.co.mz");
define("CONF_SITE_ADDR_STREET", "");
define("CONF_SITE_ADDR_NUMBER", "");
define("CONF_SITE_ADDR_COMPLEMENT", "Cidade de Maputo");
define("CONF_SITE_ADDR_CITY", "Maputo");
define("CONF_SITE_ADDR_STATE", "MP");
define("CONF_SITE_ADDR_ZIPCODE", "1103");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@fluxus");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@fluxus");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "fluxus");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "fluxus");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "fluxus");
define("CONF_SOCIAL_YOUTUBE_PAGE", "fluxus");
define("CONF_SOCIAL_LINKEDIN_PAGE", "fluxus");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "fluxus");
define("CONF_VIEW_ADMIN", "cafeadm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "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");
define("CONF_MAIL_SENDER", ["name" => "JS Brilliant Mind", "address" => "josuechone@jsbrilliantmind.com"]);
define("CONF_MAIL_SUPPORT", "info@jsbrilliantmind.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");