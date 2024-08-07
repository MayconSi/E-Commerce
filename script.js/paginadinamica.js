function loadProducts() {
  fetch('../data/products.json')
    .then(response => response.json())
    .then(products => {
      const imagens = document.querySelector(".imagens")
      products.map(product => {
        const content = document.createElement("div")
        content.classList.add("content")

        const img = document.createElement("img");
        img.src = product.img
        img.alt = product.nome

        const title = document.createElement("h3")
        title.classList.add("h3t")
        title.textContent = product.nome

        const description = document.createElement("p")
        description.textContent = product.descricao

        const price = document.createElement("h6")
        price.textContent = "R$" + product.valor

        const button = document.createElement("button")
        button.classList.add(product.button_class != null ? product.button_class : "buy-5")

        const textButton = document.createElement("a")
        textButton.textContent = "Compre Agora"

        button.appendChild(textButton)

        content.onclick = function () {
          var produto = JSON.stringify(product);
          var database = JSON.parse(sessionStorage.getItem('product'));

          if (database != null) {
            sessionStorage.removeItem('product')
          }

          sessionStorage.setItem('product', produto);
          window.location.replace("produtos.php")
        };

        content.appendChild(img)
        content.appendChild(title)
        content.appendChild(description)
        content.appendChild(price)
        content.appendChild(button)

        imagens.appendChild(content);
      })

    })
}

loadProducts();