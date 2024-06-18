############## File System Functions
  - disk_total_space()
  --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
  - disk_free_space() || diskfreespace()
  --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
  - file_exists(Path)
  --- Checks If A File Or Directory Exists
  - filesize(File_Name)
  --- Get Space In Bytes

########## File System Functions
  - is_dir(Name)
  --- Tells If The Filename Is A Directory
  - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
  --- Permissions Is Ignored On Windows
  --- Permissions Is Octal Number Start With 0
  ------ Second Number Is => Owner Permission
  ------ Third Number Is => User Group Permission
  ------ Fourth Number Is => Others Permissions
  - rmdir(Name[Required], Context[Optional])
