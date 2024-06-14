<?php

  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>";//cour85basename,dirname.php
  echo basename(__FILE__, ".php") . "<br>";//cour85basename,dirname

  echo dirname(__FILE__,  3) . "<br>";//C:\xampp\htdocs\PHPCOURS

  echo realpath(__FILE__) . "<br>";//ABSOLUTE PATH C:\xampp\htdocs\PHPCOURS\LesCoursPHP\cours(82-91)\cour85basename,dirname.php

  echo "<pre>";
  print_r(pathinfo(__FILE__));
  echo "</pre>";
  /*Array
(
    [dirname] => C:\xampp\htdocs\PHPCOURS\LesCoursPHP\cours(82-91)
    [basename] => cour85basename,dirname.php
    [extension] => php
    [filename] => cour85basename,dirname
) */

  echo pathinfo(__FILE__)["extension"] . "<br>";
  //    LES 2 la meme chose 
  echo pathinfo(__FILE__)["dirname"] . "<br>";
  echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";