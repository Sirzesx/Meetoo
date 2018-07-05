
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
	document.getElementById("prevBtn").style.display = "none";
  } else {
	document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
	document.getElementById("nextBtn").innerHTML = "Confirmer";
	if(formIsValid())
		document.getElementById("nextBtn").disabled = false;
	else
		document.getElementById("nextBtn").disabled = true;
  } else {
	document.getElementById("nextBtn").innerHTML = "Suivant";
	document.getElementById("nextBtn").disabled = false;
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  ///////////////////////////////////////if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
	//...the form gets submitted:
		document.getElementById("regForm").submit();
		return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

/*function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
	// If a field is empty...
	if (y[i].value == "") {
	  // add an "invalid" class to the field:
	  y[i].className += " invalid";
	  // and set the current valid status to false:
	  valid = false;
	}
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
	document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}*/

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
	x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function formIsValid() {
    /*var nom = document.getElementById("nom").value;
	var prenom = document.getElementById("prenom").value;
	var pseudo = document.getElementById("pseudo").value;
	var dateN = document.getElementById("dateN").value;
	var mdp = document.getElementById("password").value;
	var cMdp = document.getElementById("passwordConfirmation").value;
	var email = document.getElementById("email").value;
	var cEmail = document.getElementById("emailConfirmation").value;
    if (x != "") {
        alert("Name must be filled out");
        return false;
    }*/
	var fields = ["nom", "prenom", "pseudo", "dateN", "password", "passwordConfirmation", "email", "emailConfirmation"]

	var i, l = fields.length;
	var fieldname;
	for (i = 0; i < l; i++) {
		fieldname = fields[i];
		if (!($("#"+ fieldname).hasClass("champ-valide"))) {
			return false;
		}
	}
	return true;
}

$("#pseudo").keyup(function(e)
{
	console.log()
	if(e.target.value == ""){
		$("#pseudo-dispo").text("");
		$("#pseudo").removeClass("champ-valide");
	}
	else {
		jQuery.ajax({
			type: 'POST',
			url: "http://localhost/Meetoo/function.php",
			data: {ps: e.target.value, functionName : 'verifPseudo'},
			success: function(result) {
					$("#pseudo-dispo").html(result);
					$("#pseudo").addClass("champ-valide");
			}
		});
	}
});

$("#email").keyup(function(e)
{
	if(!(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e.target.value))){
		$("#email").removeClass("champ-valide");
		$("#email").addClass("champ-invalide");
	}
	else{
		$("#email").removeClass("champ-invalide");
		$("#email").addClass("champ-valide");
	}
});

$("#emailConfirmation").keyup(function(e)
{
	if(!(e.target.value == $("#email").val())){
		$("#emailConfirmation").removeClass("champ-valide");
		$("#emailConfirmation").addClass("champ-invalide");
	}
	else{
		$("#emailConfirmation").removeClass("champ-invalide");
		$("#emailConfirmation").addClass("champ-valide");
	}
});

$("#password").keyup(function(e)
{
	if(e.target.value == "")
		$("#password").removeClass("champ-valide");
	else
		$("#password").addClass("champ-valide")
	
});

$("#passwordConfirmation").keyup(function(e)
{
	if(!(e.target.value == $("#password").val())){
		$("#passwordConfirmation").removeClass("champ-valide");
		$("#passwordConfirmation").addClass("champ-invalide");
	}
	else{
		$("#passwordConfirmation").removeClass("champ-invalide");
		$("#passwordConfirmation").addClass("champ-valide");
	}
});

$("#dateN").focusout(function(e)
{
	if(/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(e.target.value)){
		$("#dateN").addClass("champ-invalide");
		$("#dateN").removeClass("champ-valide");
	}
	else{
		$("#dateN").addClass("champ-valide");
		$("#dateN").removeClass("champ-invalide");
	}
});

$("#prenom").keyup(function(e)
{
	if(!(/^[A-Za-z\s]+$/.test(e.target.value))){
		$("#prenom").removeClass("champ-valide");
		$("#prenom").addClass("champ-invalide");
	}
	else{
		$("#prenom").removeClass("champ-invalide");
		$("#prenom").addClass("champ-valide");
	}
});

$("#nom").keyup(function(e)
{
	if(!(/^[A-Za-z\s]+$/.test(e.target.value))){
		$("#nom").removeClass("champ-valide");
		$("#nom").addClass("champ-invalide");
	}
	else{
		$("#nom").removeClass("champ-invalide");
		$("#nom").addClass("champ-valide");
	}
});

$("input").keyup(function(e)
{
	if(formIsValid()){
		document.getElementById("nextBtn").disabled = false;
	}
	else{
		document.getElementById("nextBtn").disabled = true;
	}
});