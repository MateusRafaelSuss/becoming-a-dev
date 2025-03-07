//armazenando funções dentro de uma variável
const imprimirSoma = function(a , b){
    console.log(a + b);
}
imprimirSoma(2 , 3);

//Armazenando uma função arrow em uma variável
const soma = (a , b) => {
    return a + b;
}
console.log(soma(4,2));

//return implicito

const subtracao = (a , b) => a - b; 
console.log(subtracao(4, 2));
                                     /*sem chaves indica que a função tem uma
                                     única linha*/