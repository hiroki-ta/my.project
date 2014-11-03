<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Sample
 *  @version    $Id: e57de7d50846a1bd6724ad3384c60d4d344aa27c $
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Sample_Controller.php';

ini_set('max_execution_time', 0);

Sample_Controller::main_CLI('Sample_Controller', '{$action_name}');
