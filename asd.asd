{
    "name": "yajra/laravel-datatables-oracle",
    "description": "jQuery DataTables API for Laravel 4|5",
    "keywords" : ["laravel4","laravel5","laravel","datatables","datatable","datatables jquery plugin"],
    "license": "MIT",
    "authors": [
        {
            "name": "Arjay Angeles",
            "email": "aqangeles@gmail.com"
        }
    ],
    "require": {
        "php": ">=5.5.9",
        "illuminate/support": "5.0.*|5.1.*|5.2.*|5.3.*",
        "illuminate/database": "5.0.*|5.1.*|5.2.*|5.3.*",
        "illuminate/view": "5.0.*|5.1.*|5.2.*|5.3.*",
        "illuminate/http": "5.0.*|5.1.*|5.2.*|5.3.*",
        "illuminate/filesystem": "5.0.*|5.1.*|5.2.*|5.3.*",
        "league/fractal": "~0.14",
        "laravelcollective/html": "5.0.*|5.1.*|5.2.*|5.3.*",
        "maatwebsite/excel": "^2.0"
    },
    "require-dev": {
        "mockery/mockery": "~0.9",
        "phpunit/phpunit": "~4.0"
    },
    "suggest": {
        "barryvdh/laravel-snappy": "Allows exporting of dataTable to PDF using the print view."
    },
    "autoload": {
        "psr-4": {
            "Yajra\\Datatables\\": "src/"
        }
    },
    "extra": {
      "branch-alias": {
        "dev-master": "6.0-dev"
      }
    },
    "minimum-stability": "stable"
}
