function loadProducts() {
  const products = JSON.parse(sessionStorage.getItem('cart')) || [];

  console.log(products.length);

  const imagens = document.querySelector(".card-body");
  imagens.innerHTML = '';  // Limpa o conteúdo antes de adicionar

  products.forEach(product => {
    // Cria container
    const content = document.createElement("div");
    content.classList.add("row", "mb-3");

    // Cria div da imagem
    const productImageDiv = document.createElement("div");
    productImageDiv.classList.add("col-md-3");

    // Cria imagem
    const image = document.createElement("img");
    image.classList.add("img-fluid");
    image.src = product.img;
    image.alt = product.nome;

    // Adiciona imagem a div
    productImageDiv.appendChild(image);

    // Adiciona a div da imagem no container
    content.appendChild(productImageDiv);

    // Cria descrição
    const divDescription = document.createElement("div");
    divDescription.classList.add("col-md-6");

    // Cria nome do produto
    const nome = document.createElement("h5");
    nome.textContent = product.nome;

    // Cria descrição do produto
    const description = document.createElement("p");
    description.textContent = product.descricao;

    // Adiciona nome e descrição na div
    divDescription.appendChild(nome);
    divDescription.appendChild(description);

    // Adiciona div de descrição no container
    content.appendChild(divDescription);

    // Cria div valor
    const divPrice = document.createElement("div");
    divPrice.classList.add("col-md-3", "text-right");

    // Cria valor do produto
    const productValue = document.createElement("p");
    productValue.textContent = `R$${product.valor}`;

    // Cria botão para remover o produto
    const productButton = document.createElement("button");
    productButton.classList.add("btn", "btn-danger", "btn-sm");
    productButton.textContent = "Remover";

    // Remover item do carrinho
    productButton.onclick = function () {
      removeProductFromCart(product.descricao);
    };

    // Adiciona valor e botão na div do preço
    divPrice.appendChild(productValue);
    divPrice.appendChild(productButton);

    // Adiciona div do preço no container
    content.appendChild(divPrice);

    // Adiciona o container na div principal
    imagens.appendChild(content);
  });

  // Valor total
  let total = 0;
  products.forEach(p => {
    total += p.valor;
  });

  const precoQuant = document.querySelector(".pre-quant");
  precoQuant.innerHTML = '';  // Limpa o conteúdo antes de adicionar

  // Cria preço
  const preco = document.createElement("p");
  preco.textContent = `Produtos: ${products.length}`;

  // Cria quantidade
  const quant = document.createElement("p");
  quant.textContent = `Total: R$${total.toFixed(2)}`;

  // Adiciona o preço e quantidade na div
  precoQuant.appendChild(preco);
  precoQuant.appendChild(quant);

  // Atualiza a quantidade do carrinho
  updateCartCount();
}

function updateCartCount() {
  const products = JSON.parse(sessionStorage.getItem('cart')) || [];
  document.querySelector('.cart-count').textContent = products.length;
}

function removeProductFromCart(productDescription) {
  const products = JSON.parse(sessionStorage.getItem('cart')) || [];
  const productsFiltered = products.filter(p => p.descricao !== productDescription);

  sessionStorage.setItem('cart', JSON.stringify(productsFiltered));
  loadProducts();
  updateCartCount();
}

document.addEventListener('DOMContentLoaded', () => {
  loadProducts();
});
