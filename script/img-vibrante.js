const imagem = document.getElementById('minhaImagem,minhaImagem-01');

imagem.addEventListener('mouseenter', () => {
  imagem.style.filter = 'saturate(150%) contrast(120%) brightness(110%)';
});

imagem.addEventListener('mouseleave', () => {
  imagem.style.filter = 'none'; // Retorna ao estado original quando o mouse sai da imagem
});
