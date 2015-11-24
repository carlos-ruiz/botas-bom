$(window).load(function (){
		var heightItems = $(".recent-products-container").height();
		$(".recent-products-container .flex-item").css({'height':heightItems, 'margin':'0 5px', 'display': 'table-cell', 'vertical-align': 'bottom'});
	});

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
		$.post("/bom/bom/products/loadModalContent",{id:$(this).data('id')},function(data){
			$("#product-pop-up").html(data);
		})
	})
	
});
	
