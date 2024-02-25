# District5 Filter Library

## About
This library provides the skeletons to support filters.

## Installation
This library requires no other libraries.

```
composer require district5/filter
```

## Usage
### Filter
All filters that implement the filter interface in this library must implement a `filter()` function that returns the filtered value,
for example a filter to make a string lowercase might look as follows:

```php

use \District5\Filter\FilterInterface;

class MyStringToLowerFilter implements FilterInterface
{
    public function filter($value)
    {
        if (extension_loaded('mbstring')) {
            return mb_strtolower($value);
        }

        return strtolower($value);
    }
}
```

## Issues
Log a bug report!