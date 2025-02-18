//CARDS
  document.addEventListener("DOMContentLoaded", function() {
    const carouselContainer = document.querySelector('.carousel-container');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const deleteButton = document.getElementById('deleteButton');
    const cardWidth = document.querySelector('.card').offsetWidth;
    let currentIndex = 0;
    const numCards = document.querySelectorAll('.card').length;
  
    // Centraliza o primeiro card ao carregar a página
    centerActiveCard();
  
    nextButton.addEventListener('click', function() {
      if (currentIndex < numCards - 1) { // Verifica se não é o último card
        goToNextCard();
      }
    });
  
    prevButton.addEventListener('click', function() {
      if (currentIndex > 0) { // Verifica se não é o primeiro card
        goToPrevCard();
      }
    });
  
    deleteButton.addEventListener('click', function() {
      const activeCard = document.querySelector('.card.active');
      const nextCard = activeCard.nextElementSibling;
  
      activeCard.remove();
  
      // Se houver um próximo card, torná-lo ativo
      if (nextCard) {
        currentIndex--;
        nextCard.classList.add('active');
      } else {
        currentIndex = Math.max(currentIndex - 1, 0);
      }
  
      centerActiveCard(); // Centraliza o card ativo após a exclusão
    });
  
    function goToNextCard() {
      currentIndex++;
  
      const offset = -currentIndex * cardWidth;
      carouselContainer.style.transform = `translateX(${offset}px)`;
  
      const activeCard = document.querySelector('.card.active');
      activeCard.classList.remove('active');
  
      const nextCard = document.querySelectorAll('.card')[currentIndex];
      nextCard.classList.add('active');
  
      centerActiveCard();
    }
  
    function goToPrevCard() {
      currentIndex--;
  
      const offset = -currentIndex * cardWidth;
      carouselContainer.style.transform = `translateX(${offset}px)`;
  
      const activeCard = document.querySelector('.card.active');
      activeCard.classList.remove('active');
  
      const prevCard = document.querySelectorAll('.card')[currentIndex];
      prevCard.classList.add('active');
  
      centerActiveCard();
    }
  
    function centerActiveCard() {
      const containerWidth = carouselContainer.offsetWidth;
      const activeCardWidth = document.querySelector('.card.active').offsetWidth;
      const offset = (containerWidth - activeCardWidth) / 2;
      carouselContainer.style.transform = `translateX(calc(-${currentIndex * cardWidth}px + ${offset}px))`;
    }
  });
  
  


  //MENU
  document.addEventListener("DOMContentLoaded", function() {
    const openMenuButton = document.getElementById('openMenuButton');
    const closeMenuButton = document.getElementById('closeMenuButton');
    const sidebar = document.getElementById('sidebar');
  
    openMenuButton.addEventListener('click', function() {
      sidebar.classList.add('open'); // Adiciona a classe 'open' para mostrar o menu
    });
  
    closeMenuButton.addEventListener('click', function() {
      sidebar.classList.remove('open'); // Remove a classe 'open' para esconder o menu
    });
  });
  



  //LER MAIS
// LER MAIS
var lerMaisModal = document.getElementById("lerMaisModal");
var overlay = document.getElementById("overlay"); // Obtendo o elemento de overlay

// Obter os links que abrem os modais
var lerMaisLink = document.getElementById("lerMaisLink", "lerMaisLink1", "lerMaisLink2");
// var lerMaisLink = document.getElementById("lerMaisLink1");

// Obter os spans de fechar
var closeButtons = document.querySelectorAll(".close");

// Função para abrir o modal
lerMaisLink.onclick = function(event) {
  event.preventDefault(); // Evitar a ação padrão do link
  lerMaisModal.style.display = "block";
  overlay.style.display = "block"; // Exibe o fundo escuro
}

// lerMaisLink1.onclick = function(event) {
//   event.preventDefault(); // Evitar a ação padrão do link
//   lerMaisModal.style.display = "block";
//   overlay.style.display = "block"; // Exibe o fundo escuro
// }

// lerMaisLink2.onclick = function(event) {
//   event.preventDefault(); // Evitar a ação padrão do link
//   lerMaisModal.style.display = "block";
//   overlay.style.display = "block"; // Exibe o fundo escuro
// }

// Função para fechar os modais ao clicar no botão de fechar (×)
closeButtons.forEach(function(button) {
  button.onclick = function() {
    lerMaisModal.style.display = "none";
    overlay.style.display = "none"; // Oculta o fundo escuro
  }
});

// Função para fechar os modais ao clicar fora deles
window.onclick = function(event) {
  if (event.target == lerMaisModal || event.target == overlay) {
    lerMaisModal.style.display = "none";
    overlay.style.display = "none"; // Oculta o fundo escuro
  }
}


