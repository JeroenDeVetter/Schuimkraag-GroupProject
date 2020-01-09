var options = {
	url: "../html-css-js/json/schuimkraag_gemeente.json",

	getValue: "name",

	list: {
		match: {
			enabled: true
		}
	}
};

$("#postcode").easyAutocomplete(options);