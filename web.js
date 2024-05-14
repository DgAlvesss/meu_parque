
//Script de Fuso Horarios
const dataAtual = new Date();
const options = { timeZone: 'America/Sao_Paulo' };
      const dataHoraBrasil = dataAtual.toLocaleString('pt-BR', options);

//Mudando a cor do Texto com JavaScript
var elemento = document.getElementById("frase");
elemento.style.color = "white"