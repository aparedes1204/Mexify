<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css/estiloa.css">
    <style>
    /* nabigatzeko menuaren estiloa */
      .menua {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }

      /* menuko esteken estiloa */
      .menua a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }

      /* Menuaren tituluaren estiloa */
      .menua h2.izena {
        background-color: #008CBA;
        color: white;
        padding: 33px;
      }

      /* Sagua gainean duten link-en estiloa */
      .menua a:hover:not(.active) {
        background-color: #555;
        color: white;
      }
      /* Barneko atalek menuarentzat behar duten tartea */
      div.edukia {
        margin-left: 200px;

        height: 1000px;
      }
      .titulua {
        background-color: #008CBA;
      }


}
    </style>
</head>
<body>
  <?php
    echo '<div class="menua">';
    echo '<h2 class="izena">Menua</h2>';
    echo '<a href="#1atala">1. atala</a>';
    echo '<a href="#2atala">2. atala</a>';
    echo '<a href="#3atala">3. atala</a>';
    echo '</div>';
  ?>
</body>
</html>
