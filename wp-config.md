## Disable the Theme Editor and the Plugin Editor
```
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
```

## Debug 
In wp-config.php file locate 
```
define('WP_DEBUG', false);
```

And change it to 


```
if ( ! WP_DEBUG ) {
	ini_set('display_errors', 0);
}
```

## HIDE ERROR php.ini 

```
error_reporting(0);
ini_set('display_errors','Off');
ini_set('error_reporting',E_ALL);
```

## AUTOUPDATE
```
define( 'WP_AUTO_UPDATE_CORE', false );
```
```
define( 'AUTOMATIC_UPDATER_DISABLED', true );
```

