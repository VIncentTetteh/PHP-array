<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <form class="" action="index.php" method="post">
    Theophilous <input type="checkbox" name="family[]" value="Theophilous"><br>
    Janet <input type="checkbox" name="family[]" value="Janet"><br>
    kwesi <input type="checkbox" name="family[]" value="kwesi"><br>
    <input type="submit">
    </form> -->
    <form class="" action="index.php" method="post">
      <input type="text" name="students" placeholder="search students grade">
      <input type="submit">
    </form>
    <?php
        // $familys = $_POST['family'];
        // foreach ($familys as $people) {
        //   // code...
        //   echo "$people <br>";
        // }
        $grades = array("vincent"=>"A+", "Edem"=>"A+", "Kofi"=>"c");
        echo $grades[$_POST["students"]];
     ?>
  </body>
</html>
