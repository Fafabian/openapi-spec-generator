# OpenAPI v3 Spec Generator

Designed to work with [Laravel JSON:API](https://laraveljsonapi.io/)

!!! Disclaimer: this project is work in progress and likely contains many bugs, etc !!!

## TODO

- [x] Command to generate to storage folder
- [ ] Config to set which server(s) to generate, with extra info?
- [ ] Add in tags & x-tagGroups (via config)
- [ ] Consider `->readonly()` etc in routes
- [ ] Remove links in payload data when saving resources
- [ ] Tidy up the code!!
- [ ] Add tests

🙏 Based upon initial prototype by [martianatwork](https://github.com/martianatwork)

## Usage

```
composer install neondigital/openapi-spec-generator
```

```
php artisan jsonapi:openapi:generate
```

## Generating Documentation

A quick way to preview your documentation is to use [Speccy](https://speccy.io/).
Ensure you have installed Speccy globally and then you can use the following command.

```
speccy serve storage/app/openapi.yaml
```


