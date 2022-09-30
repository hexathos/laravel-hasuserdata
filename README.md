# Laravel-HasUserData

## About
This package automaticly adds username to models that have the 
Hexathos\Traits\HasUserData trait while creating or updating a Model. 
 
It requires string-able fields "created_by" and "updated_by" in your database.

## How to install
Require the package:

`$ composer require hexathos/laravel-hasuserdata`

Create a migration that adds created_by and updated_by fields to your models table

Include the Namespace in your Model and add the trait  

```
namespace App\Models;

use Hexathos\Traits\HasUserData;

/* .snipped. */

use HasUserData;
```

That's it.