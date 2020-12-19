
# 🚀PHP Serial Number Generator
[![Maintainability](https://api.codeclimate.com/v1/badges/3f4b5d10a870b2301715/maintainability)](https://codeclimate.com/github/irfaardy/php-sn-generator/maintainability) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/irfaardy/php-sn-generator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-sn-generator/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/irfaardy/php-sn-generator/badges/build.png?b=master)](https://scrutinizer-ci.com/g/irfaardy/php-sn-generator/build-status/master) [![Latest Stable Version](https://poser.pugx.org/irfa/php-sn-generator/v)](//packagist.org/packages/irfa/php-sn-generator)  [![GitHub license](https://img.shields.io/github/license/irfaardy/encrypt-file-laravel?style=flat-square)](https://github.com/irfaardy/encrypt-file-laravel/blob/master/LICENSE)  [![Support me](https://img.shields.io/badge/Support-Buy%20me%20a%20coffee-yellow.svg?style=flat-square)](https://www.buymeacoffee.com/OBaAofN)<br> 
[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/S6S52P7SN)

<p>Customable Serial Number Generator for PHP.<p>
<h3>🛠️ Installation with Composer </h3>



    composer require irfa/php-sn-generator

>You can get Composer [ here]( https://getcomposer.org/download/)

***


<h2>🛠️ Laravel Setup </h2>

<h3>Add to config/app.php</h3>

```php
'providers' => [
            ....
            Irfa\SerialNumber\SerialNumberGeneratorSeviceProvider::class,
     ];
```



<h3>Add to config/app.php</h3>

```php
'aliases' => [
         ....
  		'SN' => Irfa\SerialNumber\Facades\SerialNumber::class,

    ],
```

  <h2>Publish Vendor</h2>


```bash
php artisan vendor:publish --tag=php-serial-number
```

<h2>Config File</h2>

<h4>Config Laravel</h4>

```bash
config/irfa/serial_number.php
```

<h4>Config non-Laravel or PHP Native</h4>

```bash
vendor/irfa/php-sn-generator/config/config.php
```

```php
<?php 
	return [ 
	/*
    |--------------------------------------------------------------------------
    | Serial Config
    |--------------------------------------------------------------------------
    |
    | length    : length for one segment
    | segment   : segment amount for Serial number 
    | seperator : striped segment for serial (set null if you do not wish to use seperator)
    |
    */
		'length'	=> 4,

		'segment'	=> 4,
	
	    	'seperator'     => "-",
	
	    	'charset'       => "0123456789ABCDEFGHIJKLMNPQRSTUWXYZ",

];
```




<h2>Example Generate Serial Number (Laravel)</h2>


```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SN;

class SomethingController extends Controller
{
   
    public function generate_serial(Request $request)
    {
        return SN::generate(); //result : TP8K-XU63-9YN3-SMSF
    }
}
```

<h2>Example Generate Serial Number PHP Native</h2>


```php
<?php
require "vendor/autoload.php";
use Irfa\SerialNumber\Func\SerialNumber;

$sn = new SerialNumber();

echo $sn->generate();
   
```

<h2>Other Function</h2>
<h4>Programmatically Config</h4>

```php
//Laravel
SN::setConfig([	
		'length' => 5,
		'segment' => '4',
		'seperator' => '-',
		'charset' => "123456789ABCDEFGH"])
	->generate();
	
//PHP Native
$sn = new SerialNumber();

echo $sn->setConfig([	
                        'length' => 5,
                        'segment' => '4',
                        'seperator' => '-',
                        'charset' => "123456789ABCDEFGH"
                    ])
		->generate();
```

----

## How to Contributing?

1. Fork it (<https://github.com/irfaardy/php-sn-generator/fork>)
2. Commit your changes (`git commit -m 'New Feature'`)
3. Push to the branch (`git push origin your-branch)
4. Create a new Pull Request ` your-branch -> master`

if you found bug or error, please post here https://github.com/irfaardy/php-sn-generator/issues so that they can be maintained together.



***
## Bagaimana cara berkontribusi?

1. Lakukan fork di (<https://github.com/irfaardy/php-sn-generator/fork>)
2. Commit perubahan yang anda lakukan (`git commit -m 'Fitur Baru'`)
3. Push ke branch master (`git push origin branch-kamu)
4. Buat Pull Request baru `branch-kamu -> master`

---
## Issue
If you found issues or bug please create new issues here https://github.com/irfaardy/php-sn-generator/issues/new

Jika anda menemukan bug atau error silahkan posting disini https://github.com/irfaardy/php-sn-generator/issues agar dapat diperbaiki bersama-sama.

***
