function converteMinutos(minutos) {
    const horas = (minutos / 60) | 0;
    const minutosRestantes = minutos % 60;
    const segundos = minutosRestantes * 60;

    return `${horas} horas, ${minutosRestantes} minutos e ${segundos} segundos`;
}


console.log(converteMinutos(125)); 
console.log(converteMinutos(60));  
console.log(converteMinutos(45));  