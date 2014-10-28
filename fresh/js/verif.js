	function verifMail(strEmail)	{
		var error;
			re = new RegExp("^([0-9a-zA-Z-_.]+)(@{1})([0-9a-zA-Z-_.]+)([.]{1})([a-zA-Z]{2,4})$");
		
		//if(jQuery.trim(strEmail) == ''){ return false;}
		if (!re.test(strEmail)) { //expression reguliere qui check si tous les caracteres saisis sont valides pour un email
			return false;
		} else {
			var cpt = 0;
			var arob = strEmail.indexOf("@", cpt);
			while (strEmail.indexOf(".", cpt) != -1) {
				strTemp = strEmail.indexOf(".", cpt);
				if ((strTemp == 0) || (strTemp == cpt) || (strTemp == arob -1) || (strTemp == arob +1)) {
					error = "erreur";
					break; 
				} 
				cpt = strTemp + 1;
			}
			
			if (error){
				return false;
			}
			else{
				return true;
			}
		}
	}

	function verifCP(field) {
		var valid = "0123456789-";
		var hyphencount = 0;

		if (field.length!=5 && field.length!=5) {
		return false;
		}

		for (var i=0; i < field.length; i++) {
			temp = "" + field.substring(i, i+1);

			if (temp == "-") hyphencount++;
			if (valid.indexOf(temp) == "-1") {
			return false;
			}
		}

	return true;
	}

	function verifPhone(field) {
		var valid = "0123456789-";
		var hyphencount = 0;

		if (field.length!=10 && field.length!=10) {
		return false;
		}

		for (var i=0; i < field.length; i++) {
			temp = "" + field.substring(i, i+1);

			if (temp == "-") hyphencount++;
			if (valid.indexOf(temp) == "-1") {
			return false;
			}
		}

	return true;
	}
	

	function verif()
    	{

		   if (document.inscription.civilite && document.inscription.civilite.value == '')
	       {
	           alert("Veuillez preciser Mr, Mme ou Mlle.");
	           return false;
	       }					
		   
	       if (document.inscription.nom && document.inscription.nom.value == '' )
	       {
	           alert ("Veuillez indiquer votre nom.");
	           return false;
	       } 


		   if (document.inscription.cp && document.inscription.cp.value == '')
		   {
				alert("Veuillez indiquer votre code postal");
				return false;
		   }

		   if (document.inscription.cp && !verifCP(document.inscription.cp.value))
		   {
				alert("Veuillez renseigner un Code postal valide");
				return false;
		   }
		   /*
		   if (document.inscription.ville.value == '')
	       {
	           alert("Veuillez indiquer votre Ville de residence.");
	           return false;
	       }*/
		   

	       if (document.inscription.email && document.inscription.email.value.toString() == '' )
	       {
	           alert ("Veuillez indiquer votre adresse e-mail.");
	           return false;
	       }
		   
	       if (document.inscription.email && !verifMail(document.inscription.email.value))
	       {
	           alert ("Veuillez saisir une adresse E-mail valide.");
	           return false;
	       }  	

		   if (document.inscription.tel && document.inscription.tel.value == '' )
			{
			   alert ("Un numero de telephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && document.inscription.tel.value == '0000000000' )
			{
			   alert ("Un numero de telephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && document.inscription.tel.value == '0600000000' )
			{
			   alert ("Un numero de telephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && document.inscription.tel.value == '0100000000' )
			{
			   alert ("Un numero de telephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && document.inscription.tel.value == '0666666666' )
			{
			   alert ("Un numero de telephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && document.inscription.tel.value == '0111111111' )
			{
			   alert ("Un numÃ©ro de tÃ©lephone valide est necessaire pour vous recontacter.");
	           return false;
			}
			
		   if (document.inscription.tel && !verifPhone(document.inscription.tel.value)) 
		   { 
				alert("Un nume©ro de telephone valide est necessaire pour vous recontacter"); 
				return false;	
		   }					   
		   
		   if (document.inscription.annee && document.inscription.annee.value == '')
	       {
	           alert("Veuillez indiquer votre annee de naissance.");
	           return false;
	       }
		   
		   if (document.inscription.impots && document.inscription.impots.value == '')
	       {
	           alert("Veuillez indiquer votre tranche d impots annuelle.");
	           return false;
	       }	
		   
		   return true;

		   
    	}


