<?php

// Block File
// Blokowanie plikow

<FilesMatch "wp-config.*\.php|\.htaccess|readme\.html">
    Order allow,deny
    Deny from all
</FilesMatch>

// Force HTTPS
// Wymuszenie HTTPS

RewriteCond %{HTTP_HOST} ^www.example.pl(.*) [NC]
RewriteRule ^(.*)$ https://example.pl/$1 [R=301,L]
RewriteCond %{HTTPS} !=on
RewriteRule ^(.*)$ https://%{SERVER_NAME}%{REQUEST_URI} [R=301,L]

// Prevent Script Injections 
// Zapobiegaj wstrzykiwaniu skryptów
Options +FollowSymLinks
RewriteEngine On
RewriteCond %{QUERY_STRING} (<|%3C).*script.*(>|%3E) [NC,OR]
RewriteCond %{QUERY_STRING} GLOBALS(=|[|%[0-9A-Z]{0,2}) [OR]
RewriteCond %{QUERY_STRING} _REQUEST(=|[|%[0-9A-Z]{0,2})
RewriteRule ^(.*)$ index.php [F,L]

// Decure login
// Zabezpieczenie loginu
RewriteCond %{QUERY_STRING} author=\d
RewriteRule ^ /? [L,R=301]




