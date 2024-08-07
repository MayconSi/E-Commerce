document.getElementById("cadastroForm").addEventListener("submit", function(event) {
    var emailInput = document.getElementById("email");
    var emailError = document.getElementById("emailError");

    emailError.textContent = "";

    if (emailInput.value === "") {
        emailError.textContent = "Por favor, insira seu email.";
        event.preventDefault();
    }
});
// Função para validar a senha e a confirmação de senha
function validatePassword() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let passwordError = document.getElementById('passwordError');
  
    let lowercaseRegex = /[a-z]/;
    let uppercaseRegex = /[A-Z]/;
    let specialCharacterRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
  
    if (password.length < 6) {
      passwordError.textContent = 'A senha deve ter pelo menos 6 caracteres.';
      return false;
    } else if (!lowercaseRegex.test(password) || !uppercaseRegex.test(password) || !specialCharacterRegex.test(password)) {
      passwordError.textContent = 'Inclua letras maiúsculas, minúsculas, números e caracteres especiais..';
      return false;
    } else if (password !== confirmPassword) {
      passwordError.textContent = 'As senhas não coincidem.';
      return false;
    } else {
      passwordError.textContent = '';
      return true;
    }
  }
  
  document.getElementById('password').addEventListener('blur', validatePassword);
  document.getElementById('confirmPassword').addEventListener('blur', validatePassword);
  
  function validateForm() {
    return validatePassword();
  }
  
  document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    if (!validateForm()) {
      event.preventDefault();
    }
  });
  document.querySelector('#nome').addEventListener('blur', function() {
    var nomeInput = this.value.trim(); // Remove espaços em branco no início e no final do nome
    var nomeErro = document.querySelector('#nomeErro');
    
    if (nomeInput === '') {
        nomeErro.textContent = 'Por favor, insira seu nome.'; // Mensagem de erro para campo vazio
        nomeErro.style.display = 'block';
    } else if (nomeInput.length > 16) {
        nomeErro.textContent = 'O nome não pode ter mais de 16 caracteres.'; // Mensagem de erro para nome muito longo
        nomeErro.style.display = 'block';
    } else if (!/^[A-Za-z\s]+$/.test(nomeInput)) {
        nomeErro.textContent = 'O nome não pode conter caracteres especiais.'; // Mensagem de erro para caracteres especiais
        nomeErro.style.display = 'block';
    } else {
        nomeErro.style.display = 'none'; // Oculta a mensagem de erro se o campo estiver preenchido e dentro do limite de caracteres
    }
});