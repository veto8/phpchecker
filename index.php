<html>
<body>

<?php
$fs = @fsockopen("127.0.0.1", 3306, $error_number, $error, 35);
if (!$fs):
  echo "mariadb: failed";
else:
  echo "mariadb: ok";
  fclose($fs);
endif;
?>

</body>
</html>
