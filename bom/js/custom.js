$(window).load(function (){
		var heightItems = $(".recent-products-container").height();
		$(".recent-products-container .flex-item").css({'height':heightItems, 'margin':'0 5px', 'display': 'table-cell', 'vertical-align': 'bottom'});
	});

function accentFold(inStr) {
  return inStr.replace(/([àáâãäå])|([ç])|([èéêë])|([ìíîï])|([ñ])|([òóôõöø])|([ß])|([ùúûü])|([ÿ])|([æ])/g, function(str,a,c,e,i,n,o,s,u,y,ae) { if(a) return 'a'; else if(c) return 'c'; else if(e) return 'e'; else if(i) return 'i'; else if(n) return 'n'; else if(o) return 'o'; else if(s) return 's'; else if(u) return 'u'; else if(y) return 'y'; else if(ae) return 'ae'; });
}

$(document).ready(function(){
	$(".menu-category").click(function(){
		var category = $(this).text().trim();
		$(".product-container").each(function(){
			//alert($(this).find(".product-categories").text()+" --- "+category);
			categoriesString="";
			$(this).find(".filter").each(function(){
				categoriesString+=$(this).text();
			});
			//alert(categoriesString+" --- -"+category.trim()+"-");
			if(categoriesString.indexOf(category)<0){
				$(this).hide(500);
			}
			else{
				$(this).show(500);
			}
		});
	});

	$(".show-all-category").click(function(){
		$(".product-container").each(function(){
			$(this).show(500);
		});
	});	

	$(".fancybox-fast-view").click(function(){
		$("#product-pop-up").html("Cargando...");
		$.post("/bom/bom/products/loadModalContent",{id:$(this).data('id')},function(data){
			$("#product-pop-up").html(data);
		})
	});

	$("#btn-search").click(function(){
		var textSearch = accentFold($("#field-search").val()).toLowerCase();
		if(textSearch.length>0){
			$(".product-container").each(function(){
				var textoProducto = accentFold($(this).text()).toLowerCase();
				if(textoProducto.indexOf(textSearch)<0){
					$(this).hide(500);
				}else{
					$(this).show(500);
				}
			});
		}else{
			$(".product-container").show(500);
		}
	});

	$("#field-search").change(function(){
		var textSearch = accentFold($("#field-search").val()).toLowerCase();
		if(textSearch.length>0){
			$(".product-container").each(function(){
				var textoProducto = accentFold($(this).text()).toLowerCase();
				//alert(textoProducto);
				if(textoProducto.indexOf(textSearch)<0){
					$(this).hide(500);
				}else{
					$(this).show(500);
				}
			});
		}else{
			$(".product-container").show(500);
		}
	});
	
});
	
