let idade = parseInt(prompt ("Digite a sua idade:  "))

document.write(`Sua idade é ${idade}`)

switch (true) {
    case (idade >= 5) && ( idade <=7):
        document.write ("Classificação: infantil  A")
        break
    case (idade >=8) && ( idade <=11):
        document.write ("Classificação: infantil  B")
        break
    case (idade >= 12) && (idade<= 13):
       
         document.write ("Classificação: Juvenil  A")
         break
    case ( idade >= 14) && ( idade <+ 17):
        document.write ("Classifiocacao: Juvenil  B ") 
        break
     case ( idade >= 18):
        document.write ("Classificação: Adulto ") 
        break
    default:
        document.write ("O aluno nao pode ser matriculado ") 


}
