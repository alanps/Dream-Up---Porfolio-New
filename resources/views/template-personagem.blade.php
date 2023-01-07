{{--
  Template Name: Personagem
--}}

<?php 


/*

  =====================================================================
    Script desenvolvido por Alan Pardini Sant'Ana - www.alanps.com.br
  =====================================================================

*/



$artes4 = "/wp-content/themes/dreamup/resources/views";
$imgs = "/wp-content/themes/dreamup/resources/images/personagem/";

?>

<center>
  <iframe src="<?php echo $artes4; ?>/musica.php" height="20px" width="100%" style="border:none;"></iframe>
</center>

<table id="Table_01" width="1025" height="1401" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="9">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_01.jpg')" width="1024" height="266" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="266" alt=""></td>
  </tr>
  <tr>
    <td colspan="5" rowspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_02.jpg')" width="728" height="171" alt=""></td>
    <td colspan="3">
      <a href="http://www.agenciadreamup.com.br" target="_blank">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_03.jpg')" width="253" height="89" border="0" alt=""></a>
    </td>
    <td rowspan="8">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_04.jpg')" width="43" height="491" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="89" alt=""></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_05.jpg')" width="253" height="127" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="82" alt=""></td>
  </tr>
  <tr>
    <td rowspan="6">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_06.jpg')" width="9" height="320" alt=""></td>
    <td colspan="2" rowspan="2" background="@asset('/images/personagem/PERSONAGEM---O-Site_07.jpg')" id="padding" class="line-height-auto">
    
    <span id="titulo">
    Sobre
    </span>
    <br>
    <span id="texto">
    PERSONAGEM é um mundo de imagens, uma aventura por histórias e viagens, músicas e poemas, comédia e drama.
    </span>
    <br>
    <span id="titulo">
    O Site
    </span>
    <br>
    <span id="texto">
    A porta de entrada para esse novo mundo, um portal de outra dimensão. Coisas incríveis podem acontecer aqui... 
    </span>
    
    </td>
    <td colspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_08.jpg')" width="240" height="45" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="45" alt=""></td>
  </tr>
  <tr>
    <td rowspan="3">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_09.jpg')" width="1" height="106" alt=""></td>
    <td colspan="3" rowspan="2" background="@asset('/images/personagem/PERSONAGEM---O-Site_10.jpg')" class="line-height-auto">
    
    
<?php 

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


/*
///////////////////////////////////////////////
////////////Contador de acessos////////////////
///////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes_estatisticas`");

$ip = $_SERVER["REMOTE_ADDR"];

while ($row = mysqli_fetch_array($query)) 
{
$contador=$row['contador'];
}


if(isset($_COOKIE['Personagem666']))
{
setcookie("Personagem666", $ip, time()+3600);
}
else
{
$query = mysqli_query($bd, "UPDATE `artes_estatisticas` SET `contador` = '$contador' + 1");
setcookie("Personagem666", $ip, time()+3600);
}
*/

///////////////////////////////////////////////
///////////////////////////////////////////////
///////////////////////////////////////////////

$id=((isset($_GET['id'])) ? $_GET['id'] :"");
if ($id == "")
{
$id = 99;
}

$resultado = 0;

///////////////////////////////
/////////// Albuns ////////////
//////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `album`");
$topicos99 = mysqli_num_rows($query);
$topicos99 = $topicos99 - 2;

////////////////////////////////////////////
///////////  Recortes de Filmes ////////////
////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes101` GROUP BY `grupo`");
$topicos101 = mysqli_num_rows($query);

/////////////////////////////////////////////////
/////////// PERSONAGEM 2 ////////////
/////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes100`");
$topicos100 = mysqli_num_rows($query);

/////////////////////////////////////////////////
/////////// PERSONAGEM Animações S/A ////////////
/////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes4` GROUP BY `grupo`");
$topicos4 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
/////////// PERSONAGEM - Resgatando Almas ////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes102`");
$topicos3 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
/////////// PERSONAGEM - Somos agente ////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes103`");
$topicos103 = mysqli_num_rows($query);

///////////////////////////////////////////////
/////////// PERSONAGEM - Van Gogh /////////////
///////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes104`");
$topicos104 = mysqli_num_rows($query);

///////////////////////////////////////////////////////////
/////////// PERSONAGEM - Ainda Somos os Mesmos ////////////
///////////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes105`");
$topicos105 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
/////////// PERSONAGEM - Os Saltimbancos /////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes106`");
$topicos106 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
/////////// PERSONAGEM - Os Intocaveis ///////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes107`");
$topicos107 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
/////////// PERSONAGEM - Meu Novo Mundo //////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes108`");
$topicos108 = mysqli_num_rows($query);

//////////////////////////////////////////////////////
////////////// PERSONAGEM - O Artista ////////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes109`");
$topicos109 = mysqli_num_rows($query);

////////////////////////////////////////////////////////////////
////////////// PERSONAGEM - O Vendedor de Almas ////////////////
////////////////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes111`");
$topicos111 = mysqli_num_rows($query);


//////////////////////////////////////////////////////
/////////// Sobrevivente ao Contato Alien ////////////
//////////////////////////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes2`");
$topicos2 = mysqli_num_rows($query);

///////////////////////////////////
/////////// PERSONAGEM ////////////
///////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `artes`");
$topicos = mysqli_num_rows($query);


///////////////////////////////////

$query = mysqli_query($bd, "SELECT * FROM `album` WHERE id LIKE $id");
while ($row = mysqli_fetch_array($query))
{

?>


    <span id="historia">
    <?php
    
    if ($id == "1")
    {
    echo "História";
    }
    
    if ($id == "100")
    {
    echo "História";
    }
    
    if ($id == "112")
    {
    echo "Seção";
    }
    
    if ($id == "2")
    {
    echo "Seção";
    }
    
    if ($id == "3")
    {
    echo "Seção";
    }
      
    if ($id == "4")
    {
    echo "Seção";
    }
    
    if ($id == "99")
    {
    echo "Seção";
    }   
    
    if ($id == "102")
    {
    echo "História";
    }
    
    if ($id == "103")
    {
    echo "História";
    }
    
    if ($id == "104")
    {
    echo "História";
    }
    
    if ($id == "105")
    {
    echo "História";
    }
    
    if ($id == "106")
    {
    echo "História";
    }
    
    if ($id == "107")
    {
    echo "História";
    }
    
    if ($id == "108")
    {
    echo "História";
    }
    
    if ($id == "109")
    {
    echo "História";
    }
    
    if ($id == "111")
    {
    echo "História";
    }
    
    ?>
    </span>
    <br>
    <?php   
    if ($id == "1")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "100")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "112")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "102")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "103")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "104")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "105")
    {
    echo "<span id=\"pedacos2\">";
    }
    
    if ($id == "106")
    {
    echo "<span id=\"pedacos\">";
    }
        
    if ($id == "107")
    {
    echo "<span id=\"pedacos\">";
    }
        
    if ($id == "108")
    {
    echo "<span id=\"pedacos\">";
    }
        
    if ($id == "109")
    {
    echo "<span id=\"pedacos\">";
    }
        
    if ($id == "111")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "2")
    {
    echo "<span id=\"pedacos2\">";
    }
    
    if ($id == "3")
    {
    echo "<span id=\"pedacos\">";
    }
    
    if ($id == "4")
    {
    echo "<span id=\"pedacos2\">";
    }
  
    if ($id == "99")
    {
    echo "<span id=\"pedacos\">";
    }
    ?>
    <?php echo $row['nome'];  ?>
    </span>

    <?php
        
    if ($id == "104")
    {
    echo "<span id=\"titulo2a\">";
    }
    else if ($id == "109")
    {
    echo "<span id=\"titulo2a\">";
    }
    else if ($id == "111")
    {
    echo "<span id=\"titulo2b\">";
    }
    else
    {
    echo "<span id=\"titulo2\">";
    }
    
    ?>
    
    <a href="?id=99" class="vermelho">Ver outras histórias.</a>
    </span>
    
    
    </td>
    <td rowspan="5">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_11.jpg')" width="47" height="275" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="80" alt=""></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_12.jpg')" width="479" height="26" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="18" alt=""></td>
  </tr>
  <tr>
    <td colspan="3">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_13.jpg')" width="445" height="8" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="8" alt=""></td>
  </tr>
  <tr>
    <td rowspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_14.jpg')" width="88" height="169" alt=""></td>
    <td colspan="4" background="@asset('/images/personagem/PERSONAGEM---O-Site_15.jpg')">


    <span id="total">
    <?php
    if ($id == "1")
    {
    echo "Total de $topicos tópicos nessa história.";
    }
    
    if ($id == "112")
    {
    echo "Total de $topicos101 tópicos nessa seção.";
    }
    
    if ($id == "100")
    {
    echo "Total de $topicos100 tópicos nessa história.";
    }
    
    if ($id == "103")
    {
    echo "Total de $topicos103 tópicos nessa história.";
    }
    
    if ($id == "104")
    {
    echo "Total de $topicos104 tópicos nessa história.";
    }
    
    if ($id == "105")
    {
    echo "Total de $topicos105 tópicos nessa história.";
    }
    
    if ($id == "106")
    {
    echo "Total de $topicos106 tópicos nessa história.";
    }
    
    if ($id == "107")
    {
    echo "Total de $topicos107 tópicos nessa história.";
    }
    
    if ($id == "108")
    {
    echo "Total de $topicos108 tópicos nessa história.";
    }
    
    if ($id == "109")
    {
    echo "Total de $topicos109 tópicos nessa história.";
    }
    
    if ($id == "111")
    {
    echo "Total de $topicos111 tópicos nessa história.";
    }
    
    if ($id == "102")
    {
    echo "Total de $topicos3 tópicos nessa história.";
    }
    
    if ($id == "2")
    {
    echo "Total de $topicos2 tópicos nessa seção.";
    }
    
    if ($id == "3")
    {
    echo "Total de $topicos3 tópicos nessa seçãoa.";
    }
    
    if ($id == "4")
    {
    echo "Total de $topicos4 tópicos nessa seção.";
    }
    
    if ($id == "99")
    {
    echo "Total de $topicos99 tópicos";
    }
    ?>
    
    </span>
    
    <center>
    
    <?php
    if ($id == "1")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "100")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "112")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "102")
    {
    echo "<span id=\"titulo3\">";
    }

    if ($id == "103")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "104")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "105")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "106")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "107")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "108")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "109")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "111")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "2")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "3")
    {
    echo "<span id=\"titulo3\">";
    }
    
    if ($id == "4")
    {
    echo "<span id=\"titulo33\">";
    }
    
    if ($id == "99")
    {
    echo "<span id=\"titulo3\">";
    }
    ?>
    
    <?php echo $row['descricao']; } ?>
    </span>
    </center>

    </td>
    <td rowspan="2">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_16.jpg')" width="5" height="169" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="149" alt=""></td>
  </tr>
  <tr>
    <td colspan="4">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_17.jpg')" width="832" height="20" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="20" alt=""></td>
  </tr>
  <tr class="content">
    <td colspan="9" background="@asset('/images/personagem/PERSONAGEM---O-Site_18.jpg')"> 
  
  

<?php

//////////////////////////////////////
/////////// MENU DE CENAS ////////////
//////////////////////////////////////

if ($id == 99)
{
$query = mysqli_query($bd, "SELECT * FROM `album` WHERE `id` NOT LIKE '99' AND `id` NOT LIKE '98' ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{
$resultado = $resultado + 1;
/////////////////////////////////
///////////TEMPLATE 2////////////
/////////////////////////////////
if ($row['id'] == 1)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 100)
{
$inicial = "PERSONAGEM";
$cor = "amarelo";
}
elseif ($row['id'] == 102)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 103)
{
$inicial = "PERSONAGEM - ";
$cor = "amarelo";
}
elseif ($row['id'] == 104)
{
$inicial = "PERSONAGEM - ";
$cor = "amarelo";
}
elseif ($row['id'] == 105)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 106)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 107)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 108)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
elseif ($row['id'] == 109)
{
$inicial = "PERSONAGEM - ";
$cor = "amarelo";
}
elseif ($row['id'] == 111)
{
$inicial = "PERSONAGEM em ";
$cor = "amarelo";
}
else
{
$inicial = "";
$cor = "vermelho";
}



$row['id'] = (isset($row['id']) ? $row['id'] : "");
$row['grupo'] = (isset($row['grupo']) ? $row['grupo'] : "");
$row['nome'] = (isset($row['nome']) ? $row['nome'] : "");

echo "
<br><br><br>
    <center>
    <span id=\"titulo3\">
    <a href=\"?id=".$row['id']."\" class=\"fancybox-button\" rel=\"fancybox-".$row['grupo']."\" id=\"".$cor."\">".$inicial.$row['nome']."</a>
    </span>
    </center><br><br><br>";
    
/////////////////////////////////
/////////////////////////////////
if ($resultado < $topicos99)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
?>


<?php

///////////////////////////////////////////
/////////// Recortes de Filmes ////////////
///////////////////////////////////////////

if ($id == 112)
{

$query = mysqli_query($bd, "SELECT * FROM `artes101` GROUP BY `grupo` ORDER BY `id` DESC");
while ($row = mysqli_fetch_array($query))
{

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
<div id=\"btextocamiseta".$row['id']."\">";

echo nl2br($row['texto']);


echo "</div></div>
<div id=\"bmaissobre\">
".$row['data']."
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
    
?>

<script>
jQuery( document ).ready(function() {

jQuery("#btextocamiseta<?php echo $row['id']; ?>").slimScroll({
    position: 'right',
  color: '#ff0000',
    height: '250px',
  width: '310px',
    railVisible: true,
  alwaysVisible: false,
  railColor: '#fff',
      });

});
</script>

<?php

/////////////////////////////////
/////////////////////////////////
if ($resultado < $topicos101)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

$query1 = mysqli_query($bd, "SELECT * FROM `artes101` WHERE `grupo` LIKE '".$row['grupo']."' ORDER BY `id` ASC LIMIT 18446744073709551610 OFFSET 1");
while ($row = mysqli_fetch_array($query1))
{
echo "<a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button2\" rel=\"fancybox-".$row['grupo']."\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos2\"></a>";
}

}

}
else
{
echo "";
}

/////////////////////////////////////
/////////// PERSONAGEM 2 ////////////
/////////////////////////////////////

if ($id == 100)
{

$query = mysqli_query($bd, "SELECT * FROM `artes100` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

?>

<script>
jQuery( document ).ready(function() {

jQuery('#btextocamiseta<?php echo $row['id']; ?>').slimScroll({
    position: 'right',
  color: '#ff0000',
    height: '250px',
  width: '310px',
    railVisible: true,
  alwaysVisible: false,
  railColor: '#fff',
      });

});
</script>

<?php
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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-".$row['grupo']."\" caption=\"".$row['texto']."\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
    </div>
    </center>
    <br>
    <div id=\"btextocamiseta2\">
<div id=\"btextocamiseta".$row['id']."\">";

echo nl2br($row['texto']);


echo "</div></div>
<div id=\"bmaissobre\">
".$row['data']."
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
if ($resultado < $topicos100)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>


<?php

/////////////////////////////////////////////////
/////////// PERSONAGEM Animações S/A ////////////
/////////////////////////////////////////////////

if ($id == 4)
{

$query = mysqli_query($bd, "SELECT * FROM `artes4` GROUP BY `grupo`");
$totalres = mysqli_num_rows($query);

?>

<script>
jQuery(document).ready(function() {
jQuery.post( "<?php echo $artes4; ?>/artes4.php", { pagina: 1 }, function( data ) {
  jQuery( ".artes4" ).html( data );
});
});

</script>

<script>
jQuery(document).ready(function() {
var i = 0;
var b = 1;
var inicio = 1;
var limite = 25;

jQuery("body").scroll(function() {
  var total = b;
  if( jQuery("body").scrollTop() + 140 >= jQuery(document).height() - screen.height )
  {
    inicio = inicio + 25;
    limite = limite + 25;
    i++;
    b++;
    if( i <= <?php echo $totalres; ?> )
    {
    jQuery.post( "<?php echo $artes4; ?>/artes4.php", { pagina: b, total: total }, function( data ) {
      jQuery( ".artes4" ).append( data );
    });
    }
    else 
    {
      jQuery('.load').html('');
    }
  }

});
});
</script>


<script>
jQuery(document).ready(function() {
var i = 0;
var b = 1;
var inicio = 1;
var limite = 25;
var total;

jQuery(".load").click(function() {
    total = b;
    inicio = inicio + 25;
    limite = limite + 25;
    i++;
    b++;
    if( i <= <?php echo $totalres; ?> )
    {
    jQuery.post( "<?php echo $artes4; ?>/artes4.php", { pagina: b, total: total }, function( data ) {
      jQuery( ".artes4" ).append( data );
    });
    }
    else 
    {
      jQuery('.load').html('');
    }

});
});
</script>

<?php
echo "<div class=\"artes4\"></div><center><div class=\"load\">Clique aqui para carregar mais...</div></center>";
}
else
{
echo "";
}
?>

    
    
<?php

////////////////////////////////////////////////////////
/////////// PERSONAGEM - Resgatando Almas  ////////////
///////////////////////////////////////////////////////

if ($id == 102)
{
$query = mysqli_query($bd, "SELECT * FROM `artes102` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

//////////////////////////////////////////////////////////
/////////// PERSONAGEM - O Vendedor de Almas ////////////
/////////////////////////////////////////////////////////

if ($id == 111)
{
$query = mysqli_query($bd, "SELECT * FROM `artes111` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

////////////////////////////////////////////////
/////////// PERSONAGEM - O Artista  ////////////
////////////////////////////////////////////////

if ($id == 109)
{
$query = mysqli_query($bd, "SELECT * FROM `artes109` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

////////////////////////////////////////////////////
/////////// PERSONAGEM - Meu Novo Mundo ////////////
////////////////////////////////////////////////////

if ($id == 108)
{
$query = mysqli_query($bd, "SELECT * FROM `artes108` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

////////////////////////////////////////////////////////
//////////// PERSONAGEM - Os Intocáveis  //////////////
///////////////////////////////////////////////////////

if ($id == 107)
{
$query = mysqli_query($bd, "SELECT * FROM `artes107` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

////////////////////////////////////////////////////////
/////////// PERSONAGEM - Os Saltimbancos  /////////////
///////////////////////////////////////////////////////

if ($id == 106)
{
$query = mysqli_query($bd, "SELECT * FROM `artes106` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

////////////////////////////////////////////////////////
/////////// PERSONAGEM - Ainda Somos os Mesmos  ////////////
///////////////////////////////////////////////////////

if ($id == 105)
{
$query = mysqli_query($bd, "SELECT * FROM `artes105` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php

///////////////////////////////////////////////
/////////// PERSONAGEM - Van Gogh  ////////////
///////////////////////////////////////////////

if ($id == 104)
{
$query = mysqli_query($bd, "SELECT * FROM `artes104` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>


<?php

////////////////////////////////////////////////////////
/////////// PERSONAGEM - Somos Agente  ////////////
///////////////////////////////////////////////////////

if ($id == 103)
{
$query = mysqli_query($bd, "SELECT * FROM `artes103` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos3)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>

<?php
//////////////////////////////////////////////////////
/////////// Sobrevivente ao Contato Alien ////////////
//////////////////////////////////////////////////////

if ($id == 2)
{
$query = mysqli_query($bd, "SELECT * FROM `artes2` ORDER BY `id` DESC");
while ($row = mysqli_fetch_array($query))
{

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
    <a class=\"fancybox-button\" rel=\"fancybox-button\" href=\"".$imgs.$row['imagem']."\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
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
if ($resultado < $topicos2)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>



<?php

///////////////////////////////////
/////////// PERSONAGEM ////////////
///////////////////////////////////

if ($id == 1)
{
$query = mysqli_query($bd, "SELECT * FROM `artes` ORDER BY `id` ASC");
while ($row = mysqli_fetch_array($query))
{

?>

<script>
jQuery( document ).ready(function() {

jQuery('#btextocamiseta<?php echo $row['id']; ?>').slimScroll({
    position: 'right',
  color: '#ff0000',
    height: '250px',
  width: '310px',
    railVisible: true,
  alwaysVisible: false,
  railColor: '#fff',
      });

});
</script>

<?php
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
    <a href=\"".$imgs.$row['imagem']."\" class=\"fancybox-button\" rel=\"fancybox-button\"><img border=\"0\" src=\"".$imgs.$row['imagem']."\" class=\"bfotos\"></a>
    </div>
    </center>
    <br>
    <div id=\"btextocamiseta2\">
<div id=\"btextocamiseta".$row['id']."\">";

echo nl2br($row['texto']);


echo "</div></div>
<div id=\"bmaissobre\">
".$row['data']."
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
if ($resultado < $topicos)
{
echo "<br>

    <img src=\"".$imgs."/barra.png\">
    <br>
    <br>";

}

}

}
else
{
echo "";
}
?>
  
  

    </td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="546" alt=""></td>
  </tr>
  <tr>
    <td colspan="9">
      <img src="@asset('/images/personagem/PERSONAGEM---O-Site_19.jpg')" width="1024" height="97" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="97" alt=""></td>
  </tr>
  <tr>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="9" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="88" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="391" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="1" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="239" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="201" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="5" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="47" height="1" alt=""></td>
    <td>
      <img src="@asset('/images/personagem/spacer.gif')" width="43" height="1" alt=""></td>
    <td></td>
  </tr>
</table>
</center>


</body>
</html>

