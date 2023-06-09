// Obtém o elemento do ano no rodapé
var yearElement = document.getElementById("year");

// Obtém o ano atual
var currentYear = new Date().getFullYear();

// Atualiza o texto do elemento com o ano atual
yearElement.innerText = currentYear;
