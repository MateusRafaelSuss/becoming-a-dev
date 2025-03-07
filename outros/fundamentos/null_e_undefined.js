let value
console.log(value) //undefined

value = null  //indica que a variavel não aponta a valor nenhum(nulo)
             //não é possivel utilizar por exemplo:console.log(value.toString()), pois resultara em um erro já que não é possivel converter um valor nu


const product = {}
console.log(product) //undefined, pois não foi definido o preço do produto(valor da variavel)

product.value = 432;
console.log(product);

//para remover o preço do produto, a forma mais correta é utilziar delete.product.value
//para definir que o produto não tem valor nenhum: prduct.value = null

