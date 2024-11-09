const radios = document.querySelectorAll('input[type="radio"]');
const navButtons = document.querySelectorAll('.nav-btn');

let currentIndex = 0;
let autoPlayInterval;

function goToSlide(index) {
  if (index >= radios.length) {
    currentIndex = 0; 
  } else if (index < 0) {
    currentIndex = radios.length - 1;
  } else {
    currentIndex = index;
  }

  radios[currentIndex].checked = true;
  navButtons.forEach(button => button.classList.remove('active'));
  navButtons[currentIndex].classList.add('active');
}
navButtons.forEach(button => {
  button.addEventListener('click', (e) => {
    const index = parseInt(e.target.getAttribute('data-slide'));
    goToSlide(index);
  });
});
function startAutoPlay() {
  autoPlayInterval = setInterval(() => {
    goToSlide(currentIndex + 1);
  }, 5000); 
}

function stopAutoPlay() {
  clearInterval(autoPlayInterval);
  startAutoPlay();
}

goToSlide(currentIndex);
startAutoPlay();