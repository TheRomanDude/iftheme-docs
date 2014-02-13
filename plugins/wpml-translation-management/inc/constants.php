<?php
define('WPML_TM_FOLDER', basename(WPML_TM_PATH));

if((defined('FORCE_SSL_ADMIN') && FORCE_SSL_ADMIN) || is_ssl()){
    define('WPML_TM_URL', rtrim(str_replace('http://','https://', WP_PLUGIN_URL), '/') . '/' . WPML_TM_FOLDER );
}else{
    define('WPML_TM_URL', WP_PLUGIN_URL . '/' . WPML_TM_FOLDER );
}
