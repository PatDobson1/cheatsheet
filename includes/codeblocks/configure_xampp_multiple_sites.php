&lt;VirtualHost *:81&gt;
    DocumentRoot "C:/sites/newsitename/htdocs"
    ServerName newsitename.local
    &lt;Directory "C:/sites/newsitename/htdocs"&gt;
        Require all granted
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
