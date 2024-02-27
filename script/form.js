function sendMessage() {
    const message = document.getElementById('message').value;
  
    // Aqui você pode implementar a lógica para enviar a mensagem para o Telegram
    // Pode ser feito através de uma API ou outro método de integração com o Telegram
    // Neste exemplo, apenas exibiremos a mensagem no console.
    console.log('Mensagem enviada para o Telegram:', message);
  
    // Limpar o campo de mensagem após o envio
    document.getElementById('message').value = '';
  }
  