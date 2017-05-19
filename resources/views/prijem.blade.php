@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #62ffa6">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background-color: #2ab27b">
            <div class="panel panel-default" style="background-color: #954120">

	            <div id="form">

		            <form id="customer_form" action="null">
		                {{ csrf_field() }}
			            <!-- zakaznik -->
			            <fieldset id="zakaznik-udaje" style="margin: 0px; padding: 0px;">

				            <legend style="font-size: medium;; margin-bottom: 0px;">&nbsp;&nbsp;&nbsp;.::Zákazník::.
					            <div style="float: right; position: relative; margin-bottom: 0px;" class="roundedOne">
						            <input type="checkbox"  id="zakaznik_je_firma"
						                   onclick="handleCbClick(this, 'lbl_osoba_firma', 'Súkromná osoba', 'Firma', 'container_sukromna_osoba',
                                            'container_firma')" checked=""/>
						            <label class="noanimation" for="zakaznik_je_firma"></label>
					            </div>
					            <label class="noanimation" style="font-weight: normal; color: white;
                                        text-transform: none; float: right; position: relative;"
					                   id="lbl_osoba_firma" name="lbl_osoba_firma">
						            Súkromná osoba
					            </label>
				            </legend>


				            <!-- zakaznik - sukromna osoba - Datalist -->
				            <div id="container_sukromna_osoba" style="display:inline;">
					            <div class="input-container" id="container_zakaznik_priezvisko">
						            {{--<input type="text" id="zakaznik_priezvisko" name="zakaznik_priezvisko"
						                   list="udaje_sukromna_osoba" required/>
						            <label for="zakaznik_priezvisko">Priezvisko</label>
						            <datalist id="udaje_sukromna_osoba"></datalist>--}}
						            <input required
						                   class='flexdatalist'
						                   id='zakaznik_priezvisko'
						                   name='zakaznik_priezvisko'
						                   type='text'>
						            <label for="zakaznik_priezvisko">Priezvisko</label>
					            </div>
					            <div class="input-container" id="container_zakaznik_meno">
						            <input type="text" id="zakaznik_meno" name="zakaznik_meno" required/>
						            <label for="zakaznik_meno">Krstné meno</label>
					            </div>
					            <div class="input-container" id="container_titul">
						            <input type="text" id="titul" name="titul" required/>
						            <label for="titul">Titul</label>
					            </div>
				            </div>


				            <!-- zakaznik - firma -->
				            <div id="container_firma" style="display:none;">
					            <div class="input-container" id="container_zakaznik_firma_ico">
						            <input type="text" id="zakaznik_firma_ico" name="zakaznik_firma_ico" required/>
						            <label for="zakaznik_firma_ico">IČO</label>
					            </div>
					            <div class="input-container" id="container_zakaznik_firma_meno">
						            <input type="text" id="zakaznik_firma_meno" name="zakaznik_firma_meno"/>
						            <label for="zakaznik_firma_meno">Názov organizácie</label>
					            </div>
				            </div>


				            <!-- zakaznik - adresa -->
				            <div class="input-container" id="container_obec_nazov">
					            <input type="text" id="obec_nazov" name="obec_nazov" required/>
					            <label for="obec_nazov">Mesto/obec</label>
				            </div>
				            <div class="input-container" id="container_psc">
					            <input type="text" id="psc" name="psc" required maxlength="5"/>
					            <label for="psc">Psč</label>
				            </div>
				            <div class="input-container" id="container_ulica">
					            <input type="text" id="ulica" name="ulica" required/>
					            <label for="ulica">Ulica</label>
				            </div>
				            <div class="input-container" id="container_cislo_domu">
					            <input type="text" id="cislo_domu" name="cislo_domu" required maxlength="8"/>
					            <label for="cislo_domu">Číslo d.</label>
				            </div>

				            <!-- zakaznik - telefon, e-mail, fax -->
				            <div class="input-container" id="container_telefon">
					            <input type="text" id="telefon" name="telefon" required/>
					            <label for="telefon">Telefónne číslo</label>
				            </div>
				            <div class="input-container" id="email">
					            <input type="email" name="email" required/>
					            <label for="email">Email</label>
				            </div>
				            <div class="input-container" id="container_fax">
					            <input type="text" id="fax" name="fax" required/>
					            <label for="fax">Fax</label>
				            </div>

			            </fieldset>

			            <!-- vyrobok do pravy -->
			            <fieldset id="vyrobok-udaje">

				            <legend style=" font-size: medium; margin-bottom: 0px;">&nbsp;&nbsp;&nbsp;.::Výrobok::.</legend>

				            <!-- model vyrobku, vyr. cislo, napatie -->
				            <div class="input-container" id="container_vyrobok_cislo">
					            {{--<input type="text" id="vyrobok_cislo" name="vyrobok_cislo"
					                   list="serial_numbers" required/>
					            <label for="vyrobok_cislo">Výrobné číslo</label>
					            <datalist id="serial_numbers"></datalist>--}}
					            <input required
					                   class='flexdatalist'
					                   id='vyrobok_cislo'
					                   name='vyrobok_cislo'
					                   type='text'>
					            <label for="vyrobok_cislo">Výrobné číslo</label>
				            </div>
				            <div class="input-container" id="container_vyrobok_model">
					            <input type="text" id="vyrobok_model" name="vyrobok_model" required/>
					            <label for="vyrobok_model">Model výrobku</label>
				            </div>

				            <div class="input-container" id="container_vyrobok_napatie">
					            <input type="text" id="vyrobok_napatie" name="vyrobok_napatie" required/>
					            <label for="vyrobok_napatie">Napätie [V]</label>
				            </div>

				            <!-- dat. nakupu, kat. vyrobku, vyrobca vyrobku -->
				            <div class="input-container" id="container_vyrobok_dat_predaja">
					            <input type="text" id="vyrobok_dat_predaja" name="vyrobok_dat_predaja" required/>
					            <label for="vyrobok_dat_predaja">Dátum nákupu</label>
				            </div>
				            <div class="input-container" id="container_vyrobok_kategoria">
					            <input type="text" id="vyrobok_kategoria" name="vyrobok_kategoria" required/>
					            <label for="vyrobok_kategoria">Kategória výrobku</label>
				            </div>
				            <div class="input-container" id="container_vyrobok_vyrobca">
					            <input type="text" id="vyrobok_vyrobca" name="vyrobok_vyrobca" required/>
					            <label for="vyrobok_vyrobca">Výrobca výrobku</label>
				            </div>

				            <!-- opis poruchy -->
				            <div class="input-container1" id="container_porucha">
					            <textarea id="porucha" name="porucha" required></textarea>
					            <label for="porucha">Opis poruchy</label>
				            </div>
				            <!-- prislusenstvo vyrobku -->
				            <div class="input-container1" id="container_prislusenstvo">
					            <textarea id="prislusenstvo" name="prislusenstvo"></textarea>
					            <label for="prislusenstvo">Odovzdané príslušenstvo</label>
				            </div>

			            </fieldset>

			            <fieldset id="zakazka-udaje">

				            <legend style=" font-size: medium; margin-bottom: 0px;">

					            <!-- vybery pomocou CheckBoxu  -->
					            <!-- Druh zakazky  -->

					            <div style="float: left; position: relative; width: 20%;">
						            <div style="float: left; position: relative;">
							            <div class="roundedOne">
								            <input  type="checkbox"  id="prijem_zakazka_multi"
								                    onclick="handleCbClick(this, 'lbl_druh_zakazky', 'Zákazka sólo', 'Zákazka multi', null, null)" checked=""/>
								            <label class="noanimation" for="prijem_zakazka_multi"></label>
							            </div>
						            </div>
						            <label class="noanimation" id="lbl_druh_zakazky" name="lbl_druh_zakazky"
						                   style="font-weight: normal; color: white; text-transform: none; float: left; position: relative;">
							            Zákazka sólo
						            </label>
					            </div>

					            <!-- Druh opravy  -->
					            <div style="float: left; position: relative; width: 25%;">
						            <div style="float: left; position: relative;">
							            <div class="roundedOne">
								            <input  type="checkbox"  id="prijem_zarucna_oprava"
								                    onclick="handleCbClick(this, 'lbl_druh_opravy', 'Záručná oprava', 'Pozáručná oprava', null, null)" checked=""/>
								            <label class="noanimation" for="prijem_zarucna_oprava"></label>
							            </div>
						            </div>
						            <label class="noanimation" id="lbl_druh_opravy" name="lbl_druh_opravy"
						                   style="font-weight: normal; color: white; text-transform: none; float: left; position: relative;">
							            Záručná oprava
						            </label>
					            </div>

					            <!-- Presksana funkcnost vyrobku  -->
					            <div style="float: left; position: relative; width: 30%;">
						            <div style="float: left; position: relative;">
							            <div class="roundedOne">
								            <input type="checkbox"  id="prijem_vyrobok_preskusany"
								                   onclick="handleCbClick(this, 'lbl_funkcnost', 'Nepreskúšaná funkčnosť ', 'Preskúšaná funkčnosť', null, null)" checked=""/>
								            <label class="noanimation" for="prijem_vyrobok_preskusany"></label>
							            </div>
						            </div>
						            <label class="noanimation" id="lbl_funkcnost" name="lbl_funkcnost"
						                   style="font-weight: normal; color: white; text-transform: none; float: left; position: relative;">
							            Nepreskúšaná funkčnosť
						            </label>
					            </div>

					            <!-- Prijata zaloha  -->
					            <div style="float: right; position: relative;" class="roundedOne">
						            <input type="checkbox"  id="cb_prijem_zaloha"
						                   onclick="handleCbClickVisibility(this, 'lbl_prijem_zaloha', 'Záloha',
                                            'Bez zálohy', 'prijem_zaloha', 'lb_prijem_zaloha', 'Prijatá záloha, [€]')" checked=""/>
						            <label class="noanimation" for="cb_prijem_zaloha"></label>
					            </div>
					            <label class="noanimation" style="font-weight: normal; color: white;
                                        text-transform: none; float: right; position: relative;"
					                   id="lbl_prijem_zaloha" name="lbl_prijem_zaloha">
						            Bez zálohy
					            </label>

				            </legend>


				            <!-- dat. prijmu, odhadovana cena, odhadovany datum opravy -->

					            <div class="input-container" id="container_datum_prijmu">
						            <input type="text" id="datum_prijmu" name="datum_prijmu"
						                   style="border-bottom-width: 0px;" required/>
						            <label for="datum_prijmu">Dátum príjmu</label>
					            </div>
					            <div class="input-container" id="container_bude_opravene">
						            <input type="text" id="bude_opravene" name="bude_opravene"
						                   style="border-bottom-width: 0px;" required/>
						            <label for="bude_opravene">Dátum opravy</label>
					            </div>
					            <div class="input-container" id="container_cena_odhad">
						            <input type="text" id="cena_odhad" name="cena_odhad"
						                   style="border-bottom-width: 0px;" required/>
						            <label for="cena_odhad">Cena opravy, [€]</label>
					            </div>
					            <div class="input-container" id="container_prijem_zaloha">
						            <input type="text" id="prijem_zaloha"
						                   style="border-bottom-width: 0px;" required/>
						            <label id="lb_prijem_zaloha" for="prijem_zaloha"></label>
					            </div>



			            </fieldset>

		            </form>
	            </div>

            </div>
        </div>
    </div>
</div>
@endsection
