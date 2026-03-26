let total= 0;
 limpar()
    



function adicionar(){

    let produto = document.getElementById('produto').value;
    let quantidade = document.getElementById('quantidade'). value;

    let valor_unitario = produto.split("R$")[1];
    let nome_produto = produto.split("-")[0];
    let valor_parcial = quantidade * valor_unitario;
    let carrinho = document.getElementById('lista-produtos');
    carrinho.innerHTML = carrinho.innerHTML + `<section class="carrinho__produtos__produto">
          <span class="texto-azul">${quantidade}</span> ${nome_produto} <span class="texto-azul">${valor_parcial}</span>
        </section>`
    
    document.getElementById('quantidade').value = '';

    total = total + valor_parcial;
        

    campoTotal = document.getElementById('valor-total' );
    campoTotal.innerHTML = `<span class="texto-azul" id="valor-total">R$${total}</span>`
    
    
    
    
}



function limpar(){

document.getElementById('valor-total' ).innerHTML = `<span class="texto-azul" id="valor-total">R$ 0 </span>`
  
document.getElementById('lista-produtos').innerHTML = `<section class="carrinho__produtos__produto">
          <span class="texto-azul"></span>  <span class="texto-azul"></span>
        </section>`
}