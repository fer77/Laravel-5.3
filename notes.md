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