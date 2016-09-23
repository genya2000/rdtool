<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
                /* 'type'           => 'pdo', */
		'connection'     => array(
			'dsn'        => 'mysql:host=localhost;dbname=RDTOOL_DB',
			'username'   => 'infolabdb',
			'password'   => 'koiwatky2014',
		),
	),
);
