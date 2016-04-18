
# Bookdown Bootstrap + HighlightJS Template

For use with [bookdown](http://bookdown.io/).


## Installation
Installation of this library uses Composer. For Composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

Put the following into your `composer.json` or run `composer require bdudelsack/bookdown-template`.

    {
        "require-dev": {
            "bdudelsack/bookdown-template": "^0.1.0"
        }
    }

Put the following into your `bookdown.json`

```
{
    ...
    "template": "../vendor/bdudelsack/bookdown-template/template/main.php"
}
```