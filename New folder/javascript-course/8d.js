<script>

function compareProducts(product1,product2){
  if(product1.price>product2.price){
    return product1.name;
  }else{
    return product2.name;
  }
}

const product1={
  name:s24,
  price:1000
}
const product2={
  name:s25,
  price:2000
}
console.log(compareProducts(product1,product2));
</script>