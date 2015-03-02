<?php

include "autoload.php";

echo '<p>normal class</p>';
echo new NormalClass();

echo '<p>singleton class, output method get</p>';
echo Settings::getInstance()->get();

echo '<p>singleton class, output method import</p>';
echo Settings::getInstance()->import();

echo '<p>try instance singleton class</p>';

/**
 * in singleton we can one object in all points our code
 * try create some instance singleton
 */
$foo = new Settings();
