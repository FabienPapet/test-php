# In a terminal

Install this project with `composer install`

In a first terminal run `php vendor/bin/var-dump-server`

In a second terminal run `php index.php`

# Debug

Add var dump in vendor/symfony/var-dumper/Server/Connection.php:88

```php
private static function nullErrorHandler(int $t, string $m)
{
    var_dump($t, $m);

}
```
