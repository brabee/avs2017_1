
<!-- JavaScripts - Nacitanie dat z  Json do datalistov -->
{{--
<script type="text/javascript">

		// Get the <datalist> and <input> elements.
		var dataList_osoba = document.getElementById('udaje_sukromna_osoba');
		var dataList_vyrobok = document.getElementById('serial_numbers');

		// Create a new XMLHttpRequest.
		var request = new XMLHttpRequest();

		// Handle state changes for the request.
		request.onreadystatechange = function(response) {
			if (this.readyState == 4 && this.status == 200) {

				// Parse the JSON
				var jsonOptions = JSON.parse(this.responseText);

				$.each(jsonOptions.customers, function (index, value) {
					//datalist zakaznici - sukromna osoba
					var option = document.createElement('option');
					var ulica = value.ulica ? ', ' +  value.ulica : ' č. ';
					var customerSelect = value.zakaznik_priezvisko + ' ' + value.zakaznik_meno + ', ' +
						value.psc + ' ' + value.obec_nazov  +
						ulica + ' ' + value.cislo_domu ;
					option.value = value.zakaznik_priezvisko;
					option.id = value.id;
					option.innerHTML=customerSelect;
					// Add the <option> element to the <datalist>.
					dataList_osoba.appendChild(option);
				});

				$.each(jsonOptions.products, function (index, value) {
					// datalist vyrobky
					var option = document.createElement('option');
					var productSelect = value.vyrobok_cislo + ', ' + value.vyrobok_model + ', ' +
											value.vyrobok_napatie;
					option.value = productSelect;
					// Add the <option> element to the <datalist>.
					dataList_vyrobok.appendChild(option);
				});
			}
		};

		// Set up and make the request *******************************
		request.open('GET', '{{ route('json_data') }}', true);
		request.send();
		//*************************************************************
</script>
--}}



