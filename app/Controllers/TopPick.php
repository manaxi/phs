<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TopPick extends Controller
{
  protected $acf = true;
  public function data()
  {
    $product_title = get_field('product_title');

  }
}