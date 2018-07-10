 1 <!DOCTYPE html>
 2 <html lang="en">
 3 <head>
 4     <meta charset="UTF-8">
 5     <title>Document</title>
 6 </head>
 7 <body>
 8     <?php
 9         $name = $_POST["username"];
10         $pwd = $_POST["pwd"];
11         $fp = fopen("./data.txt", "a");
12         $str = "user:".$name."&password:".$pwd."\r\n";
13         fwrite($fp,$str);
14         fclose($fp);
15         echo "<h1>欢迎回来,".$name."！</h1>";
16     ?>
17 </body>
18 </html>