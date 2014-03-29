function odlozDoKoszyka(id, onResult, onError) {
	request = $.ajax({
		async : false,
		url : "dodajDoKoszyka.php",
		data : {
			element : id
		},
		type : "post"
	});
	request.done(function(odpowiedz, textStatus, jqXHR) {
		if (odpowiedz.ok) {
			onResult();
		} else {
			onError(odpowiedz.opis);
		}

	});
	request.error(function(jqXHR, textStatus, errorThrown) {
		console.error(textStatus + errorThrown);
	});
}


///

function getZawartoscKoszyka(onResult) {
	request = $.ajax({
		async : true,
		url : "wezZawartoscKoszyka.php",
		data : {},
		type : "get"
	});
	request.done(function(odpowiedz, textStatus, jqXHR) {
		onResult(odpowiedz);
	});
	request.error(function(jqXHR, textStatus, errorThrown) {
		console.error(textStatus + errorThrown);
	});
}

function getIloscWKoszyku(onResult) {
	getZawartoscKoszyka(function(odpowiedz) {
		onResult(odpowiedz.length);
	});
}