const pessoa = {
    nome: 'Ana',
    idade: 16,
    endereco:{
        logradouro: 'xique xique',
        numero: 333
    }
}
const { nome , idade } = pessoa;
console.log(nome, idade);

//destructuring de array
const [a] = [10];
console.log(a);

const [n1 , n2 , n3 , n4] = [9 , 88 , 7 , 123]
console.log(n1, n2, n3, n4,)

//

const [, [, nota]] = [[, 8 , 8], 9, 6, 8];
console.log(nota);