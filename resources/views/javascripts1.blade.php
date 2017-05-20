
<!-- JavaScripts - Nacitanie dat z  Json do datalistov -->
<script type="text/javascript">



	    $(document).ready(function(){

	    	// zakaznik_priezvisko - flexDatalist
		    $("#zakaznik_priezvisko").on("change:flexdatalist",function(){
			    //console.log(typeof jsonObjCustomer =='object');
			    // console.log($('#zakaznik_priezvisko').attr('value'));
			    //console.log("***********************************");

		    	if ($('#zakaznik_priezvisko').attr('value')) {
				    var jsonObjCustomer = $.parseJSON($('#zakaznik_priezvisko').attr('value'));
				    
				    $("#zakaznik_meno").val(jsonObjCustomer.zakaznik_meno);
				    $("#titul").val(jsonObjCustomer.titul);
				    $("#obec_nazov").val(jsonObjCustomer.obec_nazov);
				    $("#psc").val(jsonObjCustomer.psc);
				    $("#ulica").val(jsonObjCustomer.ulica);
				    $("#cislo_domu").val(jsonObjCustomer.cislo_domu);
				    $("#telefon").val(jsonObjCustomer.telefon);
			    }
			    else {
				    $("#zakaznik_meno").val(null);
				    $("#titul").val(null);
				    $("#obec_nazov").val(null);
				    $("#psc").val(null);
				    $("#ulica").val(null);
				    $("#cislo_domu").val(null);
				    $("#telefon").val(null);
			    }
		    });

		    // vyrobok_cislo - flexDatalist
		    $("#vyrobok_cislo").on("change:flexdatalist",function(){
		    	if ($('#vyrobok_cislo').attr('value')) {
				    var jsonObjProduct = $.parseJSON($('#vyrobok_cislo').attr('value'));
				    //console.log(jsonObjProduct.vyrobok_model);
				    $("#vyrobok_model").val(jsonObjProduct.vyrobok_model);
				}
				else {
					$("#vyrobok_model").val(null);

				}
			});

		    // obec_nazov - flexDatalist 
		    $("#obec_nazov").on("change:flexdatalist",function(){
		    	if ($('#obec_nazov').attr('value')) {
				    var jsonObjProduct = $.parseJSON($('#obec_nazov').attr('value'));
				    $("#psc").val(jsonObjProduct.psc);
				}
				else {
					$("#psc").val(null);

				}				
		    });

	    });

	    var FlexDataListId;
	    var dataJson;
	    var visibleProperties;
	    var searchIn;


	    /** Nacitanie udajov z odkliknuteho FlexDataList pre customer */
	    if ($('#zakaznik_priezvisko').attr('id')) {
		    FlexDataListId = '#zakaznik_priezvisko';
		    dataJson = '{{ route('json_customers') }}';
		    visibleProperties = ["zakaznik_priezvisko", "zakaznik_meno", "obec_nazov", "ulica", "cislo_domu"];
		    searchIn = 'zakaznik_priezvisko';
		    fillFlexDataList (FlexDataListId,dataJson,visibleProperties,searchIn);
	    }

	    /** Nacitanie udajov z odkliknuteho FlexDataList pre product */
	    if ($('#vyrobok_cislo').attr('id')) {
			FlexDataListId = '#vyrobok_cislo';
		    dataJson = '{{ route('json_products') }}';
		    visibleProperties = ["vyrobok_cislo","vyrobok_model"];
		    searchIn = 'vyrobok_cislo';
		    fillFlexDataList (FlexDataListId,dataJson,visibleProperties,searchIn);
	    }

	    /** Nacitanie udajov z odkliknuteho FlexDataList pre obec_nazov */
	    if ($('#obec_nazov').attr('id')) {
			FlexDataListId = '#obec_nazov';
		    dataJson = '{{ route('json_towns') }}';
		    visibleProperties = ["obec_nazov"];
		    searchIn = 'obec_nazov';
		    fillFlexDataList (FlexDataListId,dataJson,visibleProperties,searchIn);
	    }

	    /** spolocna funkcia pre vratenie udajov z odkliknuteho riadku FlexDataList */
		function fillFlexDataList (FlexDataListId,dataJson,visibleProperties,searchIn) {
			$(FlexDataListId).flexdatalist({
				minLength: 0,
				valueProperty: '*',
				selectionRequired: true,
				visibleProperties: visibleProperties,
				searchIn: searchIn,
				data: dataJson

			})

		}

    </script>



