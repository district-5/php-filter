# PHP Filter
A filter interface to facilitate a structure for the [District5 Filters](https://github.com/district-5/php-filters) and any 3rd party filters.

## Installation
Install using composer:
```bash
composer require district5/filter
```

## Usage
All filters that implement the filter interface in this library must implement a `filter` function that returns the filtered value,
for example a filter to make a string lowercase could look like:
```php
class MyStringToLowerFilter implements \District5\Filter\I
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
