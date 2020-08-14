# Start-router
PHP Router


### Features
- Supports GET, POST, PUT, DELETE, OPTIONS, PATCH, HEAD, AJAX and ANY request methods
- Controllers support (Example: HomeController@about)
- Before and after Route Middlewares support
- Static Route Patterns
- Dynamic Route Patterns
- Easy-to-use patterns
- Adding a new pattern supports. (with RegExp)
- Namespaces supports.
- Group Routing
- Custom 404 handling
- Debug mode (Error message open/close)


## Example Usage
```php
require 'vendor/autoload.php';

$router = new Buki\Router();

$router->get('/', function() {
    return 'Hello World!';
});
$router->get('/controller', 'TestController@main');

$router->run();
```