## 1

## 2

Query builders returns collection objects instead of arrays.  The goal is to make Laravel API more consistent, as Eloquent calls already return collection objects.

## 3

**cache**

## 4

`resources/assets/js/app.js`

```js
require('./bootstrap'); // Sets up common globals you might want
```

`resources/assets/js/bootstrap.js` pulls in jQuery and Vue into the project.

## 5

`php artisan vendor:publish` Will publish pagination files to make editing and changing them easier.

## 6

Anything that is defined as a public _property_ will be available to the view.

1. Define mail class.

2. Define a view within the mail class.

Laravel uses **reflection** to read all public properties in this class(mail), populates the `$data` array, and sent to the view.

3. Set up:
	1. .env: set up mail provider.

## 7

When using the `foreach` or `forelse` directives, Blade provides a new `$loop` object that is available to each iteration and contains details about the loop.

## 8

`belongsToMany` has a new `toggle()` method for all its relationships, that solves the need to delete a pivot table record if it exists, or adding one if it doesn't exist.

## 9

Creating a notification that sends an email:
` //...->notify();` method in the _User.php_ model.

Header of the email and the signature ('regards...') can be configured from `config/app.php`

The template for the email is in `Notifications/resources/views/email.blade.php`

## 10

Database notifications are stored in the database, where they can be fetch and displayed for the user.

_Have one view per notification_.

## 11

For slack notifications, slack offers incoming webhooks.  These notifications can be set to private notifications.


## 12

Avatars are stored in storage/app/avatars.
The `->store('avatars');` calls the 'store' method in UploadedFile.php.  The 'store' method can be passed a `$path` and `$disk` that can be anything in the _filesystems.php_

## 13

Laravel Passport, won't install in laravel 5.3.

1. Require laravel/passport in the project's `composer.json` file.
2. Register the passport service provider in `config/app.php` file, `Laravel\Passport\PassportServiceProvider::class,`
3. ...follow the steps in https://laravel.com/docs/5.4/passport#installation

`php artisan passport:install` generates an encription key that lets passport securly create password tokens.

`use Laravel\Passport\HasApiTokens;` provides useful functions for accessing the current token for the authenticated user and the scope available to that user.

Passport ships with vue components ready to use (need to be registered in `app.js`) in our front-end:

`resources/assets/js/components/passport`

`php artisan vendor:publish --tags=` publishes a subset of resources that can be published from all our packages.

## 14

**Closure-Based commands** `/project/routes/console.php` commands created here do not need to be registered in `/laravel53/app/Console/Kernel.php`.  Structure of this file is similar to the `/project/routes/web.php`.

As soon as a command is created here, it will be available when running `php artisan`.
Commands in `/project/routes/console.php` can be ran with `php artisan inspire` 

```php
Artisan::command('generate:model {name}', function () {
    exec('touch app/' . $this->argument('name') . '.php');//creates a file
})->describe('Generate a special model.');
```

```php
Artisan::command('generate:model {name}', function () {
    $model = $this->argument('name');
    File::put("app/{$model}.php", "class{}");// Creates a template with 'class{}'
})->describe('Generate a special model.');
```

```php
Artisan::command('generate:model {name}', function () {
    $model = $this->argument('name');
    $template = File::get('app/templates/model.txt');

    $compiled = str_replace('{name}', $model, $template);

    File::put("app/{$model}.php", $compiled);
})->describe('Generate a special model.');
// Will create or overwritte existing file with the template file.
```

```php
//If more than one generator, use the automatic resolution.
Artisan::command('generate:model {name}', function (App\ModelGenerator $generator) {
    $model = $this->argument('name');
    $generator->build($this->argument('name'));
})->describe('Generate a special model.');
```

## 17

Laravel 5.3, introduced a static `fake` method to a number of facades.  This `fake` method can be called to replace the underlying class with a minimal fake version, for the purposes of testing.

files to work with:

- `/laravel53/vendor/laravel/framework/src/Illuminate/Support/Testing/Fakes/EventFake.php`
- `/laravel53/vendor/laravel/framework/src/Illuminate/Support/Facades/Event.php`
- `/laravel53/tests/ExampleTest.php`