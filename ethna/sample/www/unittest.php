<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Sample_Controller.php';

Sample_Controller::main('Sample_Controller', array(
    '__ethna_unittest__',
    )
);
