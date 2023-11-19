// Validação Formulário de Login

const btn = document.querySelector("#btn");
const nome = document.querySelector("#name");
const email = document.querySelector("#email");
const password = document.querySelector("#password");

const mssg = document.querySelector("#mssg");

btn.addEventListener("click", (e) => {
  var nomeValue = nome.value;
  var emailValue = email.value;
  var passwordValue = password.value;

  if (nomeValue === "" || emailValue === "" || passwordValue === "") {
    mssg.innerHTML = "Preencha os Campos!";
    mssg.style.color = "red";

    setTimeout(() => {
      mssg.innerHTML = "";
    }, 2000);

    nome.value = "";
    email.value = "";
    password.value = "";
  }
});

// Validação Fomulário de Cadastro

const btnCadastro = document.querySelector("#btnCadastro");
const nameCadastro = document.querySelector("#nameCadastro");
const emailCadastro = document.querySelector("#emailCadastro");
const passwordCadastro = document.querySelector("#passwordCadastro");
const mssg2 = document.querySelector("#mssg2");

btnCadastro.addEventListener("click", (e) => {
  var nameCadastroValue = nameCadastro.value;
  var emailCadastroValue = emailCadastro.value;
  var passwordCadastroValue = passwordCadastro.value;

  if (
    nameCadastroValue === "" ||
    emailCadastroValue === "" ||
    passwordCadastroValue === ""
  ) {
    mssg2.innerHTML = "Preencha os Campos!";
    mssg2.style.color = "#000";

    setTimeout(() => {
      mssg2.innerHTML = "";
    }, 2000);

    nameCadastro.value = "";
    emailCadastro.value = "";
    passwordCadastro.value = "";
  }
});
