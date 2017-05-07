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
      var zakaznici = jsonOptions.zakaznici;
      var vyrobky = jsonOptions.vyrobky;
      
      $.each(zakaznici, function (index, value) {
       
        var option = document.createElement('option');
        option.value = value.zakaznik_priezvisko + ' ' + value.zakaznik_meno + ', ' + 
            value.ulica + ' ' + value.cislo_domu + ' ' + value.obec_nazov;
        // Add the <option> element to the <datalist>.
        dataList_osoba.appendChild(option);
      });

      
      $.each(vyrobky, function (index, value) {
       
        var option = document.createElement('option');
        option.value = value.vyrobok_cislo + ', ' + value.vyrobok_model + ', ' + 
            value.vyrobok_napatie;
        // Add the <option> element to the <datalist>.
        dataList_vyrobok.appendChild(option);
      });
  }
};


// Set up and make the request.
request.open('GET', 'json/zakaznici.json', true);
request.send();