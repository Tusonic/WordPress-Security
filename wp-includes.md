## CREATE wp-includes\.htaccess

```
<FilesMatch "\.(?i:php)$">
	Order allow,deny
	Deny from all
</FilesMatch>
<Files wp-tinymce.php>
	Allow from all
</Files>
<Files ms-files.php>
	Allow from all
</File