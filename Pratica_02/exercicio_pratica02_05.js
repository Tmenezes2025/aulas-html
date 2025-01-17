let velocidade = 80
let velocidade_permitida = 80
let multa = (velocidade - velocidade_permitida) * 5

if (velocidade > 80) {
    multa = (velocidade - velocidade_permitida) * 5
   console.log ("Você foi multado em:" + multa)
}else{
        console.log ("Sua velocidade está ok, boa viagem!")
    }