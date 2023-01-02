<?php


/*

  =====================================================================
    Script desenvolvido por Alan Pardini Sant'Ana - www.alanps.com.br
  =====================================================================

*/



$artes4 = "/wp-content/themes/dreamup/resources/views";
$imgs = "/wp-content/themes/dreamup/resources/images/personagem";

///////////////////////////////////////////
// Conectando no servidor MySQL.
// Criando e selecionando DB
///////////////////////////////////////////
$mysqlserver = "localhost:3306";
$mysqluser = "perso";
$mysqlpass = "Personagem@2022";
$mysqldbname= "personagem";

$bd = mysqli_connect($mysqlserver, $mysqluser, $mysqlpass, $mysqldbname);

if(mysqli_connect_error()) { // < evite IF sem chaves
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    mysqli_query($bd, "SET NAMES 'utf8'");
    mysqli_query($bd, 'SET character_set_connection=utf8');
    mysqli_query($bd, 'SET character_set_client=utf8');
    mysqli_query($bd, 'SET character_set_results=utf8');
}

$bd->set_charset("utf8");



$total = ((isset($_POST['total'])) ? $_POST['total'] : 0);
$resultado = 0;

$query = mysqli_query($bd,"SELECT * FROM `artes4` GROUP BY `grupo`") or die(mysql_error());

	$porpag = 1;
	$totalres = mysqli_num_rows($query);
	$paginas = (($totalres % $porpag) > 0) ? (int)($totalres / $porpag) + 1 : ($totalres / $porpag);

	if (isset($_POST['pagina'])) {
	$pagina = (int)$_POST['pagina'];
	} else {
	$pagina = 1;
	}
	$pagina = max(min($paginas, $pagina), 1);
	$inicio = ($pagina - 1) * $porpag;

$query = mysqli_query($bd,"SELECT * FROM `artes4` GROUP BY `grupo` ORDER BY `id` DESC LIMIT $inicio, $porpag") or die(mysql_error());
while ($row = mysqli_fetch_array($query))
{

$grup = $row['grupo'];
/////////////////////////////////
///////////TEMPLATE 1////////////
/////////////////////////////////
if ($row['layout'] == "peq")
{
$resultado = $resultado + 1;
echo "<div id=\"bfotosbase\">	
		<center>
		<div id=\"bbasefotos2\">
		<div id=\"bbasefotos\">
		<a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button2\" rel=\"fancybox-".$row['grupo']."\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
		</div>
		</center>
		<br>
		<div id=\"btextocamiseta2\">
<div id=\"btextocamiseta\">";

echo nl2br($row['texto']);


echo "</div></div>
<div id=\"bmaissobre\">
".$row['data']."
</div>


<div id=\"bcomprarcamiseta\">
Enviado em:
</div>

</div>
</div>";
}

/////////////////////////////////
///////////TEMPLATE 2////////////
/////////////////////////////////
if ($row['layout'] == "texto")
{
echo "
<br><br><br>
		<center>
		<span id=\"titulo3\">
		".$row['texto']."
		</span>
		</center><br><br><br>";
}
		
/////////////////////////////////
/////////////////////////////////
if ($total < $totalres)
{
echo "<br>

		<img src=\"".$imgs."/barra.png\" id=\"bar\">
		<br>
		<br>";
}

$query = mysqli_query($bd,"SELECT * FROM `artes4` WHERE `grupo` LIKE '$grup' ORDER BY `imagem` ASC") or die(mysql_error());
while ($row = mysqli_fetch_array($query))
{
echo "<a href=\"".$imgs.$row['imagem'].\" class=\"fancybox-button2\" rel=\"fancybox-".$row['grupo']."\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos2\"></a>";
}

}
?>