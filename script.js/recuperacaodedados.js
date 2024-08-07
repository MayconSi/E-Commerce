function loadPage() {
  //Recuperar dados
  var product = JSON.parse(sessionStorage.getItem('product'));

  const mainImg = document.querySelector(".select-image")
  const img = document.createElement("img")
  img.src = product.img

  mainImg.appendChild(img)

  const content = document.querySelector(".content")

  const title = document.createElement("h1")
  title.textContent = product.nome

  const description = document.createElement("P")
  description.textContent = product.descricao

  const prices = document.createElement("div")
  prices.classList.add("prices")

  const priceText = document.createElement("span")
  priceText.classList.add("preco")
  priceText.textContent = "R$" + product.valor

  const priceOff = document.createElement("span")
  priceOff.classList.add("off")
  priceOff.textContent = "R$250"

  prices.appendChild(priceText)
  prices.appendChild(priceOff)

  content.appendChild(title)
  content.appendChild(description)
  content.appendChild(prices)
}

//Adiciona item no carrinho
function addCartItem() {
  var arrayProducts = [];
  var product = JSON.parse(sessionStorage.getItem('product'));
  var products = JSON.parse(sessionStorage.getItem('cart'));

  if (products !== null && products.length >= 0) {
    products.push(product);
    sessionStorage.removeItem('cart');
    sessionStorage.setItem('cart', JSON.stringify(products));
  } else {
    arrayProducts.push(product);
    sessionStorage.setItem('cart', JSON.stringify(arrayProducts));
  }

//mensagem quando adicioona ou compra o produto
  showMessage('Adicionado ao carrinho com sucesso');
}
function buyNow() {
  showMessage('Compra finalizada com sucesso');
}

function showMessage(message) {
  var successMessage = document.getElementById('success-message');
  successMessage.innerHTML = message;
  successMessage.style.display = 'block';

  setTimeout(function () {
    successMessage.style.display = 'none';
  }, 3000);
}

loadPage();