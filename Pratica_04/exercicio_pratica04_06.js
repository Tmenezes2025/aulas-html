

function verifique_menor ( n1,n2){
    if (n1>n2){
    return`O numero ${n2} é menor`
    }else if (n1 == n2){
        return ` Os numero são iguais`
    }else{
        return `o numero ${n1} é menor`

    }


}

console.log (verifique_menor( 10,5) )

console.log (verifique_menor( 4,2) )

console.log (verifique_menor( 1,5) )

console.log (verifique_menor( 5,5) )
