# Laravel Research

## Topics 

-[Request Lifecycle](#request-lifecycle)
-[Facades](#facades)
-[laravel routing](#laravel-routing)
-[]()
-[]()
-[]()
-[]()
-[]()
-[]()
-[]()
-[]()
-[]()
-[]()


### Request Lifecycle

**First Steps**
The entry point for all requests to a Laravel application is the public/index.php file. All requests are directed to this file by your web server (Apache / Nginx) configuration. The index.php file doesn't contain much code. Rather, it is a starting point for loading the rest of the framework.

The index.php file loads the Composer generated autoloader definition, and then retrieves an instance of the Laravel application from bootstrap/app.php. The first action taken by Laravel itself is to create an instance of the application / service container.

**HTTP / Console Kernels**
Next, the incoming request is sent to either the HTTP kernel or the console kernel, using the handleRequest or handleCommand methods of the application instance, depending on the type of request entering the application. These two kernels serve as the central location through which all requests flow. For now, let's just focus on the HTTP kernel, which is an instance of Illuminate\Foundation\Http\Kernel.

The HTTP kernel defines an array of bootstrappers that will be run before the request is executed. These bootstrappers configure error handling, configure logging, detect the application environment, and perform other tasks that need to be done before the request is actually handled. Typically, these classes handle internal Laravel configuration that you do not need to worry about.

The HTTP kernel is also responsible for passing the request through the application's middleware stack. These middleware handle reading and writing the HTTP session, determining if the application is in maintenance mode, verifying the CSRF token, and more. We'll talk more about these soon.

The method signature for the HTTP kernel's handle method is quite simple: it receives a Request and returns a Response. Think of the kernel as being a big black box that represents your entire application. Feed it HTTP requests and it will return HTTP responses.

### Facades
Laravel facades serve as "static proxies" to underlying classes in the service container, providing the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods

All of Laravel's facades are defined in the ```Illuminate\Support\Facades namespace```

To complement facades, Laravel offers a variety of global "helper functions" that make it even easier to interact with common Laravel features. Some of the common helper functions you may interact with are view, response, url, config, and more. Each helper function offered by Laravel is documented with their corresponding feature; however, a complete list is available within the dedicated

**Facades vs. Dependency Injection**
One of the primary benefits of dependency injection is the ability to swap implementations of the injected class. This is useful during testing since you can inject a mock or stub and assert that various methods were called on the stub.

Typically, it would not be possible to mock or stub a truly static class method. However, since facades use dynamic methods to proxy method calls to objects resolved from the service container, we actually can test facades just as we would test an injected class instance

### laravel routing

**The Default Route Files**
All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by Laravel using the configuration specified in your application's bootstrap/app.php file. The routes/web.php file defines routes that are for your web interface

**API Routes**
If your application will also offer a stateless API, you may enable API routing using the install:api Artisan command:

```php artisan install:api```
The install:api command installs Laravel Sanctum, which provides a robust, yet simple API token authentication guard which can be used to authenticate third-party API consumers, SPAs, or mobile applications. In addition, the install:api command creates the routes/api.php file:

```php
Route::get('/user', function (Request $request) {
    return $request->user();
    })->middleware('auth:sanctum');
```
The routes in routes/api.php are stateless and are assigned to the api middleware group. Additionally, the /api URI prefix is automatically applied to these routes, so you do not need to manually apply it to every route in the file. You may change the prefix by modifying your application's bootstrap/app.php file:
```php
->withRouting(
    api: __DIR__.'/../routes/api.php',
    apiPrefix: 'api/admin',
    // ...
)
```





---
## Refrences
-[Laravel Documents](https://laravel.com/docs/11.x)