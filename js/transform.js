$(document).ready(function() { 
	Transform(); 
	calculateDiscount(); 
});

function Transform() {
	// Download XML data from the server side.
	var xml = getXMLData("createXML.php");

	// Get XSL template at the client side.
	var xsl = getXMLData("product_list.xsl");

	// Only for Mozilla based browsers.
	xsltProcessor = new XSLTProcessor();
	xsltProcessor.importStylesheet(xsl);
	var result = xsltProcessor.transformToFragment(xml, document);

	$("#product_list").append(result);
}

function getXMLData(url) {
	return $.ajax({type:"GET",
				   url:url,
		           async:false}).responseXML;
}

function calculateDiscount() {
	$(".plan-flex").each(function(i) {
			var discount = parseInt($(this).find("#value-discount").text());
			var oriPrice = parseInt($(this).find("#value-price").text());
			var price = (oriPrice * (100 + discount) / 100).toFixed(2);

			$(this).find(".price").append(
				"<span class='txt-prod-oriPrice'>RM " + oriPrice.toFixed(2) + "</span><br />" +
				"RM " + price);

			console.log(i + ": " + discount);
			console.log(i + ": " + oriPrice);
			console.log(i + ": " + price);
	});
}
