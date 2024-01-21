# DOMPDF Wrapper for Laravel

---

## Installation

Require this package in your composer.json and update composer. This will download the package and the dompdf + fontlib
libraries also.

```bash
composer require barryvdh/laravel-dompdf
```

---

## Use

You can create a new DOMPDF instance and load a HTML string, file or view name. You can save it to a file, or stream (
show in browser) or download.

```php
  php artisan make:controller DemoController
```

---

```php
   use Barryvdh\DomPDF\Facade\Pdf;

    $pdf = Pdf::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
```

---

## If there are external css or image file in blade

### in blade file, to link a css in head, use `{{public_path()}}` instead of `"{{public()}}"`

```php
<head>
    <link rel="stylesheet" href="{{public_path('css/new.css')}}">
</head>
```
---
