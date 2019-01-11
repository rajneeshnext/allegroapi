# MyPackage
First craete new folder for laravel root directory folder name "packages" after 

## Installation

Via Composer

``` bash
$ git clone git@github.com:rajneeshnext/allegroapi.git
```
move all file in allegroapi folder to package root directory
then delete folder allegroapi

## Usage

## package service provider add this line form config/app.php file in your laravel root directory.
``` bash
Smallbs\Allegro\AllegroServiceProvider::class, 
```

## composer.json file add this code
``` bash
   "autoload": {
       "psr-4": {
            "Smallbs\\Allegro\\": "packages/Smallbs/Allegro/src/"
       },
	},
	"autoload-dev": {
       "psr-4": {
            "Smallbs\\Allegro\\": "packages/Smallbs/Allegro/src/"
       }
   }
```
## use update composer
``` bash
 composer update
```
