<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Theme2</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="form">
    <h2>足し算の結果</h2>
    <?php if (is_numeric($_GET['number1']) && is_numeric($_GET['number2'])): ?>
      <?php $totalNum = $_GET['number1'] + $_GET['number2'] ?>
      <p><?php echo $totalNum ?></p>
    <?php else: ?>
      <p>半角数字で入力してください</p>  
    <?php endif ?>
  </div>
</body>
</html>