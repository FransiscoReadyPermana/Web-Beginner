<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="data">
    <h1>
      Welcome  <?php echo $_GET["Nama"]; ?> ^_^
    </h1>
    <h1>
      Your addres: <?php echo $_GET["Alamat"]; ?>
    </h1>
    <h1>
      Your birthdate: <?php echo $_GET["TanggalLahir"];?>
    </h1>
    <h1>
      <?php
        //date in mm/dd/yyyy format; or it can be in other formats as well
        $birthDate = $_GET["TanggalLahir"];
        //explode the date to get month, day and year
        $birthDate = explode("-", $birthDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")
          ? ((date("Y") - $birthDate[0]) - 1)
          : (date("Y") - $birthDate[0]));
        echo "Age is:" . $age;
      ?>
    </h1>
  </div>
</body>
</html>
      
      