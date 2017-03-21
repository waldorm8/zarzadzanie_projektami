$(document).ready(function() {
 
	$.validator.addMethod("username",function(value,element) {
		return this.optional(element) || /^[a-zA-Z0-9._-]{5,25}$/i.test(value);
	},"Nazwa u�ytkownika musi mie� od 5 do 25 znak�w");
	
	$.validator.addMethod("password",function(value,element){
		return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{5,25}$/i.test(value);
	},"Has�o musi mie� od 5 do 25 znak�w");

$("#logowanie").validate({
		rules: {
			username: "required username",
			password: "required password",
		},
	});
});