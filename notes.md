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
