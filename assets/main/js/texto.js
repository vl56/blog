document.addEventListener('DOMContentLoaded', function() {
    const text = document.getElementById('falling-text');
    const letters = text.innerText.split('');
  
    text.innerHTML = '';
  
    letters.forEach((letter, index) => {
      const span = document.createElement('span');
      span.textContent = letter;
      span.style.animationDelay = `${index * 0.1}s`;
      text.appendChild(span);
    });
  });
  