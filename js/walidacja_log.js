$(document).ready(function() {
 
	$.validator.addMethod("username",function(value,element) {
		return this.optional(element) || /^[a-zA-Z0-9._-]{5,25}$/i.test(value);
	},"Nazwa u¿ytkownika musi mieæ od 5 do 25 znaków");
	
	$.validator.addMethod("password",function(value,element){
		return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{5,25}$/i.test(value);
	},"Has³o musi mieæ od 5 do 25 znaków");

$("#logowanie").validate({
		rules: {
			username: "required username",
			password: "required password",
		},
	});
});