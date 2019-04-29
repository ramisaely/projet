window.onload=function(){
	var nom= document.getElementById('nom')
	var prenom=document.getElementById('prenom')
	var age= document.getElementById('selection')
	var homme= document.getElementById('mal')
	var femme= document.getElementById('fem')
	document.getElementById("enr").addEventListener('submit',function(affiche){
		if (homme.checked) {
			alert('Nom:  '+nom.value+'\n\nPrenom:  '+prenom.value+'\n\nAge:  '+age.value+'\n\nGenre:  '+homme.value)  

		}else if (femme.checked) {

			alert('Nom:  '+nom.value+'\n\nPrenom:  '+prenom.value+'\n\nAge:  '+age.value+'\n\nGenre:  '+femme.value)

		}else{

			alert("Veuiller completer le formulaire")
			}
	})
}

