
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>VL56</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body> 

    <section class="navigation w3-metro-light-blue w3-container">
      <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
      <nav class="nav-container">
        <div class="logo w3-padding-large"> 
          <div><img src="main/logo/logo01-removebg-preview.png" alt="logo"></div>
        </div>
        <div class="mobile-button">
          <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
        </div>
        <div class="links">
          <a href="#about" >SOBRE</a>-
          <a href="#consulting" >SERVIÇOS</a>-
          <a href="#contact" >CONTATO</a>            
        </div>
        <div id="mobile-sidenav" class="mobile-links w3-sand">
          <a href="javascript:void(0)" class="closebtn w3-round" onclick="toggleMobileNavigation()">&times;</a>
          <a href="#about" onclick="toggleMobileNavigation()">Sobre</a>
          <a href="#consulting" onclick="toggleMobileNavigation()">Serviços</a>
          <a href="#contact" onclick="toggleMobileNavigation()">Contato</a>
        </div>
      </nav>
    </section>

    <section class="hero w3-padding-large w3-container">
      <h1 style="display: inline;"><span><i class="fa fa-check-square-o"></i></span> Direcione sua ideia na direção certa!</h1>
      <p>Consultarias confiáveis todos os dias</p>
      <a href="#contact" class="w3-padding-large w3-round">Marque uma consulta</a>
    </section>

    <section class="about w3-padding-large w3-container" id="about">
      <div class="content container w3-round-large">
        <h2 style="text-align: center;">- Nossa missão -</h2>
        <p style="text-align: center;">Para direcionar sua ideia na direção certa.</p>
        <h3 style="text-align: center;">- Sobre -</h3>
        <p>Desde 2018, atuamos com consultoria oferecendo as melhores soluções no mercado, aliando conhecimento e técnica e utilizando da melhor maneira possíveis os recursos disponíveis para provedores de internet.
                            Nossa missão é utilizar a experiência de nosso time para elevar a qualidade dos serviços oferecidos no mercado, ajudando a conectar ideias e pessoas, buscando constante desenvolvimento e aperfeiçoamento. 
                            Desta forma, construímos nossa história com redes de relacionamento baseado em resultado e confiança, crescendo cada vez mais solidificados na qualidade de nosso trabalho e dedicação.</p>
      </div>

      <div class="leadership content container w3-margin-top w3-round-large">
        <h3 style="text-align: center;">- Liderança -</h3>
        <p style="text-align: center;"><em>"Liderança é ser primeiro um servo."</em> <strong>- Allen West</strong></p>
        <div class="l-cards">
          <div class="l-card">
            <div class="circular-portrait">
              <img src="https://spaces.w3schools.com/images/sgZX15Da8YE.jpg" alt="Photo by Shipman Northcutt | Unsplash"/>
            </div>
            <h4><strong>John Alis</strong></h4>
            <p style="margin-top: 0 !important;">CO-FOUNDER & CEO</p>
            <div class="icons">
              <a href="" target="_blank"><span><i class="fa fa-facebook-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-linkedin-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="l-card">
            <div class="circular-portrait">
              <img src="https://spaces.w3schools.com/images/OQ6DP54awvw.jpg" alt="Photo by Remi Turcotte | Unsplash"/>
            </div>
            <h4><strong>Joe Doe</strong></h4>
            <p style="margin-top: 0 !important;">CO-FOUNDER & CEO</p>
            <div class="icons">
              <a href="" target="_blank"><span><i class="fa fa-facebook-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-linkedin-square"></i></a>
              <a href="" target="_blank"><span><i class="fa fa-address-card"></i></a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials w3-container w3-panel" style="padding: 50px;">
      <h2 style="text-align: center;">- Algumas de nossas histórias de clientes -</h2>
      <div class="slideshow-container">

      <div class="mySlides">
        <p><q><em>A equipe da VL56 Consultorias impulsionou meu negócio em 100% em apenas 6 meses! A experiência deles ajudou a mim e à minha empresa a crescer além do que pensei ser possível.</em></q></p>
        <p class="author"><strong>- Karol Betriaz, Founder of COMPANY-X</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>A VL56 Consultorias me ajudou a lançar minha ideia em apenas 3 meses! Se não existisse a equipe da VL56 Consultorias provavelmente eu não teria sucesso.</em></q></p>
        <p class="author"><strong>- Anne Johnson, Founder of COMPANY-Y</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>A equipe da VL56 Consultorias irá ajudá-lo a direcionar sua ideia na direção certa, reduzindo todos os riscos que você pode encontrar por conta própria! Eles certamente fizeram o meu.</em></q></p>
        <p class="author"><strong>- Dean Doe, Founder of COMPANY-Z</strong></p>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      </div>

      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>      
    </section>

    <section id="consulting" class="w3-container container consulting content">
      <h2 style="text-align: center;">- O que nós fazemos -</h2>
      <div class="c-card w3-margin-top">
        <p>Oferecemos conselhos sobre como desenvolver e adaptar com sucesso suas ideias de negócios</p>
      </div>
      <div class="c-card c-card-right w3-margin-top">
        <p>Implementamos estratégias para identificar riscos de negócio</p>
      </div>
      <div class="c-card w3-margin-top">        
        <p>Recomendamos as medidas necessárias para reduzir ou até mesmo remover completamente os riscos comerciais</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>Trazemos ideias inovadoras para renova um negócio</p>
      </div>
      <div class="c-card w3-margin-top">
        <p>Realizamos análises para reduzir seu custo financeiros</p>
      </div>
      <div class="c-card  c-card-right w3-margin-top">
        <p>Fornecemos a você um roteiro depois de realizarmos negócios</p>
      </div>
    </section>

    <section class="w3-panel w3-container content why-us" style="padding: 50px;">
      <h2 style="text-align: center;">- Porque escolher-nos? -</h2>
      <div class="container boxes">
        <div class="box w3-round-large">
          Mais de 15 anos de experiência
        </div>
        <div class="box w3-round-large">
          Mais de 1000 consultas
        </div>
        <div class="box w3-round-large">
          Clientes satisfeitos
        </div>
        <div class="box w3-round-large">
          100% seguro
        </div>
        <div class="box w3-round-large" style="background-color: rgb(153, 255, 187);">
          Conquistamos a confiança no mercado de trabalho
        </div>
      </div>
    </section>

    <section class="contact w3-container contact" id="contact">
      <div class="short-contact">
        <h2>- Nossas informações de contato - </h2>
        <div class="w3-large contact-info">
          <i class="fa fa-address-card"></i><span style="margin-left:10px;"><a href="https://www.google.com/maps/place/Timba%C3%BAba" target="_blank">Timbaúba, PE</a></span><br>
          <i class="fa fa-envelope"></i><span style="margin-left:10px;"><a href="https://#">vl56fmelo@gmail.com</a></span><br>
          <i class="fa fa-whatsapp"></i><span style="margin-left:10px;"><a href="https://wa.me/5581981795111?text=Ola+gostaria+de+conhecer+seu+servicos">+55 81 98179-5111</a></span><br>
        </div>

        <h3 class="w3-margin-top">- Siga-nos </h3>
        <div class="w3-large contact-info">
          <i class="fa fa-instagram"></i><span style="margin-left:10px;"><a href="https://instagram.com/vl56consultorias" target="_blank" style="text-decoration: none;">Instagram</a></span><br>
          <i class="fa fa-facebook"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;"> Facebook</a></span><br>
          <i class="fa fa-twitter"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;">Twitter</a></span><br>
        </div>
      </div>
      <div class="form w3-margin-top">
        <div class="container w3-round-xlarge">
          <form class="w3-highway-blue w3-padding-large w3-round-large">
            <h3 style="text-align: center;"><i class="fa fa-check-square-o" style="font-size: 15px;"></i>Agendar uma reunião</h3>
            <label for="fname">Seu noma</label>
            <input type="text" id="name" name="name" placeholder="Your name">
            <label for="lname">Seu email</label>
            <input type="text" id="email" name="email" placeholder="Your email">
            <label for="lname">Escolha uma data</label><br>
            <input type="date" id="date" name="date" placeholder="Your date"><br><br>
            <label for="subject">Assunto</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            <p>Ao enviar este formulário, você concorda com nossas <a href="politicalgpd.html" target="_blank">Política de privacidade</a></p><br>
            <input class="w3-round-large" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </section>

    <section class="w3-container footer">
      <p class="w3-center logo">© 2024 - VL56 Consultorias - All rights reserved</p>
    </section>


  <script async>
      const backToTop = document.getElementById("back-to-top");

      function toggleMobileNavigation() {
        const mobileNavigation = document.getElementById("mobile-sidenav");
        mobileNavigation.classList.toggle('mobile-links-active');
      }

      function goToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      function scroll() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) backToTop.style.display = "block";
        else backToTop.style.display = "none";
      }

      window.onscroll = function() {scroll()};
  </script>
  <script async>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      }
  </script>
  </body>
</html>