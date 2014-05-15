<?php

namespace Converter;

class Converter
{
  public function convert($number)
  {
    $roman = array(
      1 => 'I',
      2 => 'II',
      4 => 'IV',
      5 => 'V'
    );

    return isset($roman[$number]) ? $roman[$number] : '';
  }
} 