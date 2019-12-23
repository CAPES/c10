<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'c10';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = '@Mudar2019';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$is_web=http_response_code()!==FALSE;
if ($is_web) {
	$CFG->wwwroot   = 'http://'.$_SERVER["HTTP_HOST"].'/c10';
} else {
	$CFG->wwwroot   = 'http://localhost/c10';
}
$CFG->dataroot  = '/var/moodledatac10';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
