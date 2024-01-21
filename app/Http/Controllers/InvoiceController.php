<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
  function invoice()
  {
      $pdf = Pdf::loadView('welcome');
      return $pdf->download('invoice.pdf');
  }
}
