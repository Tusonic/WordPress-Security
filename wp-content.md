## CREATE wp-content\.htaccess

```
<FilesMatch "\.(?i:php)$">
	Order allow,deny
	Deny from all
</FilesMatch>
```