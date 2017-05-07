
 function nastaveniaOnLoad () {

  //nastavenia pre refresh, onload
  document.getElementById('zakaznik_je_firma').checked = true;
  document.getElementById('prijem_zakazka_multi').checked = true;
  document.getElementById('prijem_zarucna_oprava').checked = true;
  document.getElementById('prijem_vyrobok_preskusany').checked = true;  
  document.getElementById('cb_prijem_zaloha').checked = false;
 }


  function handleCbClick(cb, label_id, label_inner_1, label_inner_2, container_group_1, container_group_2) {

	  // console.log(cb);


	  // spracuje kliknutie z CheckBoxu a nastavi hodnotu textu do labelu
      // a schova/zobrazi polia formulara
	  // vysvecovanie textov na labeli CheckBoxu

      if (cb.checked) {
          document.getElementById(label_id).innerHTML  = label_inner_1;         //'Súkromná osoba'

	      if ( container_group_1 ) {
		      document.getElementById(container_group_1).style.display = 'inline';  //'container_sukromna_osoba'
	      }
          if ( container_group_2 ) {
	          document.getElementById(container_group_2).style.display = 'none';//'container_firma'
          }

      } else {
          
          document.getElementById(label_id).innerHTML  = label_inner_2;         //'Firma'

	      if ( container_group_1 ) {
		      document.getElementById(container_group_1).style.display = 'none';    //'container_sukromna_osoba'
	      }

	      if ( container_group_2 ) {
		      document.getElementById(container_group_2).style.display = 'inline';  //'container_firma'
	      }
      }
  }

// vysvecovanie zaplatena zaloha
function handleCbClickVisibility(cb, label_id, label_inner_1, label_inner_2, container_group_1, label_id3, label_inner3) {
// console.log(label_id);  

      if (cb.checked) {
          document.getElementById(label_id).innerHTML  = label_inner_1;
	      document.getElementById(container_group_1).disabled = false;
	      document.getElementById(label_id3).innerHTML  = label_inner3;
      } else {
          
          document.getElementById(label_id).innerHTML  = label_inner_2;
	      document.getElementById(container_group_1).disabled = true;
	      document.getElementById(label_id3).innerHTML  = '';

      }
  }
