# laravel OPD

[![Join the chat at https://gitter.im/laravel-opd](https://badges.gitter.im/laravel-opd.svg)](https://gitter.im/laravel-opd?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-grup-kesenian/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-grup-kesenian/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-grup-kesenian/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-grup-kesenian/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/v/stable)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)
[![Total Downloads](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/downloads)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/v/unstable)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)
[![License](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/license)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/d/monthly)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)
[![Daily Downloads](https://poser.pugx.org/bantenprov/rasio-grup-kesenian/d/daily)](https://packagist.org/packages/bantenprov/rasio-grup-kesenian)

Repository untuk membuat atau melakukan proses data Organisasi Perangkat Daerah

# DEMO
Demo for this package is available here [OPD](http://opd-01.dev.bantenprov.go.id/laravel-opd).  
## Install Laravel :
```bash
$ composer create-project --prefer-dist laravel/laravel project-name "5.4.*"
```

## Install package :

```bash

$ composer require bantenprov/laravel-opd "1.0.1"

```

## Edit config/app.php
#### providers

```php
'providers' => [
    ...
    App\Providers\AppServiceProvider::class,
    App\Providers\AuthServiceProvider::class,
    App\Providers\EventServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    ...
    
    Bantenprov\LaravelOpd\LaravelOpdServiceProvider::class,
    Emadadly\LaravelUuid\LaravelUuidServiceProvider::class,
```

### aliases
```php
'aliases' => [
    ...
    'Storage' => Illuminate\Support\Facades\Storage::class,
    'URL' => Illuminate\Support\Facades\URL::class,
    'Validator' => Illuminate\Support\Facades\Validator::class,
    'View' => Illuminate\Support\Facades\View::class,
    ...
    'Opd' => Bantenprov\LaravelOpd\Facades\LaravelOpd::class,
```

## Artisan command :

```bash
$ php artisan vendor:publish --tag=migrations
$ php artisan vendor:publish --tag=views
$ php artisan vendor:publish --provider="Emadadly\LaravelUuid\LaravelUuidServiceProvider"
```

### Edit config/uuid.php
Change `'default_uuid_column' => 'uuid'` to `'default_uuid_column' => 'id'`
```php
'default_uuid_column' => 'id',
```

### Edit "vendor/kalnoy/nestedset/src/NestedSet.php"
Change `$table->unsignedInteger(self::PARENT_ID)->nullable();` to `$table->string(self::PARENT_ID)->nullable();`
```php
public static function columns(Blueprint $table)
{
    $table->unsignedInteger(self::LFT)->default(0);
    $table->unsignedInteger(self::RGT)->default(0);
    $table->string(self::PARENT_ID)->nullable();

    $table->index(static::getDefaultColumns());
}
```

## Run artisan command :

```bash
$ php artisan migrate
```

## Check route list
run artisan command -> `$ php artisan route:list`

## Add to routes/web.php
```php
//web.php
Route::get('/opd/tree', function () {
    return Opd::tree();
})->name('opd.tree');

Route::get('/opd', function () {
    $opds =  Opd::index();
    return view('laravel-opd::unit_kerja.index',compact('opds'));
})->name('opd.index');

Route::get('/opd/create-root',function(){
    return view('laravel-opd::unit_kerja.create-root');
})->name('opd.create_root');

Route::get('/opd/create-child',function(){
    $unit_kerjas =  Opd::index();
  
    return view('laravel-opd::unit_kerja.create-child',compact('unit_kerjas'));
})->name('opd.create_child');
```
## Contoh pengunaan :

### 1.
Output :
```plain
- 000100000000000 - Sekretariat Daerah
-- 000101000000000 - Asisten Pemerintahan dan Kesejahteraan Rakyat
--- 000101010000000 - Biro Pemerintahan
- 001500000000000 - Dinas Komunikasi, Informatika, Statistik dan Persandian
```

```php
// web.php
Route::get('/opd', function () {
    return Opd::tree();
});
```

### 2. 
```php
// web.php
Route::get('/opd/create-root','\Bantenprov\LaravelOpd\Http\Controllers\LaravelOpdController@createRoot')->name('createRoot');
```
### 3. 
```php
//web.php
Route::get('/opd', function () {
    return view('laravel-opd::unit_kerja.create-root');
});
```

### 4. 
```php
1. http://127.0.0.1:8000/laravel-opd/
2. http://127.0.0.1:8000/laravel-opd/create-root
3. http://127.0.0.1:8000/laravel-opd/create-child
```

## [TODO](https://github.com/bantenprov/laravel-opd/blob/1.0/TODO.md) : 

> Untuk keterangan lebih lanjut silahkan lihat di [halaman wiki](https://github.com/bantenprov/laravel-opd/blob/1.0/TODO.md). 
> Untuk berdiskusi silahkan sampaikan saran, pertanyaan, atau keperluan teknis lainnya silahkan [disini](https://github.com/bantenprov/laravel-opd/wiki).
