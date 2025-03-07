//função sem retorno
function soma (a , b){
    console.log(a + b);  //função definida
}

soma(2 , 2); //função chamada

//função com retorno
function soma2 (a , b = 0){
    return (a + b);
}
console.log(soma2(2, 3));