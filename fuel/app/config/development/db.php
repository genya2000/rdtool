<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
              /* 'type'           => 'pdo', */
		 'connection'     => array(
			'dsn'        => 'mysql:host=localhost;dbname=RDTOOL_DB',
			'username'   => 'root',
			'password'   => 'gen039',
		),
	),
);
