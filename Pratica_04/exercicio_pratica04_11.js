function converteSegundos(segundos) {
    const horas = (segundos / 3600) | 0; 
    const minutosRestantes = ((segundos % 3600) / 60) | 0; 
    const segundosRestantes = segundos % 60; 

    return `${horas} horas, ${minutosRestantes} minutos e ${segundosRestantes} segundos`;
}


console.log(converteSegundos(3665)); 
console.log(converteSegundos(3600)); 
console.log(converteSegundos(59));   