<?php
define('QRY_SITE_DETAILS',           'SELECT website_name FROM settings WHERE id=1');

define('QRY_CMS',                 	 'SELECT * FROM site_contents WHERE id=?');

define('QRY_NEWS',                 	 'SELECT * FROM news ORDER BY nDate DESC');

define('CAT',               	  	 'SELECT * FROM category ORDER BY rank ASC');

define('QRY_USER_BYEMAIL',			'SELECT * FROM users WHERE email_id=?');


?>