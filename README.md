# Processmaker PM3 Container
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/pm3-container.git
cd pm3-container
php rename-project.php pm3-container
composer install
npm install
npm run dev
```

## Installation
* Use `composer require processmaker/pm3-container` to install the package.
* Use `php artisan pm3-container:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan pm3-container:uninstall` to uninstall the package
* Use `composer remove processmaker/pm3-container` to remove the package completely
