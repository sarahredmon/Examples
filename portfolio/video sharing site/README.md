HTTPS (Server Configuration):

Ensure your website is served over HTTPS for secure communication.
perl
Copy code

# Apache configuration (in .htaccess)
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]