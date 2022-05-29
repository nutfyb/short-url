# Short URL with CodeIgniter 4

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
## Setup

git clone [https://github.com/nutfyb/short-url.git](https://github.com/nutfyb/short-url.git)
import DB shorttest.sql from short-url/shorttest.sql to xampp
enter app/Config/Database.php set up when needed.
rename env to .env
cd short-url
composer require codeigniter4/framework
composer update
php spark serve
open url localhost:8080


## Thanks
![Have Fun](https://media.giphy.com/media/vFKqnCdLPNOKc/giphy.gif)

