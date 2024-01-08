(function(_, $) {
	let inp = $("#product_data_company_id");

	//this should run only when logged as an admin
	if (!inp.next().hasClass('ajax-select-wrap')) {
		return;
	}
	
	inp.on("change", (evt) => {
		let company_id = String(evt.target.value);

		set_generated_code_to_inputs(company_id, true);
	});

	$(document).on("ready", (evt) => {
		let company_id = String(inp.val());

		set_generated_code_to_inputs(company_id, false);
	});
}(Tygh, Tygh.$));

function set_generated_code_to_inputs(company_id, is_change) {
	let vendor_code = $("a[data-ca-action='" + company_id + "']").data('vendor-code');
	if(vendor_code == undefined) {
		vendor_code = $("input[data-default-vendor-code]").data('default-vendor-code');
	}

	let parts = generate_product_code(company_id, vendor_code);

	let input_vendor_code = $("#elm_product_code_ven");
	let input_generated_code = $("#elm_product_code_gen");

	if(input_vendor_code.val() === '' || is_change) {
		input_vendor_code.val(parts[0]);
	}
	if(input_generated_code.val() === '' || is_change) {
		input_generated_code.val(parts[1]);
	}
}

function generate_product_code(company_id, potential_vendor_code) {
	let vendor_code = potential_vendor_code;
	let last_code = generate_last_code(vendor_code);

	if(vendor_code == '') {
		vendor_code = generate_vendor_code(company_id);
	}

	return [vendor_code, last_code];
}

function generate_last_code(vendor_code) {
	return vendor_code == '' ? '000001' : Math.floor(Math.random() * 1000000);
};

function generate_vendor_code(company_id) {
	let seed_letter = [
		String.fromCharCode(random_in_range(65, 90)),
		String.fromCharCode(random_in_range(65, 90)),
		String.fromCharCode(random_in_range(65, 90))
	];

	let seed_id = String.prototype.padStart(3 - company_id.length, "0") + company_id;

	let vendor = seed_letter[0] + seed_id[0] + seed_letter[1] + 
		seed_id[1] + seed_letter[2] + seed_id[2];

	return vendor;
};

function random_in_range(min, max) {
	return min + Math.floor((max - min) * Math.random());
};