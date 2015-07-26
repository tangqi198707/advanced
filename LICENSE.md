一些配置项:
<VirtualHost *:80>
    ServerAdmin 923332947@qq.com
    DocumentRoot "D:/www/advanced/backend/web"
    ServerName tangqi.com
    DirectoryIndex index.php index.html index.phtml index.htm
    <Directory D:/www/advanced/backend/web>
        DirectoryIndex index.php index.html index.phtml index.htm
        AllowOverride All
        Order allow,deny
        Allow from all
        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule . index.php
    </Directory>
</VirtualHost>

数据库文件在 data目录下
