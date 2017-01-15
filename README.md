# SendinBlue API PHP

A wrapper for sendinblue api (Beta)

## Current features
* Campaigns

## Installation

Add moloquent package to your `compoer.json`:

```json
"require": {
  "kamva/sendinblue-api-php": "dev-master"
}
```

And then do a `composer update`. 

Or run the following command on your console:

```
composer require kamva/sendinblue-api-php
```

## Usage

### Campaigns

For adding a user to campaign list, do the following.

```php
$data = [
    'email'      => 'john.doe@mail.com',
    'attributes' => [
        'name' => 'John Doe',
        'age' => 34
    ],
    'listid'     => [21]
];

$client = new Kamva\SendinBlue\Client();
$client->campaigns()->users()->createOrUpdate($data);
```

[فروشگاه ساز](http://kamva.ir)
