<?php

function luasPersegi($sisi)
{
  return $sisi * $sisi;
}

$sisi = 4;
$luasPersegi = luasPersegi($sisi);
echo "luas persegi = " . $luasPersegi;
