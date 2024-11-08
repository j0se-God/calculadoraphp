<html>
<head>
<link rel="stylesheet" type="text/css" href="tilo.css">
</head><br>
<br>
<br>
<br>
<br>
<br>
<br>
<body class="b1"><center><table>
    <td>
    <?php 
    if ($_REQUEST['radio1'] == "suma") { 
      $suma = $_REQUEST['valor1'] + $_REQUEST['valor2']; 
      echo "El Resultado es:" . $suma; 
    } elseif ($_REQUEST['radio1'] == "resta") { 
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2']; 
        echo "El Resultado es:" . $resta; 
      }
      elseif($_REQUEST['radio1'] == "multi") { 
        $multi = $_REQUEST['valor1'] * $_REQUEST['valor2']; 
        echo "El Resultado es:" . $multi; 
      }
      elseif($_REQUEST['radio1'] == "div") { 
        $div = $_REQUEST['valor1'] / $_REQUEST['valor2']; 
        echo "El Resultado es:" . $div; 
      }
    ?>
    <br> <br> 
    <a href="index.html">Inicio</a></center></td>
</table>
</body>
</html>