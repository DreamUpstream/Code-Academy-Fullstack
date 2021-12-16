<html>
<body>
<h1>Enter the amount of days:</h1>

<form action="" method="post">
  Days: <input name="example" type="text" />
  <input name="submit" type="submit" />
</form>
</body>
</html>
<?php
function seconds2human($d) {
    $s = $d*60*60*24;
    
    return "$d days have $s seconds in it.";
    }

    if (isset($_POST['submit'])) {
        $example = $_POST['example'];
        echo seconds2human((integer)$example);
      }
?>