<?php
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'test',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_PORT' => '3306',
	'DB_CHARSET' => 'utf8',
	'DB_DEBUG' => TRUE,
	'DN_PREFIX' => 'aft_',
	'TMPL_PARSE_STRING' => array(
        '__CSS__' => __ROOT__ . '/Public/Css',
        '__JS__' => __ROOT__ . '/Public/Js',
        '__IMG__' => __ROOT__ . '/Public/Images',
    ),
);