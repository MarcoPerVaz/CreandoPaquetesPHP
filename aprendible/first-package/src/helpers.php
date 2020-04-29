<?php

/* 
  | -----------------------------------------------------------------------------------------------------
  | *Función de práctica con parámetro opcional usada en package-tester\resources\views\welcome.blade.php
  | -----------------------------------------------------------------------------------------------------
*/
function hello($name = 'Marco')
{
  return "Hola desde mi primer paquete, {$name}";
}