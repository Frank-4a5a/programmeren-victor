<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2</title>
  </head>
  <body>
    <?php
    $hobbies = [
        'Hacking',
        'Drinking',
        'Streaking',
        'Doing nothing',
        'Sleeping',
        'LARPing',
        'Stalking',
    ];

    foreach ($hobbies as $value):?>
      <p><?php echo $value; ?></p>
    <?php endforeach; ?>
  </body>
</html>
