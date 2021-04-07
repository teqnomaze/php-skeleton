# PHP Skeleton
A template for kick-starting the development of a standards-compliant PHP library with all the development tools.

### Requirements
Following are the required dependencies:

- [Composer](https://getcomposer.org)
- [Xdebug](https://xdebug.org)

### Quick Start
Create your project from this template repository by clicking on `Use this template` button or download this repository, change the name to your project.

### Summary
This publication describes a standard filesystem skeleton suitable for all PHP packages and MUST use these names for the root-level files and directories:

|  |  |
| ----------------------------------------------- | -------------------------- |
| command-line executables                        | `bin/`                     |
| configuration files                             | `config/`                  |
| documentation files                             | `docs/`                    |
| web server files                                | `public/`                  |
| other resource files                            | `resources/`               |
| PHP source code                                 | `src/`                     |
| test code                                       | `tests/`                   |
| a log of changes between releases               | `CHANGELOG(.*)`            |
| guidelines for contributors                     | `CONTRIBUTING(.*)`         |
| licensing information                           | `LICENSE(.*)`              |
| information about the package itself            | `README(.*)`               |

### Environment Setup
Clone or fork the repository in your local and run the following command.

```sh
$ git clone <your-repo-url>
$ cd <your-repo-name>
$ composer update
```

### Available CLI Commands
CLI commands tailored for this app development :

- `composer phpcs` : Run [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) analysis to ensures your code remains clean and consistent.
- `composer phpstan` : Run [PHPStan](https://github.com/phpstan/phpstan) analysis to ensures your code remains error and bug free.
- `composer phpunit` : Run [PHPUnit](https://github.com/sebastianbergmann/phpunit) testing to ensures your source codes are tested.
- `composer coverage` : Run [Code-Coverage](https://github.com/richardregeer/phpunit-coverage-check) using the clover report of phpunit.

### Changelog

#### 1.0.0

* Created initial version.
