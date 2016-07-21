<?php

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) { die('You cannot directly access this file'); };

##########################################################################
## Set All Values That are Required in CORE/CI Script					##
##########################################################################
date_default_timezone_set('Asia/Kolkata');
/*
For the United States:
Eastern ........... America/New_York
Central ........... America/Chicago
Mountain .......... America/Denver
Mountain no DST ... America/Phoenix
Pacific ........... America/Los_Angeles
Alaska ............ America/Anchorage
Hawaii ............ America/Adak
Hawaii no DST ..... Pacific/Honolulu
*/

##########################################################################
## Attach Required Files												##
##########################################################################
require_once 'framework/lib/class_session.php';
require_once 'framework/lib/class_sitelog.php';
require_once 'framework/image-magician/php_image_magician.php';
require_once 'framework/lib/helper.php';
require_once 'framework/db.php';

##########################################################################
## Attach Optional Files												##
##########################################################################
require_once 'framework/faker/src/autoload.php';



##########################################################################
## Server Values  														##
##########################################################################
set_error_handler("errorHandler"); /* Does Not Shoes Error on Site */
define("ERROR_SEND",'LOG'); /* LOG | MAIL */
define("SITE_ERROR_TO_MAIL",'jangra.ravik@outlook.com');
define("DOMAIN","http://".$_SERVER['HTTP_HOST']);
define("SITE_GOOGLE_ANALYTICS","UXXXXXXXXX-1");
define("ADMIN_MAIL_TO","jangra.ravik@outlook.com");
define("ADMIN_MAIL_CC","");
define("ADMIN_MAIL_BCC","");
define("ADMIN_MAIL_NO_REPLY_EMAIL","noreply@domain.com");