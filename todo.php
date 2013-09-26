<?php

require_once 'todo.civix.php';
require_once 'config.php';

/**
 * Implementation of hook_civicrm_config
 */
function todo_civicrm_config(&$config) {
  _todo_civix_civicrm_config($config);
}

function todo_civicrm_buildForm($formName, &$form) {
print_r($form)
die ($formName);

  if ($formName == 'CRM_Event_Form_Registration_Register') {
}
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function todo_civicrm_xmlMenu(&$files) {
  _todo_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function todo_civicrm_install() {
  return _todo_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function todo_civicrm_uninstall() {
  return _todo_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function todo_civicrm_enable() {
  return _todo_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function todo_civicrm_disable() {
  return _todo_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function todo_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _todo_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function todo_civicrm_managed(&$entities) {
  return _todo_civix_civicrm_managed($entities);
}
