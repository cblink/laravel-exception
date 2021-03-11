<h1 align="center"> laravel-exception </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require cblink/laravel-exception -vvv
```

## Usage

```shell
php artisan vendor:publish --provider="Cblink\LaravelException\ExceptionServiceProvider"
```

modify `app/Exceptions/Handler.php` 

```php
<?php

namespace App\Exceptions;

use Exception;
use Cblink\LaravelException\BaseHandler;

// extends `Cblink\LaravelException\BaseHandler`
class Handler extends BaseHandler
{
    // ...

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param Exception               $exception
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // parent::render($request, $exception)
        
        // Change as follows
        return $this->renderApi($request, $exception);
    }
}
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cblink/laravel-exception/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/cblink/laravel-exception/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT