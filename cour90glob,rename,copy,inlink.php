

<?php

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

echo "<pre>";
print_r(glob("Old/*.*"));//all the files with all
echo "</pre>";

// Rename => Same Place


//rename("Old/fichier1.pub", "Old/Testing.txt");

// Rename => Other Place => "Cut" || "Move"

//cration move file with changing name  testing_2
//rename("Old/Testing.txt", "New/Testing_2.txt");

// Move To Other Place same of cut will didnt appear i old
// rename("Old/Elzero.pptx", "New/Elzero.pptx");

// Copy Without Rename
// copy("Old/Info.docx", "New/info.docx");

// Copy With Rename
// copy("Old/Work.txt", "New/working.txt");
//we copy work and change his name with working 

//unlink("Old/Work.rtf"); delete
