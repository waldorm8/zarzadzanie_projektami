$(document).ready(function() {
 
	$.validator.addMethod("username",function(value,element) {
		return this.optional(element) || /^[a-zA-Z0-9._-]{5,25}$/i.test(value);
	},"Nazwa użytkownika musi mieć od 5 do 25 znaków");
	
	$.validator.addMethod("password",function(value,element){
		return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{5,25}$/i.test(value);
	},"Hasło musi mieć od 5 do 25 znaków");
	
	$.validator.addMethod("password_again",function(value,element){
		return this.optional(element) || /^[A-Za-z0-9!@#$%^&*()_]{5,25}$/i.test(value);
	},"Hasło musi mieć od 5 do 25 znaków");

	$.validator.addMethod("email", function(value, element) {
		return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/i.test(value);
	}, "Wpisz poprawny adres e-mail.");
 
 
	$("#rejestracja").validate({
		rules: {
			email: "required email",
			username: "required username",
			password: "required password",
			password_again: "required password_again"
		},
	});
});