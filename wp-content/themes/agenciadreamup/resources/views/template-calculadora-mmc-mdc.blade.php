{{--
  Template Name: Calculadora MMC MDC
--}}

<body id="calculadora-mmc-mdc">

<center>

<div id="topopreto"></div>

<div id="topo">
    <img src="@asset('/images/logo_calc_mmc_mdc.png')" id="logo" alt="Logo">

    <div class="blocos">
        <div id="mmcexplicacao">
        	<span id="mmc">
        	MÍNIMO MÚLTIPLO COMUM (MMC)
        	</span>
        	<span id="mmc2">
        	O mínimo múltiplo comum (MMC) de dois inteiros a e b é o menor inteiro positivo que é múltiplo simultaneamente de a e de b. Se não existir tal inteiro positivo, por exemplo, se a = 0 ou b = 0, então mmc(a, b) é zero por definição.
        	</span>
        </div>

        <div id="mdcexplicacao">
        	<span id="mmc">
        	MÁXIMO DIVISOR COMUM (MDC)
        	</span>
        	<span id="mmc2">
        	O máximo divisor comum (MDC) entre dois ou mais números inteiros é o maior número inteiro que é fator de tais números.
        	</span>
        </div>
    </div>
</div>

<div id="topocinza"></div>
<div id="topocinza2"></div>
<div id="topocinza3"></div>

<div id="topo">
<span id="mmc3">
CÁLCULO DETALHADO DO MMC E DO MDC DE UM CONJUNTO DE NÚMEROS
</span>

<div class="blocos">
    <div id="calculadora2">

        <div id="calculadora">
           <span id="numero1">NÚMERO 1</span>
           <input class="numero1input" id="numero1a" type="number" maxlength="6">
           <span id="numero2">NÚMERO 2</span>
           <input class="numero2input" id="numero2a" type="number" maxlength="6" disabled>
           <span id="numero2">NÚMERO 3</span>
           <input class="numero2input" id="numero3a" type="number" maxlength="6" disabled>
           <span id="numero2">NÚMERO 4</span>
           <input class="numero2input" id="numero4a" type="number" maxlength="6" disabled>
           <span id="numero2">NÚMERO 5</span>
           <input class="numero2input" id="numero5a" type="number" maxlength="6" disabled>
           <input id="calcular" type="button" value="CALCULAR">
        </div>

        <a href="https://www.agenciadreamup.com.br" target="_blank">
            <img src="@asset('/images/logodreamuprodape.jpg')" id="logo2" alt="Logo Dream Up - Agência Digital">
        </a>

    </div>

    <div id="respostas">
        <div class="hr"></div>

        <div id="respostas1A">
            <span class="nr" id="fatorar1"></span>

            <div id="table1">
            </div>

            <div class="nr" id="fatorarA1"></div>
        </div>

        <div id="respostas2A">
            <span class="nr" id="fatorar2"></span>

            <div id="table2">
            </div>

            <div class="nr" id="fatorarA2"></div>
        </div>

        <div id="respostas3A">
            <span class="nr" id="fatorar3"></span>

            <div id="table3">
            </div>

            <div class="nr" id="fatorarA3"></div>
        </div>

        <div id="respostas4A">
            <span class="nr" id="fatorar4"></span>

            <div id="table4">
            </div>

            <div class="nr" id="fatorarA4"></div>
        </div>

        <div id="respostas5A">
            <span class="nr" id="fatorar5"></span>

            <div id="table5">
            </div>

            <div class="nr" id="fatorarA5"></div>
        </div>


        <div id="nrresultado">
            <span class="nr">Resultado:</span>

            <div class="resultado" id="resultadommc"><span class="nrgrande2">MMC(8, 12, 18) = 2</span><span class="nrpequeno2">3</span><span class="nrgrande2">. 3  </span><span class="nrpequeno2">2</span><span class="nrgrande2">= (2.2.2).(3.3) = 8 . 9 = </span><span class="nrgranderesultado">72</span></div>

            <div class="resultado" id="resultadomdc"><span class="nrgrande2">MDC(8, 12, 18) = </span><span class="nrgranderesultado">2</span></div>
            <div class="hr2"></div>
        </div>
    </div>
</div>

</div>

</center>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(window).keypress(function(event) {
	var tecla = (window.event) ? event.keyCode : event.which;
	if ((tecla > 47 && tecla < 58)) return true;
	else {
		if (tecla != 8) return false;
		else return true;
	}
});
	
</script>

<script>
    $("#numero1a").change(function() {
        if ($("#numero1a").val() > 1)
        {
            $("#numero2a").prop( "disabled", false );
        }
        else
        {
            $("#numero2a").val("");
            $("#numero2a").prop( "disabled", true );
        }
    });

    $("#numero2a").change(function() {
        if ($("#numero2a").val() > 1)
        {
            $("#numero3a").prop( "disabled", false );
        }
        else
        {
            $("#numero3a").val("");
            $("#numero3a").prop( "disabled", true );
        }
    });

    $("#numero3a").change(function() {
        if ($("#numero3a").val() > 1)
        {
            $("#numero4a").prop( "disabled", false );
        }
        else
        {
            $("#numero4a").val("");
            $("#numero4a").prop( "disabled", true );
        }
    });

    $("#numero4a").change(function() {
        if ($("#numero4a").val() > 1)
        {
            $("#numero5a").prop( "disabled", false );
        }
        else
        {
            $("#numero5a").val("");
            $("#numero5a").prop( "disabled", true );
        }
    });
</script>
<script>
    $("#calcular").click(function() {
        $('#respostas').hide();
        var input = parseInt($('#numero1a').val());
        var input2 = parseInt($('#numero2a').val());
        var input3 = parseInt($('#numero3a').val());
        var input4 = parseInt($('#numero4a').val());
        var input5 = parseInt($('#numero5a').val());

        if (isNaN(input) || input == "" || input <= 1)
        {
            alert("Digite um valor numérico positivo no primeiro campo");
            return false;
        }
        else if (isNaN(input2) || input2 == "" || input2 <= 1)
        {
            alert("Digite um valor numérico positivo no segundo campo");
            return false;
        }
        else
        {
            var fatores = Calcular(input);
            gerarTabela(fatores, input, 1);
            var fatores2 = Calcular(input2);
            gerarTabela(fatores2, input2, 2);

            resultado(input, input2, input3, input4, input5);

            if (input3 != "" && input3 > 1)
            {
                var fatores3 = Calcular(input3);
                gerarTabela(fatores3, input3, 3);
                $('#respostas3A').show();
            }
            else
            {
                $('#respostas3A').hide();
            }
            if (input4 != "" && input4 > 1)
            {
                var fatores4 = Calcular(input4);
                gerarTabela(fatores4, input4, 4);
                $('#respostas4A').show();
            }
            else
            {
                $('#respostas4A').hide();
            }
            if (input5 != "" && input5 > 1)
            {
                var fatores5 = Calcular(input5);
                gerarTabela(fatores5, input5, 5);
                $('#respostas5A').show();
            }
            else
            {
                $('#respostas5A').hide();
            }

            $('#respostas').fadeIn();
        }
    });


    function gerarTabela(ftrs, inp, nr) {
        var tabela = $('<table id="table' + nr + '" class="tableborda"></table>');
        var tabela2 = $('<table id="table' + nr + 'A"></table>');


        for (var i = 0; i < ftrs.length; i++) {
            var f = ftrs[i];
            var linha = '<tr><td><span class="nr2">' + f[0] + '</span></td></tr>';
            var linha2 = '<tr><td><span class="nr2' + nr + '">' + f[1] + '</span></td></tr>';
            tabela.append(linha);
            tabela2.append(linha2);
        }


        $('#table' + nr).html(tabela);
        $('#table' + nr).append(tabela2);
        $('#fatorar' + nr).html("Fatorando o número " + inp + " temos:");


        var dicionarioDeValores = [];

        $(".nr2" + nr).each(function(index, elem){
            var a = $(elem).text();

            if (!dicionarioDeValores[a]) {
                dicionarioDeValores[a] = 1;
            } else {
                dicionarioDeValores[a]++;
            }


        });
        var mark2 = [];
        for (var i = 1; i <= inp; i++) {
            if (dicionarioDeValores[i] >= 1) {
                mark2.push([i, dicionarioDeValores[i]]);
            }
        }

        var mark = mark2.toString();
        var mark = mark.split(',');


        $('#fatorarA' + nr).html('<span class="nrgrande">Então: ' + inp + ' = </span>');
        for (var i = 0; i < mark.length; i++) {

            if (mark[i] > dicionarioDeValores.length - 2)
            {
                $('#fatorarA' + nr).append('<span class="nrgrande">' + mark[i] + '</span>');
                i++
                if (mark[i] > 1)
                {
                    $('#fatorarA' + nr).append('<span class="nrpequeno3">' + mark[i] + '</span>');
                }
            }
            else
            {
                $('#fatorarA' + nr).append('<span class="nrgrande">' + mark[i] + '</span><span class="nrgrande">.</span>');
                i++
                if (mark[i] > 1)
                {
                    $('#fatorarA' + nr).append('<span class="nrpequeno">' + mark[i] + '</span>');
                }
            }

        }

        $('#fatorarA' + nr).append('<div class="hr3"></div>');	

    }


    function Calcular(nr) {
        var partes = [];
        while (nr > 1) {
            for (var i = 2; i <= nr; i++) {
                if (nr % i) continue;
                partes.push([nr, i]);
                nr = nr / i;
                break;
            }
        }
        partes.push([1, '']);
        return partes;
    }


    function primo(numero) {
        var status = true;
        for (possivelDivisor = 2; possivelDivisor <= Math.floor(numero / 2); possivelDivisor++) {
            if (numero % possivelDivisor == 0) {  // possível divisor >> divisor
                status = false;
                break;
            }
        }
        return status;
    }



function resultado(inp1, inp2, inp3, inp4, inp5) {

    var m = inp1;
    var n = inp2;
    var p = inp3;
    var q = inp4;
    var r = inp5;
    var mmc = 1;

    if (isNaN(inp3) || inp3 == "")
    {
        var divisor = 2;
        mdc = 1;
        while (divisor <= m && divisor <= n) {
            if (m % divisor == 0 && n % divisor == 0 && primo(divisor)) {
                mdc *= divisor;
                m /= divisor;
                n /= divisor;
                divisor = 2;
            }
            else {
                divisor++;
            }
        }

        var o = [inp1, inp2];

        for(var i, j, n, d, r = 1; (n = o.pop()) != undefined;)
            while(n > 1){
                if(n % 2){
                    for (i = 3, j = Math.floor(Math.sqrt(n)); i <= j && n % i; i += 2);
                        d = i <= j ? i : n;
                }
                else
                    d = 2;
                for(n /= d, r *= d, i = o.length; i; !(o[--i] % d) && (o[i] /= d) == 1 && o.splice(i, 1));
            }


        $('#resultadommc').html('<span class="nrgrande2">MMC(' + inp1 + ', ' + inp2 + ') = </span>');

        $('#resultadomdc').html('<span class="nrgrande2">MDC(' + inp1 + ', ' + inp2 + ') = </span><span class="nrgranderesultado">' + mdc + '</span>');

        $('#resultadommc').append('<span class="nrgranderesultado">' + r + '</span>');


    }

    else if (!isNaN(inp3) && inp3 != "" && isNaN(inp4))
    {
        var divisor = 2;
        mdc = 1;
        while (divisor <= m && divisor <= n && divisor <= p) {
            if (m % divisor == 0 && n % divisor == 0 && p % divisor == 0 && primo(divisor)) {
                mdc *= divisor;
                m /= divisor;
                n /= divisor;
                p /= divisor;
                divisor = 2;
            }
            else {
                divisor++;
            }
        }

        $('#resultadomdc').html('<span class="nrgrande2">MDC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ') = </span><span class="nrgranderesultado">' + mdc + '</span>');

        var o = [inp1, inp2, inp3];

        for(var i, j, n, d, r = 1; (n = o.pop()) != undefined;)
            while(n > 1){
                if(n % 2){
                    for (i = 3, j = Math.floor(Math.sqrt(n)); i <= j && n % i; i += 2);
                        d = i <= j ? i : n;
                }
                else
                    d = 2;
                for(n /= d, r *= d, i = o.length; i; !(o[--i] % d) && (o[i] /= d) == 1 && o.splice(i, 1));
            }

        $('#resultadommc').html('<span class="nrgrande2">MMC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ') = </span><span class="nrgranderesultado">' + r + '</span>');

    }
    else if (!isNaN(inp4) && inp4 != "" && isNaN(inp5))
    {
        var divisor = 2;
        mdc = 1;
        while (divisor <= m && divisor <= n && divisor <= p && divisor <= q) {
            if (m % divisor == 0 && n % divisor == 0 && p % divisor == 0 && q % divisor == 0 && primo(divisor)) {
                mdc *= divisor;
                m /= divisor;
                n /= divisor;
                p /= divisor;
                q /= divisor;
                divisor = 2;
            }
            else {
                divisor++;
            }
        }

        $('#resultadomdc').html('<span class="nrgrande2">MDC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ', ' + inp4 + ') = </span><span class="nrgranderesultado">' + mdc + '</span>');

        var o = [inp1, inp2, inp3, inp4];

        for(var i, j, n, d, r = 1; (n = o.pop()) != undefined;)
            while(n > 1){
                if(n % 2){
                    for (i = 3, j = Math.floor(Math.sqrt(n)); i <= j && n % i; i += 2);
                        d = i <= j ? i : n;
                }
                else
                    d = 2;
                for(n /= d, r *= d, i = o.length; i; !(o[--i] % d) && (o[i] /= d) == 1 && o.splice(i, 1));
            }

        $('#resultadommc').html('<span class="nrgrande2">MMC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ', ' + inp4 + ') = </span><span class="nrgranderesultado">' + r + '</span>');


    }
    else if (!isNaN(inp5) && inp5 != "")
    {
        var divisor = 2;
        mdc = 1;
        while (divisor <= m && divisor <= n && divisor <= p && divisor <= q && divisor <= r) {
            if (m % divisor == 0 && n % divisor == 0 && p % divisor == 0 && q % divisor == 0 && r % divisor == 0 && primo(divisor)) {
                mdc *= divisor;
                m /= divisor;
                n /= divisor;
                p /= divisor;
                q /= divisor;
                r /= divisor;
                divisor = 2;
            }
            else {
                divisor++;
            }
        }


        $('#resultadomdc').html('<span class="nrgrande2">MDC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ', ' + inp4 + ', ' + inp5 + ') = </span><span class="nrgranderesultado">' + mdc + '</span>');

        var o = [inp1, inp2, inp3, inp4, inp5];

        for(var i, j, n, d, r = 1; (n = o.pop()) != undefined;)
            while(n > 1){
                if(n % 2){
                    for (i = 3, j = Math.floor(Math.sqrt(n)); i <= j && n % i; i += 2);
                        d = i <= j ? i : n;
                }
                else
                    d = 2;
                for(n /= d, r *= d, i = o.length; i; !(o[--i] % d) && (o[i] /= d) == 1 && o.splice(i, 1));
            }

        $('#resultadommc').html('<span class="nrgrande2">MMC(' + inp1 + ', ' + inp2 + ', ' + inp3 + ', ' + inp4 + ', ' + inp5 + ') = </span><span class="nrgranderesultado">' + r + '</span>');


    }




}


</script>
