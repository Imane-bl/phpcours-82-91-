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
  - 
    86####################### File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
      87####File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
