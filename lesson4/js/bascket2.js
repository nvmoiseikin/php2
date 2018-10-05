$(".buttonProduct1").on("click", function() { addToBascket(1);});
$(".buttonProduct2").on("click", function() { addToBascket(2);});
$(".buttonProduct3").on("click", function() { addToBascket(3);});
$(".buttonProduct4").on("click", function() { addToBascket(4);});

var cost = [-1, "1000", "2000", "3000", "4000"], material = [-1, "Яшма", "Яшма", "Змеевик", "Лазурит"];

var n = 0, sum = 0, col = [0, 0, 0, 0, 0, 0], colN = 0;

function addToBascket(i){
	
	if (col[i] == 0) {
		$("#sum").after("<li class=\"InBascket " + i + "product\">Товар: Денежкин камень(" + 
		material[i] + ")<div class=\"deny deny" + i + "\"></div><div class=\"productN productN" + i + "\">" + (++col[i]) + "</div><br><b>цена: " + cost[i] + "&#8381;</b></li>");
	
		$(".deny" + i).bind("click", function() { remove(i);});
	}
	
	else $(".productN" + i).html(++col[i]);
	
	$("#bascketN").html(++colN)
	$(".bascketHead p").css("color", "red"); $(".bascketInsight").css("display", "block"); setTimeout( function() { $(".bascketHead p").css("color", "#c0a97a");  $(".bascketInsight").removeAttr("style");}, 1000);
	
	sum += (+cost[i]);
	$("#sum").html("Сумма:&nbsp;" + sum + " &#8381;"); 
	console.log(i, n);
}

/*function addToBascket(i){
	if (n == 0) $("#sum").after("<li class=\"InBascket " + (++n) + "product\">Товар: Денежкин камень(" + material[i] + ")<div class=\"product product" + col[i] + "\"></div><div class=\"deny deny" + n + "\"></div><br><b>цена: " + cost[i] + "&#8381;</b></li>");
	else $("." + n + "product").after("<li class=\"InBascket " + (++n) + "product\">Товар: Денежкин камень(" + material[i] + ")<div class=\"deny deny" + n + "\"></div><br><b>цена: " + cost[i] + "&#8381;</b></li>");
	$("#bascketN").html(n)
	$(".bascketHead p").css("color", "red"); setTimeout( function() { $(".bascketHead p").css("color", "#c0a97a");}, 1000);
	
	sum += +cost[i];
	$("#sum").html("Сумма:&nbsp;" + sum + " &#8381;"); 
	console.log(i, n);
}*/

function remove(i){
	sum -= (+cost[i])*col[i]; colN -= col[i]; col[i] = 0;
	
	$("#bascketN").html(colN)
	$(".deny" + i).unbind("click");
	$("#sum").html("Сумма:&nbsp;" + sum + " &#8381;"); 
	
	$("." + i + "product").remove(); 
}