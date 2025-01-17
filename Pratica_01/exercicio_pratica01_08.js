let euro, dolar, franco, real;
euro = 6.10;
dolar = 5.68;
franco = 6.49;
real = prompt('Quantos reais deseja fazer o cambio? ');

console.log('Em Euro, com ' + real + ' reais, vocë compra ' + (real / euro).toFixed(2) + ' euros');
console.log('Em Dolar, com ' + real + ' reais, vocë compra ' + (real / dolar).toFixed(2) + ' dolar');
console.log('Em Franco, com ' + real + ' reais, vocë compra ' + (real / franco).toFixed(2) + ' francos');
