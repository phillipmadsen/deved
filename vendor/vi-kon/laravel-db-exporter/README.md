# Database exporter to Laravel 5

This is database table structure and data exporter to migration and seed files for **Laravel 5**

## Table of content

* [Features](#features)
* [Installation](#installation)
* [Usage](#usage)
* [License](#license)

## Features

* create **migration** files from database table structure
* handle foreign keys (watch for recursive foreign keys)
* create **model** files from database table structure
* create **seed** files from database table content

## Installation

To `composer.json` file add following lines:

```json
// to "require" object
"vi-kon/db-exporter": "~1.*"
```

Or run following command in project root:

```bash
composer require vi-kon/db-exporter
```

In Laravel 5 project add following lines to `app.php`:

```php
// to providers array
'ViKon\DbExporter\DbExporterServiceProvider',
```

## Usages

### Creating migration files

The `db-exporter:migrate` commend is used for creating migration files from database. It has several options:

* **prefix** - database name prefix in migration files
* **ignore** - array of ignored database table names
* **database** - specify database connection name. If option is not set the default connection is used
* **overwrite** - force overwriting existing migration files

The example assumes following database tables:

* **users**
* **groups**
* **pages** with foreign key to user id

Exports all tables from default database:

```bash
php artisan db-exporter:migrate
```

The above command will generate following files to `database/migrations` directory:

```bash
YYYY-MM-DD_000000_create_users_table.php
YYYY-MM-DD_000001_create_groups_table.php
YYYY-MM-DD_000002_create_pages_table.php
```

## License

This package is licensed under the MIT License

---
[Back to top][top]

[top]: #database-exporter-to-laravel-5