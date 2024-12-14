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
  