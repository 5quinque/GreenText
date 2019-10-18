# Greentext Extension

This is a Twig extension for Symfony Framework to make greentext green.

# Installation for Symfony

```bash
composer require linnit/greentext
```

or update your composer.json

```json
"require": {
    "linnit/greentext": "1.*"
}
```

## Register an Extension as a Service

Add the extension to Symfony

```yaml
# app/config/services.yml
    linnit.twig.greentext:
        class: Linnit\Twig\Extension\GreenTextExtension
        tags: ['twig.extension']
```


# Usage

Standard greentext
```twig
{{ message|greentext }}
```

Specify your own colour
```twig
{{ message|greentext("#772953") }}
```

# Testing

To test, just run phpunit

```bash
./vendor/phpunit/phpunit/phpunit
```