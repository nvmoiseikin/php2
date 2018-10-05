$(".buttonMoreProduct").on("click", function() { addProducts(clicks); clicks++;});


var clicks = 1, constN = 3, products = [];

function addProducts(clicks){

  $.ajax({
    url: 'ajax.php',
    type: 'POST',
	data: {
		clicks: clicks
	}
  })
  .done(function (newProducts) {
    products[clicks] = newProducts;
	console.log(products);
	$(".catalog").append(newProducts);
  });
  
};