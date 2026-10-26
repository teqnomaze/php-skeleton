# PHP Skeleton
A template for kick-starting the development of a standards-compliant PHP library/package.

[![Code Analysis](../../actions/workflows/analysis.yml/badge.svg)](../../actions/workflows/analysis.yml)

## Requirements

- PHP 8.2 or higher
- Composer 2.x

### Quick Start
Create your project from this template repository by clicking on `Use this template` button or download this repository and change the name to your project's name.

### Summary
This publication use these names for the root-level files and directories:

| Description                                     | Directory / File         |
| ----------------------------------------------- | ------------------------ |
| Command-line executables                        | /bin/                    |
| Configuration files                             | /config/                 |
| Documentation files                             | /docs/                   |
| Public HTML, JS and CSS files                   | /public/                 |
| Other resource / library files                  | /lib/                    |
| PHP source code                                 | /src/                    |
| Test code                                       | /tests/                  |
| A log of changes between releases               | CHANGELOG(.*)            |
| Guidelines for contributors                     | CONTRIBUTING(.*)         |
| Licensing information                           | LICENSE(.*)              |
| Information about the package itself            | README(.*)               |

### Environment Setup
Clone or fork the repository in your local and run the following command.

```sh
$ git clone <your-repo-url>
$ cd <your-repo-name>
$ composer install
```

### Available CLI Commands
CLI commands tailored for this app development :

| Command               | Description                                        |
| --------------------- | -------------------------------------------------- |
| phpcs                 | Check code quality for PHP files based on [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) |
| phpcbf                | Style fix all the PHP files based on [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) |
| phpstan               | Check PHP codebase for any obvious or tricky bugs and errors with [PHPStan](https://github.com/phpstan/phpstan) |
| phpunit               | Run unit testing against all the PHP codebase with [PHPUnit](https://github.com/sebastianbergmann/phpunit) |
| coverage              | Run code coverage test to ensuring [PHPUnit](https://github.com/sebastianbergmann/phpunit) test coverd all lines |

## Changelog

All notable changes to this project are documented in [CHANGELOG.md](CHANGELOG.md).

## License

This project is licensed under the MIT License. See [LICENSE.md](LICENSE.md) for more information.
