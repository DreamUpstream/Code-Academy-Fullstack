<html>
<body>
<h1>Enter word to find if it has h, e or o:</h1>

<form action="" method="post">
  Word: <input name="example" type="text" />
  <input name="submit" type="submit" />
</form>
</body>
</html>
<?php
    echo 'Example 1: <br>';
    $hello = 'hello';
    echo "\"$hello[0]\", \"$hello[1]\", \"$hello[-1]\". <br> <br>";
    echo 'Example 2: <br> <br>';
    function letterWord($word, $letter) {
        if (strpos($word, $letter) !== false)
        {
            return "$word contains $letter <br>";
        }
        else {
            return "$word does not contain $letter <br>";
        }
    }
    if (isset($_POST['submit'])) {
        $word = $_POST['example'];
        echo "You entered $word. <br> <br>";
        echo letterWord($word, 'h').letterWord($word, 'e').letterWord($word, 'o');
      }
?>
    