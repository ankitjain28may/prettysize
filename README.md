# About prettysize

prettysize was created by, and is maintained by [Ankit Jain](https://github.com/ankitjain28may),and is a helper utility to provide pretty printed file sizes.

[![Build Status](https://travis-ci.org/ankitjain28may/prettysize.svg?branch=master)](https://travis-ci.org/ankitjain28may/prettysize)
[![Coverage Status](https://coveralls.io/repos/github/ankitjain28may/prettysize/badge.svg?branch=master)](https://coveralls.io/github/ankitjain28may/prettysize?branch=master)

## Installation & Usage]

> **Requires [PHP 7.1+](https://php.net/releases/)**

Require prettysize using [Composer](https://getcomposer.org):

```bash
composer require ankitjain28may/prettysize
```

```php
use Ankitjain28may\Prettysize\Pretty;

$size = Pretty::pretty(1024);
// $size = "1.0 kB"

```

## Contributing

Thank you for considering to contribute to prettysize.
You can also follow the twitter account for latest announcements or just come say hi!: [@ankitjain28may](https://twitter.com/ankitjain28may)

## License

prettysize is an open-sourced library licensed under the [MIT license](LICENSE.md).
