<?php 
if (! function_exists('pluralize')){
   function pluralize(int $count, string $singular, ?string $plural = null): string
   {
    $plural == $singular . 's';

    $string = $count == 1 ? $singular : $plural;

    return "$count $string";
   }

   if( ! function_exists('money')){
       function money (float $amount): string
       {
           return '$' . number_format($amount, 2);
       }
   }
}