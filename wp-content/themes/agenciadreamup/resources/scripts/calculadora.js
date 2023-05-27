(function($) {

//////////////////////////////////////////////
//CALCULADORA
$(document).ready(function(){
	var el = $(".page-calc");

	limpaConsole();
	console.log("###########################################");
	console.log("Calculadora Iniciada");
	console.log("###########################################");
	console.log("");

	tooltip();


	//apertar 1 na calculadora
	$(document).on("click", ".calculadoraOne",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("1");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("1");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "1");
		el.find(".calculadoraInput").focus();
	});

	//apertar 2 na calculadora
	$(document).on("click", ".calculadoraTwo",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("2");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("2");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "2");
		el.find(".calculadoraInput").focus();
	});

	//apertar 3 na calculadora
	$(document).on("click", ".calculadoraThree",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("3");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("3");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "3");
		el.find(".calculadoraInput").focus();
	});

	//apertar 4 na calculadora
	$(document).on("click", ".calculadoraFour",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("4");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("4");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "4");
		el.find(".calculadoraInput").focus();
	});

	//apertar 5 na calculadora
	$(document).on("click", ".calculadoraFive",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("5");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("5");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "5");
		el.find(".calculadoraInput").focus();
	});

	//apertar 6 na calculadora
	$(document).on("click", ".calculadoraSix",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("6");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("6");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "6");
		el.find(".calculadoraInput").focus();
	});

	//apertar 7 na calculadora
	$(document).on("click", ".calculadoraSeven",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("7");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("7");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "7");
		el.find(".calculadoraInput").focus();
	});

	//apertar 8 na calculadora
	$(document).on("click", ".calculadoraEight",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("8");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("8");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }
		el.find(".calculadoraInput").val(value + "8");
		el.find(".calculadoraInput").focus();
	});

	//apertar 9 na calculadora
	$(document).on("click", ".calculadoraNine",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar") && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (value.length == 1 && value == 0) {
			el.find(".calculadoraInput").val("9");
			e.preventDefault();
	        return false;
	    }
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("9");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }

		el.find(".calculadoraInput").val(value + "9");
		el.find(".calculadoraInput").focus();
	});

	//apertar 0 na calculadora
	$(document).on("click", ".calculadoraZero",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length >= 10 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	        var count = value.split(",");
	        if (count[1] == "0" && count[0] == "0") {
	        	e.preventDefault();
	        	return false;
	        } else if (count[1].length >= 2 && !el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
	        }
		}
	    if (el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val("");
			el.find(".calculadoraInput").val("0");
			el.find(".calculadoraInput").focus();
			el.find(".calculadoraInput").removeClass("zerar");
			e.preventDefault();
	        return false;
	    }
	    if (value.length == 1 && value == "0") {
			el.find(".calculadoraInput").val("0");
			el.find(".calculadoraInput").focus();
	    } else {
			el.find(".calculadoraInput").val(value + "0");
			el.find(".calculadoraInput").focus();
		}
	});

	//apertar , (virgula) na calculadora
	$(document).on("click", ".calculadoraComma",function(e){
		var value = el.find(".calculadoraInput").val();
		if (value.length <= 0) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.length >= 8 && !el.find(".calculadoraInput").hasClass("zerar")) {
	    	e.preventDefault();
	    	return false;
		}
		if (value.indexOf(",") !=-1) {
	    	e.preventDefault();
	    	return false;
		}
		el.find(".calculadoraInput").val(value + ",");
		el.find(".calculadoraInput").focus();
	});

	//apertar C (limpar) na calculadora
	$(document).on("click", ".calculadoraC",function(e){
		el.find(".calculadoraResultadosContainerSpan").html("");
		el.find(".calculadoraInput").removeClass("zerar");
		el.find(".calculadoraInput").val("0");
		el.find(".calculadoraInput").focus();
		window.calculadoraInput = 0;
		window.valueTotal = 0;
		window.operators = "";
		decre = 0;
	});

	//apertar Backspace (voltar) na calculadora
	$(document).on("click", ".calculadoraBackspace",function(e){
		if (!el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").val(el.find(".calculadoraInput").val().substring(0,el.find(".calculadoraInput").val().length - 1));
			el.find(".calculadoraInput").focus();
		}
	});

	//apertar C (limpar) na calculadora
	$(document).on("click", ".calculadoraNumeros, .calculadoraCanto", function(e){
		window.calculadoraInput = el.find(".calculadoraInput").val().replace(/,/g, '.');
		window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
	});

	//keyup para salvar variavel do q é digitado na calculadora
	$(document).on("keyup", ".calculadoraInput", function(e){
		window.calculadoraInput = el.find(".calculadoraInput").val().replace(/,/g, '.');
		if (e.keyCode == "187" || e.keyCode == "13"){
			el.find(".calculadoraEqual").trigger('click');
		} else if (e.keyCode == "107"){
			el.find(".calculadoraMore").trigger('click');
			window.operators = "+";
		} else if (e.keyCode == "109"){
			el.find(".calculadoraMinus").trigger('click');
			window.operators = "-";
		} else if (e.keyCode == "106"){
			el.find(".calculadoraMultiply").trigger('click');
			window.operators = "*";
		} else if (e.keyCode == "111"){
			el.find(".calculadoraDivide").trigger('click');
			window.operators = "/";
		} else if (e.keyCode == "27"){
			el.find(".calculadoraC").trigger('click');
		}
	});

	//variaveis de inicialização da calculadora
	window.calculadoraInput = 0;
	window.valueTotal = 0;
	window.operators = "";
	var decre = 0;

	//função comum entre os sinais da calculadora
	function calc(e, signal) {
		var value = el.find(".calculadoraInput").val();
		var count = el.find(".calculadoraInput").val().split(",");
		var container = el.find(".calculadoraResultadosContainerSpan").html();
		var semFim = el.find(".calculadoraResultadosContainerSpan").html().length;

		if (el.find(".calculadoraResultadosContainerSpan").html().slice(-2) == "+ " || el.find(".calculadoraResultadosContainerSpan").html().slice(-2) == "- " || el.find(".calculadoraResultadosContainerSpan").html().slice(-2) == "* " || el.find(".calculadoraResultadosContainerSpan").html().slice(-2) == "/ ") {
			el.find(".calculadoraResultadosContainerSpan").html(el.find(".calculadoraResultadosContainerSpan").html().slice(0, semFim-2) + signal + " ");
		}
		if (value == 0 || value == "0,0" ||  value == "0," || value == "0,00" || el.find(".calculadoraInput").hasClass("zerar")) { //se estiver tudo zero cancela click
			e.preventDefault();
	        return false;
		}
		if (count["1"] && count["1"].length == 1) {//adicionar 1 zero no final se faltar um numero apos a virgula
			value = value + "0";
		}
		if (!count["1"] && value.indexOf(",") !=-1) {//adicionar 2 zeros no final se faltar dois numero apos a virgula
			value = value.substring(0, value.length-1);
		}
		if (semFim == 0) {
			if (decre == 0) {
				el.find(".calculadoraResultadosContainerSpan").html("<span class='dec"+decre+"'>" + value +"</span> "+ window.operators +" ");
			} else {
				el.find(".calculadoraResultadosContainerSpan").html("<span class='dec"+decre+" tooltip' data-title=''>" + value +"</span> "+ window.operators +" ");
			}
			el.find(".calculadoraInput").val(value);
			el.find(".calculadoraInput").addClass("zerar");
		} else {
			container = container.replace(/,/g, '.');

			el.find(".calculadoraResultadosContainerSpan").html(container + "<span class='dec"+decre+" tooltip' data-title='Total: "+input+"'>" + value +"</span>");
			el.find(".calculadoraInput").val(eval(Number(window.valueTotal) + window.operators + Number(window.calculadoraInput)));
			var input = el.find(".calculadoraInput").val();
			if (input.indexOf(".") !=-1) {
				input = Number(input).toFixed(2);
				input = input.replace(/\./g, ',');
			}

			container = container.replace(/\./g, ',');
			el.find(".calculadoraInput").val(input);
			if (decre == 0) {
				el.find(".calculadoraResultadosContainerSpan").html(container + "<span class='dec"+decre+"'>" + value +"</span> " + signal +" ");
			} else {
				el.find(".calculadoraResultadosContainerSpan").html(container + "<span class='dec"+decre+" tooltip' data-title='Total: "+input+"'>" + value +"</span> " + signal +" ");
			}
			el.find(".calculadoraInput").addClass("zerar");
		}
		if (el.find(".calculadoraInput").val().length > 10) {
			el.addClass("travado");
			el.find(".calculadoraInput").addClass("backgroundRed");
			el.find(".calculadoraResultadosContainerSpan").html("Numeros demais!");
			el.find(".calculadoraInput").val("0");
			setTimeout(function() {
				el.removeClass("travado");
				el.find(".calculadoraInput").removeClass("backgroundRed");
				el.find(".calculadoraResultadosContainerSpan").html("");
				el.find(".calculadoraC").click();
			}, 5000);
		}


		window.valueTotal = el.find(".calculadoraInput").val().replace(/,/g, '.');
		window.operators = "";
		decre = decre+1;
	}

	//apertar = (igual) na calculadora
	$(document).on("click", ".calculadoraEqual",function(e){
		var countOperators = countOcurrences(el.find(".calculadoraResultadosContainerSpan").text());
		if (countOperators >= 1) {
			if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != window.operators) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
			}
			calc(e, window.operators);
		}
	});

	//apertar + (mais) na calculadora
	$(document).on("click", ".calculadoraMore",function(e){
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "+") {
			if (el.find(".calculadoraResultadosContainerSpan").text().length >= 1) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		    }
		}
		if (countOcurrences(el.find(".calculadoraResultadosContainerSpan").text()) >= 1) {
			if (window.operators != el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2]) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
			}
		} else {
			window.operators = "+";
		}
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "+" && el.find(".calculadoraInput").hasClass("zerar") == true) {
			window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		}
		calc(e, "+");
	});

	//apertar - (menos) na calculadora
	$(document).on("click", ".calculadoraMinus",function(e){
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "-") {
			if (el.find(".calculadoraResultadosContainerSpan").text().length >= 1) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		    }
		}
		if (countOcurrences(el.find(".calculadoraResultadosContainerSpan").text()) >= 1) {
			if (window.operators != el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2]) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
			}
		} else {
			window.operators = "-";
		}
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "-" && el.find(".calculadoraInput").hasClass("zerar") == true) {
			window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		}
		calc(e, "-");
	});

	//apertar x (multiplicar) na calculadora
	$(document).on("click", ".calculadoraMultiply",function(e){
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "*") {
			if (el.find(".calculadoraResultadosContainerSpan").text().length >= 1) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		    }
		}
		if (countOcurrences(el.find(".calculadoraResultadosContainerSpan").text()) >= 1) {
			if (window.operators != el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2]) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
			}
		} else {
			window.operators = "*";
		}
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "*" && el.find(".calculadoraInput").hasClass("zerar") == true) {
			window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		}
		calc(e, "*");
	});

	//apertar ÷ (dividir) na calculadora
	$(document).on("click", ".calculadoraDivide",function(e){
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "/") {
			if (el.find(".calculadoraResultadosContainerSpan").text().length >= 1) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		    }
		}
		if (countOcurrences(el.find(".calculadoraResultadosContainerSpan").text()) >= 1) {
			if (window.operators != el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2]) {
				window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
			}
		} else {
			window.operators = "/";
		}
		if (el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2] != "/" && el.find(".calculadoraInput").hasClass("zerar") == true) {
			window.operators = el.find(".calculadoraResultadosContainerSpan").text().split(" ")[el.find(".calculadoraResultadosContainerSpan").text().split(" ").length-2];
		}
		calc(e, "/");
	});

	//apertar % (porcentagem) na calculadora
	$(document).on("click", ".calculadoraPercent",function(e){
		var countOperators = countOcurrences(el.find(".calculadoraResultadosContainerSpan").html());
		var value = el.find(".calculadoraInput").val();
		var count = el.find(".calculadoraInput").val().split(",");
		var container = el.find(".calculadoraResultadosContainerSpan").html();
		var semFim = el.find(".calculadoraResultadosContainerSpan").html().length;

		if (countOperators >= 1) {
			if (window.valueTotal == 0) {
				window.valueTotal = el.find(".calculadoraInput").val().replace(/,/g, '.');
			}					
			if (value == 0 || value == "0,0" ||  value == "0," || value == "0,00" || el.find(".calculadoraInput").hasClass("zerar")) { //se estiver tudo zero cancela click
	    		e.preventDefault();
		        return false;
			}
			if (count["1"] && count["1"].length == 1) {//adicionar 1 zero no final se faltar um numero apos a virgula
				value = value + "0";
			}
			if (!count["1"] && value.indexOf(",") !=-1) {//adicionar 2 zeros no final se faltar dois numero apos a virgula
				value = value + "00";
			}
			if (semFim == 0) {
				if (decre == 0) {
					el.find(".calculadoraResultadosContainerSpan").html("<span class='dec"+decre+"'>" + value +"</span> "+ window.operators +" ");
				} else {
					el.find(".calculadoraResultadosContainerSpan").html("<span class='dec"+decre+" tooltip' data-title=''>" + value +"</span> "+ window.operators +" ");
				}
				el.find(".calculadoraInput").val(value);
				el.find(".calculadoraInput").addClass("zerar");
			} else {
				container = container.replace(/,/g, '.');
				if (window.operators == "+") {
					var total_ = eval((Number(window.valueTotal) * Number(window.calculadoraInput)) / 100);
					el.find(".calculadoraInput").val(eval(Number(window.valueTotal) + Number(total_)));
				} else if  (window.operators == "-") {
					var total_ = eval((Number(window.valueTotal) * Number(window.calculadoraInput)) / 100);
					el.find(".calculadoraInput").val(eval(Number(window.valueTotal) - Number(total_)));
				} else if (window.operators == "*") {
					var total_ = eval((Number(window.valueTotal) * Number(window.calculadoraInput)) / 100);
					el.find(".calculadoraInput").val(eval(Number(window.valueTotal) * Number(total_)));
				} else if (window.operators == "/") {
					var total_ = eval((Number(window.valueTotal) * Number(window.calculadoraInput)) / 100);
					el.find(".calculadoraInput").val(eval(Number(window.valueTotal) / Number(total_)));
				}
				var input = el.find(".calculadoraInput").val();
				if (input.indexOf(".") !=-1) {
					input = Number(input).toFixed(2);
					input = input.replace(/\./g, ',');
				}

				var subPorcentagem = Number(total_);
				if (el.find(".calculadoraInput").val().indexOf(".") !=-1) {
					var subPorcentagem = subPorcentagem.toFixed(2);
					var subPorcentagem = subPorcentagem.replace(/\./g, ',');
				}
				var total_ = el.find(".calculadoraInput").val();
				total_ = Number(total_).toFixed(2);
				total_ = total_.replace(/\./g, ',');
				container = container.replace(/\./g, ',');
				el.find(".calculadoraInput").val(input);

				window.calculadoraInput = window.calculadoraInput.replace(/\./g, ',');
				if (window.calculadoraInput.substring(window.calculadoraInput.length, window.calculadoraInput.length-1) == ",") {
					window.calculadoraInput = window.calculadoraInput.substring(0, window.calculadoraInput.length-1);
				} else if (window.calculadoraInput.substring(window.calculadoraInput.length - 2, window.calculadoraInput.length-1) == ",") {
					window.calculadoraInput = window.calculadoraInput + "0";
				}

				if (decre == 0) {
					el.find(".calculadoraResultadosContainerSpan").html(container + "<span class='dec"+decre+"'>"+subPorcentagem+" (" +window.calculadoraInput +" %) </span>" + window.operators +" ");
				} else {
					el.find(".calculadoraResultadosContainerSpan").html(container + "<span class='dec"+decre+" tooltip' data-title='Total: "+input+"'>"+subPorcentagem+" (" +window.calculadoraInput +" %) </span>" + window.operators +" ");
				}
				el.find(".calculadoraInput").addClass("zerar");
			}

			if (el.find(".calculadoraInput").val().length > 10) {
				el.addClass("travado");
				el.find(".calculadoraInput").addClass("backgroundRed");
				el.find(".calculadoraResultadosContainerSpan").html("Numeros demais!");
				el.find(".calculadoraInput").val("0");
				setTimeout(function() {
					el.removeClass("travado");
					el.find(".calculadoraInput").removeClass("backgroundRed");
					el.find(".calculadoraResultadosContainerSpan").html("");
					el.find(".calculadoraC").click();
				}, 5000);
			}

			window.calculadoraInput = window.calculadoraInput.replace(/\,/g, '.');
			window.valueTotal = el.find(".calculadoraInput").val().replace(/,/g, '.');
			window.operators = "";
			decre = decre+1;

		}
	});

	//função para pegar ultimo numero da calculadora
	function countOcurrences(str) {
		var regExp = new RegExp(/[()+\-*/.]/gi);
		return (str.match(regExp) || []).length;
	}

	//focus no input de numeros quando clicar em qualquer botao da calculadora
	$(document).on("click", ".calculadoraNumeros, .calculadoraCanto",function(e){
		el.find(".calculadoraResultadosContainerSpan").animate({scrollLeft: el.find(".calculadoraResultadosContainerSpan")[0].scrollWidth}, 500);
	});

	//quando digita um numero no body ele é adicionado no input de calculo
	$(document).on("keydown", 'body', function (e) {
		//48 ao 57 - numeros de 0 a 9 (keypress e keydown)
		//96 a 105 - numero 0 a 9 no numpad (só keydown)
		//8 - backspace (só keydown)
		//188 e 110 - virgula (só keydown)
		//44 - virgula (só keypress)
		//107(+) , 111(/), 109(-) e 106(*) - operadores matematicos (só keydown)
		//13 - enter (só keydown)
		if (e.keyCode == "110" || e.keyCode == "188" || e.keyCode == "48" || e.keyCode == "49" || e.keyCode == "50" || e.keyCode == "51" || e.keyCode == "52" || e.keyCode == "53" || e.keyCode == "54" || e.keyCode == "55" || e.keyCode == "56" || e.keyCode == "57" || e.keyCode == "96" || e.keyCode == "97" || e.keyCode == "98" || e.keyCode == "99" || e.keyCode == "100" || e.keyCode == "101" || e.keyCode == "102" || e.keyCode == "103" || e.keyCode == "104" || e.keyCode == "105" || e.keyCode == "107" || e.keyCode == "111" || e.keyCode == "109" || e.keyCode == "106" || e.keyCode == "13") {
			el.find(".calculadoraInput").focus();
		}

		if (e.keyCode == "8" && !el.find(".calculadoraInput").hasClass("zerar")) {
			el.find(".calculadoraInput").focus();
		}

	});

	//digitar na calculadora
	$(document).on("keydown", '.calculadoraInput', function (e) {
		var number = $(this).val();
		var count = $(this).val().split(",");
		var code = e.keyCode;
		//48 ao 57 - numeros de 0 a 9 (keypress e keydown)
		//96 a 105 - numero 0 a 9 no numpad (só keydown)
		//8 - backspace (só keydown)
		//188 e 110 - virgula (só keydown)
		//44 - virgula (só keypress)
		if (e.keyCode == "110" || e.keyCode == "188" || e.keyCode == "8" || e.keyCode == "48" || e.keyCode == "49" || e.keyCode == "50" || e.keyCode == "51" || e.keyCode == "52" || e.keyCode == "53" || e.keyCode == "54" || e.keyCode == "55" || e.keyCode == "56" || e.keyCode == "57" || e.keyCode == "96" || e.keyCode == "97" || e.keyCode == "98" || e.keyCode == "99" || e.keyCode == "100" || e.keyCode == "101" || e.keyCode == "102" || e.keyCode == "103" || e.keyCode == "104" || e.keyCode == "105") {
			if (number.length >= 8 && !el.find(".calculadoraInput").hasClass("zerar") && e.keyCode == "110") { //VIRGULA(188) //se tiver 7 numeros ou mais na calculadora ele não aceita a virgula
	        	e.preventDefault();
	        	return false;
			}
			if (e.keyCode == "8" && el.find(".calculadoraInput").hasClass("zerar")) {
	        	e.preventDefault();
	        	return false;
			}
			if (number.length >= 8 && !el.find(".calculadoraInput").hasClass("zerar") && e.keyCode == "188") { //VIRGULA(188) //se tiver 7 numeros ou mais na calculadora ele não aceita a virgula
	        	e.preventDefault();
	        	return false;
			}
			if (number.indexOf(",") !=-1) {
		        if (count["1"].length >= 2 && e.keyCode != "8") { //BACKSPACE(8) //se tiver 2 numeros depois da virgula e digitar algo diferente de backspace ele cancela a key
		        	e.preventDefault();
		        	return false;
		        }
		    }
	    	if (number.indexOf(",") !=-1 && e.keyCode == "8" && count["1"].length == 1) {//BACKSPACE(8) //se o proximo caractere tiver uma virgula na sequencia e apertar o backspace ele apaga a virgula junto
	    		el.find(".calculadoraInput").val(count["0"]);
	    		e.preventDefault();
		        return false;
		    }
		    if (el.find(".calculadoraInput").hasClass("zerar") && e.keyCode != "8" && e.keyCode != "188" && e.keyCode != "110") {//zerar se classe zerar tiver ativa
				el.find(".calculadoraInput").val("");
				el.find(".calculadoraInput").focus();
		    }
		} else {
	        e.preventDefault();
	        return false;
	    }
		el.find(".calculadoraInput").focus();
	});

	//digitar na calculadora
	$(document).on("keyup", '.calculadoraInput', function (e) {
		//48 ao 57 - numeros de 0 a 9 (keypress e keydown)
		//96 a 105 - numero 0 a 9 no numpad (só keydown)
		//8 - backspace (só keydown)
		//188 e 110 - virgula (só keydown)
		//44 - virgula (só keypress)
		if (e.keyCode == "110" || e.keyCode == "188" || e.keyCode == "8" || e.keyCode == "48" || e.keyCode == "49" || e.keyCode == "50" || e.keyCode == "51" || e.keyCode == "52" || e.keyCode == "53" || e.keyCode == "54" || e.keyCode == "55" || e.keyCode == "56" || e.keyCode == "57" || e.keyCode == "96" || e.keyCode == "97" || e.keyCode == "98" || e.keyCode == "99" || e.keyCode == "100" || e.keyCode == "101" || e.keyCode == "102" || e.keyCode == "103" || e.keyCode == "104" || e.keyCode == "105") {
			if (e.keyCode == "96"){
				var code = 0;
			} else if (e.keyCode == "97"){
				var code = 1;
			} else if (e.keyCode == "98"){
				var code = 2;
			} else if (e.keyCode == "99"){
				var code = 3;
			} else if (e.keyCode == "100"){
				var code = 4;
			} else if (e.keyCode == "101"){
				var code = 5;
			} else if (e.keyCode == "102"){
				var code = 6;
			} else if (e.keyCode == "103"){
				var code = 7;
			} else if (e.keyCode == "104"){
				var code = 8;
			} else if (e.keyCode == "105"){
				var code = 9;
			}
			if (el.find(".calculadoraInput").hasClass("zerar") && e.keyCode != "8" && e.keyCode != "188" && e.keyCode != "110") {//zerar se classe zerar tiver ativa
				el.find(".calculadoraInput").val("");
				el.find(".calculadoraInput").val(code);
				el.find(".calculadoraInput").focus();
				el.find(".calculadoraInput").removeClass("zerar");
		    }
			if (el.find(".calculadoraInput").val().length >= 10) {
		        e.preventDefault();
		        return false;
			}
		} 
	});

	//digitar na calculadora
	$(document).on("keypress", '.calculadoraInput', function (e) {
		var number = $(this).val();
		var count = $(this).val().split(",");
		var code = e.keyCode;
		//48 ao 57 - numeros de 0 a 9 (keypress e keydown)
		//96 a 105 - numero 0 a 9 no numpad (só keydown)
		//8 - backspace (só keydown)
		//188 e 110 - virgula (só keydown)
		//44 - virgula (só keypress)
	    if (e.keyCode == "44" || e.keyCode == "48" || e.keyCode == "49" || e.keyCode == "50" || e.keyCode == "51" || e.keyCode == "52" || e.keyCode == "53" || e.keyCode == "54" || e.keyCode == "55" || e.keyCode == "56" || e.keyCode == "57") {
	    	if (number.indexOf(",") !=-1 && e.keyCode == "44") {//VIRGULA(44) //se digitar virgula e se já tiver uma virgula ele cancela a key
	    		e.preventDefault();
		        return false;
		    }
		    if (number.length == 0 && e.keyCode == "44") {//VIRGULA(44) //se digitar virgula e não tiver nada ele cancela a key
	    		e.preventDefault();
		        return false;
		    }
		    if (number.length == 1 && number == 0 && e.keyCode != "44") {//VIRGULA(44) //se digitar qualquer numero e o zero for o primeiro ele apaga o zero e adiciona o novo numero, se for virgula ele mantam o zero e adiciona a virgula
	    		el.find(".calculadoraInput").val("");
	    		el.find(".calculadoraInput").val(String.fromCharCode(code));
	    		e.preventDefault();
		        return false;
		    }
	    	if (count["0"] == 0 && count["1"] == 0 && count["1"].length >= 1 && e.keyCode == "48") {//ZERO(48) //se o primeiro numero depois da virgula for zero e digitar zero ele cancela a key
	    		e.preventDefault();
		        return false;
		    }
	    } else {
	        e.preventDefault();
	        return false;
	    }
		el.find(".calculadoraInput").focus();
	});

	//////////////////////////////////////////////
    //função de limpeza do CONSOLE do browser
	function limpaConsole() {
		console.API;
		if (typeof console._commandLineAPI !== 'undefined') {
		    console.API = console._commandLineAPI; //chrome
		} else if (typeof console._inspectorCommandLineAPI !== 'undefined') {
		    console.API = console._inspectorCommandLineAPI; //Safari
		} else if (typeof console.clear !== 'undefined') {
		    console.API = console;
		}
		console.API.clear();
	}

	//////////////////////////////////////////////
    //função do tooltip
    function tooltip() {

		var fechar = 1;

    	$(document).on('mouseover', '.tooltip', function(e){

    		if (fechar == 1) {
				el.append('<div class="tooltips"></div>');

				el.find(".tooltips").html($(this).attr("data-title"));


				var width = el.find('.tooltips').width();
				var offset = $(this).offset();
				var container = $(this).width();

				el.find(".tooltips").show();
				if (offset.top - 45 >= 1) {
					el.find(".tooltips").css({
						top: offset.top - 45, 
					});
				} else {
					el.find(".tooltips").css({
						top: offset.top + 15, 
					});
				}

				if (offset.left + width >= $(window).width()) {
					el.find(".tooltips").css({
						left: offset.left - (width - container) /2 - 20,
					});
				} else {
					el.find(".tooltips").css({
						left: offset.left - (width - container) /2 - 12,
					});
				}
			}

		});

		$(document).on('mouseout', '.tooltip', function(e){
			$(this).attr("data-title", el.find(".tooltips").html());

			el.find(".tooltips").hide();
			el.find(".tooltips").remove();
		});

		$(document).on('dblclick', '.tooltip', function(e){
			if ($(this)["0"].className == "dadosData tooltip") {
    			fechar = 0;
    			setTimeout(function() {
    				fechar = 1;
				}, 300);
    			el.find(".tooltips").hide();
				el.find(".tooltips").remove();
			}
		});

	}

});


// -------------------------------------------------------------------------------------------
// Page dimensions detection
// -------------------------------------------------------------------------------------------
function detectDimensions(){


    var browser = {
            isIe: function () {
                return navigator.appVersion.indexOf("MSIE") != -1;
            },
            navigator: navigator.appVersion,
            getVersion: function() {
                var version = 999; // we assume a sane browser
                if (navigator.appVersion.indexOf("MSIE") != -1)
                    // bah, IE again, lets downgrade version number
                    version = parseFloat(navigator.appVersion.split("MSIE")[1]);
                return version;
            }
        };

    if (browser.isIe() && browser.getVersion() <= 9) {
        $("html").addClass("ie9")
        console.log("You are currently using Internet Explorer" + browser.getVersion() + " or are viewing the site in Compatibility View, please upgrade for a better user experience.")
    }



    if (window.innerWidth <768){
        $('html').removeClass("tablet").removeClass("desktop").addClass('smartphone');
    }
    else if(window.innerWidth >=768 && window.innerWidth<1280){
        $('html').removeClass("desktop").removeClass("smartphone").addClass('tablet');
    }
    else if(window.innerWidth >=1280){
        $('html').removeClass("tablet").removeClass("smartphone").addClass('desktop');
    }                        

    var browserWidth, browserHeight;
    var browserWidth = $(window).width();
    var browserHeight = $(window).height();
    
    
    //portrait/landscape 
    $('html').removeClass('portrait').removeClass('landscape');   
    if(browserWidth>browserHeight)  $('html').addClass('landscape');
    else $('html').addClass('portrait'); 


    //smallScreen/largeScreen classes
    if($("html").hasClass("smartphone")) $("html").removeClass("largeScreen").addClass("smallScreen");
    else if($("html").hasClass("tablet") && $("html").hasClass("portrait")) $("html").removeClass("largeScreen").addClass("smallScreen");
    else if($("html").hasClass("tablet") && $("html").hasClass("landscape")) $("html").removeClass("smallScreen").addClass("largeScreen");
    else if($("html").hasClass("desktop")) $("html").removeClass("smallScreen").addClass("largeScreen");



    //finished detecion
    //$('html').removeClass('dimensions_unavailable');            
    $.event.trigger({   
      type:    "dimensionUpdate",
      message: "html class update",
      time:    new Date()
    });

}




$(document).ready(function() {
    detectDimensions();
    $(window).resize(function(){detectDimensions();});

	if($("html").hasClass("smallScreen")){
		$(".page-calc").find(".calculadoraInput").prop('readonly', true);
	}
});


})(jQuery);