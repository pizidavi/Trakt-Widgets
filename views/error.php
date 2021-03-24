<?php

// Error Image
function error($error, $width, $heigth) {
  global $lang;

?>
<svg id="error" width="<?php echo $width; ?>" height="<?php echo $heigth; ?>" viewBox="0 0 <?php echo $width; ?> <?php echo $heigth; ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <style>
    <?php require 'fonts/Exo-2.php'; ?>
    text,
    tspan {
      font-family: 'Exo 2', sans-serif;
    }
    tspan {
      fill: #bfbfbf;
      font-size: 80%;
    }
    </style>
  </defs>

  <!-- Sfondo -->
  <rect id="sfondo" x="0" y="0" width="100%" height="100%" fill="#ffffff" />

  <text x="50%" y="50%" fill="#262626" font-size="22" dominant-baseline="middle" text-anchor="middle"><?php echo _T($error, $lang); ?></text>

</svg>
<?php

  die();
}

?>
