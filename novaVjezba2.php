<html>
    <head>
        <title>Dokument</title>
        <style>
    table {
      border-collapse: collapse;
      border: 1px solid;
      text-align: center;
      margin: auto;
      
    }
    td, th{
      margin: auto;
      text-align: center;
      border: 1px solid;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
    }
    </style>

    </head>
    <body>

    <?php

if(isset($_GET["submit"])){
    $ime=$_GET["ime"];
    $prezime=$_GET["prezime"];
}
if(isset($_GET["smjer"])){
    $smjer=$_GET["smjer"];
}
?>


<table>
<tr>
    <td>
    <?php echo $ime. " " . $prezime. " je uspješno prijavljen da polaže: "; 
    if(isset($_GET["klk"])){
        $klk=$_GET["klk"];
        foreach( $klk as $izabrano){
            echo $izabrano." ";
        }
    }
    
    
    ?>

    </td>
    <td>
        <?php echo $ime. " je student na smjeru: " . $smjer; ?>

    </td>
</tr>



</table>
    </body>

</html>