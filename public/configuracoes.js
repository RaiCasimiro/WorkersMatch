// Obter os modais
var logoutModal = document.getElementById("logoutModal");
var deleteAccountModal = document.getElementById("deleteAccountModal");
var changePasswordModal = document.getElementById("changePasswordModal");
 
// Obter os links que abrem os modais
var logoutLink = document.getElementById("logoutLink");
var deleteAccountLink = document.getElementById("deleteAccountLink");
var changePasswordLink = document.getElementById("changePasswordLink")
 
// Obter os spans de fechar
var closeButtons = document.querySelectorAll(".close");
 
// Função para abrir o modal de logout
logoutLink.onclick = function(event) {
  event.preventDefault(); // Evitar a ação padrão do link
  logoutModal.style.display = "block";
}
 
// Função para abrir o modal de excluir conta
deleteAccountLink.onclick = function(event) {
  event.preventDefault(); // Evitar a ação padrão do link
  deleteAccountModal.style.display = "block";
}
 
changePasswordLink.onclick = function(event){
    event.preventDefault();
    changePasswordModal.style.display = "block";
}
 
// Função para fechar os modais ao clicar no span de fechar (×)
closeButtons.forEach(function(button) {
  button.onclick = function() {
    logoutModal.style.display = "none";
    deleteAccountModal.style.display = "none";
    changePasswordModal.style.display = "none";
  }
});
 
// Função para fechar os modais ao clicar fora deles
window.onclick = function(event) {
  if (event.target == logoutModal || event.target == deleteAccountModal) {
    logoutModal.style.display = "none";
    deleteAccountModal.style.display = "none";
    changePasswordModal.style.display = "none";
  }
}
 
// Ação de logout
var logoutAction = document.getElementById("logoutAction");
logoutAction.onclick = function() {
  // Coloque aqui a lógica para fazer logout
  alert("Você foi deslogado!");
  // Redirecione para a página de login, por exemplo
  // window.location.href = "pagina_de_login.html";
}
 
// Ação de excluir conta
var deleteAccountAction = document.getElementById("deleteAccountAction");
deleteAccountAction.onclick = function() {
  // Coloque aqui a lógica para excluir a conta
  alert("Sua conta foi excluída!");
  // Redirecione para a página inicial, por exemplo
  // window.location.href = "pagina_inicial.html";
}
 
var changePasswordAction = document.getElementById("changePasswordAction");
changePasswordAction.onclick = function(){
    alert("Sua senha foi alterada!");
}
 