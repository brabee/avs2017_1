
<!-- JavaScripts - Nacitanie dat z  Json do datalistov -->
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
					option.value = customerSelect;
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

<!-- JavaScripts - Vykliknutie hodnoty z Datalistu -->
<script type="text/javascript">
	document.querySelector('input[list="udaje_sukromna_osoba"]').addEventListener('input', onInput);

	function onInput(e) {
		var input = e.target,
		val = input.value;
		list = input.getAttribute('list'),
		options = document.getElementById(list).childNodes;

		for(var i = 0; i < options.length; i++) {
			if(options[i].innerText === val) {
				// An item was selected from the list!
				// yourCallbackHere()
				alert('item selected: ' + val);
				break;
			}
		}
	}
</script>

{{--	<script type="text/javascript">
		//How to filter JSON Data in JavaScript or jQuery?
		// http://stackoverflow.com/questions/23720988/how-to-filter-json-data-in-javascript-or-jquery

		// Get the <datalist> and <input> elements.
		var myDataList = document.getElementById('udaje_sukromna_osoba');

		// Create a new XMLHttpRequest.
		var request = new XMLHttpRequest();

		// Handle state changes for the request.
		request.onreadystatechange = function(response) {
			if (this.readyState == 4 && this.status == 200) {
				// Parse the JSON
				var jsonOptions = JSON.parse(this.responseText);

				$.each(jsonOptions.customers, function (key, value) {

					var option = document.createElement('option');
					var ulica = value.ulica ? value.ulica : 'č. ';
					var jsonSelect = value.zakaznik_priezvisko + ' ' + value.zakaznik_meno + ', ' +
						value.psc + ' ' + value.obec_nazov  + ', ' +
						ulica + ' ' + value.cislo_domu ;

					option.value = jsonSelect;
					// Add the <option> element to the <datalist>.
					myDataList.appendChild(option);
				});

			}
		};

		// Set up and make the request.
		request.open('GET', '{{ route('json_customers') }}', true);
		request.send();
	</script>


	<script type="text/javascript">
		// Get the <datalist> and <input> elements.
		var myDataList1 = document.getElementById('serial_numbers');

		// Create a new XMLHttpRequest.
		var request = new XMLHttpRequest();

		// Handle state changes for the request.
		request.onreadystatechange = function(response) {
			if (this.readyState == 4 && this.status == 200) {
				// Parse the JSON
				var jsonOptions1.products = JSON.parse(this.responseText);

				$.each(jsonOptions1, function (key, value) {

					var option = document.createElement('option');
					var jsonSelect = value.vyrobok_cislo + ', ' + value.vyrobok_model + ', ' +
						value.vyrobok_napatie;

					option.value = jsonSelect;
					// Add the <option> element to the <datalist>.
					myDataList1.appendChild(option);
				});
			}
		};

		// Set up and make the request.
		request.open('GET', '{{ route('json_products') }}', true);
		request.send();
	</script>--}}

