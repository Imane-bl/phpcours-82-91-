<?php

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/

echo get_include_path() . "<br>";//C:\xampp\php\PEAR

 echo file_get_contents("ossama.txt",true);//when i creat a ficher in 
 //the path C:\xampp\php\PEAR will apear writh that i wrotr hello
 //true--> research in include path

 echo file_get_contents("elzero.txt",true,NULL,4);//o elzero web school
 echo file_get_contents("elzero.txt",true,NULL,4,5);//o elz
// echo file_get_contents("https://elzero.net");

// print_r(file("https://elzero.net"));

echo file_put_contents("elzero.txt", "\r\nThis Is New Line", FILE_APPEND);

//o elzero web school This Is New Lin   byte 18