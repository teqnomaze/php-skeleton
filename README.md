# PHP Skeleton
A template for kick-starting the development of a standards-compliant PHP library.

### Quick Start
Create your project from this template repository by clicking on `Use this template` button or download this repository and change the name to your project's name.

### Summary
This publication use these names for the root-level files and directories:

| Description                                     | Directory / File           |
| ----------------------------------------------- | -------------------------- |
| Command-line executables                        | `/bin/`                    |
| Configuration files                             | `/config/`                 |
| Documentation files                             | `/docs/`                   |
| Public HTML, JS and CSS files                   | `/public/`                 |
| Other resource / library files                  | `/lib/`                    |
| PHP source code                                 | `/src/`                    |
| Test code                                       | `/tests/`                  |
| A log of changes between releases               | `CHANGELOG(.*)`            |
| Guidelines for contributors                     | `CONTRIBUTING(.*)`         |
| Licensing information                           | `LICENSE(.*)`              |
| Information about the package itself            | `README(.*)`               |

### Environment Setup
Clone or fork the repository in your local and run the following command.

```sh
$ git clone <your-repo-url>
$ cd <your-repo-name>
$ composer update
```

### Available CLI Commands
CLI commands tailored for this app development :

- `composer phpcs` : Run [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) analysis to ensure all source codes remains clean and consistent.
- `composer phpstan` : Run [PHPStan](https://github.com/phpstan/phpstan) analysis to ensure all source codes remains error and bug free.
- `composer phpunit` : Run [PHPUnit](https://github.com/sebastianbergmann/phpunit) testing to ensure all source codes were tested before production.
- `composer coverage` : Run [Code-Coverage](https://github.com/richardregeer/phpunit-coverage-check) to ensure unit-testing coverd all lines.

### Changelog

#### 1.0.0

* Created initial version.
