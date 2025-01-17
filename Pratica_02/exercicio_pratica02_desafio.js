
function calcularExcessoEPagarMulta(p) {
    // Peso permitido sem multa
    const pesoPermitido = 50; 
    // Valor da multa por quilo excedente
    const valorMultaPorKg = 7.0; 

    let excesso = 0;
    let multa = 0;

 
    if (p > pesoPermitido) {
        excesso = p - pesoPermitido;
        multa = excesso * valorMultaPorKg;
    }

    console.log(`Peso do peixe: ${p} kg`);
    console.log(`Excesso: ${excesso} kg`);
    console.log(`Multa: R$ ${multa.toFixed(2)}`);
}

