let nome_cliente = "Tiago Menezes"
let saldo = 500
let credito = 100
let debito = 500
let saldo_atual = (saldo - debito) + credito
if  (saldo_atual >= 0){
    console.log ( "Saldo da conta positivo")

}else {
    console.log ( "Saldo da conta Negativo")
}