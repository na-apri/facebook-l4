# FB-SDK Laravel4 ServiceProvider

## Install

1. composer.json

		```JSON
		{
			"repositories" : [
				{
					"packagist": false,
					"type": "vcs",
					"url": "https://github.com/na-apri/facebook-l4.git"
				}
			],
		    "require": {
				"na-apri/facebook-l4": "dev-master"
		    }
		}
		```

2.	composer update


		composer update


3. add service provider

	app/config/app.php
	
		'providers' => array(
			// ... 
			'NaApri\FacebookL4\FacebookL4ServiceProvider',
		);

	app/config/app.php
	
		'aliases' => array(
			// ...
			
			'FB' => 'NaApri\FacebookL4\Facebook',			
		);

4. publish

		php artisan publish na-apri/facebook-l4

5. config

	app/config/package/na-apri/facebookl4/config.php
		
		return array(
			'appId' => 'YOURAPPID',
			'secret' => 'YOURSECRET',
		);

	note:  'appId' change 'app_id' for publish command.

	'app_id' rewrite 'appId'.
