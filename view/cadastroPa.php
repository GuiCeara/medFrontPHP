<?php
  require_once '../config/config.php';
  
  if(isset($_POST['btnCadastrar'])){

    $nome = $_POST['name'];
    $email = $_POST['email']; 
    $telefone = $_POST['phone']; 
    $date = $_POST['date'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep']; 
    $rua = $_POST['rua']; 
    $bairro = $_POST['bairro']; 
    $cidade = $_POST['cidade']; 
    $estado = $_POST['estado'];

    $senha =  sha1(md5($_POST['passW']));
   

    // $cmdSql = "INSERT INTO cadastropa (`nome`, `email`, `cpf`, `data_nasc`, `telefone`, `cep`, `estado`, `senha`,`data_cadastro`) VALUES ('$nome', '$email', '$cpf', '$date', '$telefone', '$cep', '$estado', sha1(md5('$senha')),NOW())";

    $cmdSql = "INSERT INTO cadastropa VALUES (0,:nome, :email, :cpf, :datanasc, :telefone, :cep, :rua, :bairro, :cidade :estado, :senha, NOW())";
    $dados = [

      ':nome' => $nome,
      ':email' => $email,
      ':telefone' => $telefone,
      ':datanasc' => $date,
      ':cpf' => $cpf,
      ':cep' => $cep,
      ':rua' => $rua,
      ':bairro' => $bairro,
      ':cidade' => $cidade,
      ':estado' => $estado,
      ':senha' => $senha
  
    ];
      
    $cxPronta = $cx->prepare($cmdSql);
    $cxPronta->execute($dados);

    
    

    // if($cxPronta->execute){
    //   echo'<div class="alert alert-success" role="alert">
    //       <h4 class="alert-heading">Cadastro</h4>
    //       <p>Sucesso ao cadastrar usuário!!!</p>
    //   </div>';
    // }
    // else{
    //   echo'<div class="alert alert-danger" role="alert">
    //       <h4 class="alert-heading">Cadastro</h4>
    //       <p>Erro ao cadastrar usuário</p>
    //   </div>';
    // }

  }

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MedFront</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contatomedfront@gmail.commedfront@gmail.com</a>
        <i class="bi bi-phone"></i> +55 15 32841240
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.html">MedFront</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">Sobre</a></li>
          <!--<li><a class="nav-link scrollto" href="#services">Serviços</a></li>-->
          <li><a class="nav-link scrollto" href="#duvidas">Duvidas</a></li>
          <li class="dropdown"><a><span>Cadastrar</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#appointment">Cadastro Paciente</a></li>
              <li><a href="../cadastroMed.html#appointment">Cadastro Médico</a></li>
              <li><a href="../cadastroCli.html#appointment">Cadastro Clínica</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="index.html#appointment2" class="appointment-btn scrollto"><span>Faça um</span> Agendamento</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bem vindo ao MedFront</h1>
      <h2>Somos uma equipe prontos para te atender.</h2>
      <a href="index.html#about" class="btn-get-started scrollto">Sobre nós</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Cadastro Paciente</h2>
        </div>

        <form method="POST" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" data-rule="email" data-msg="Por favor digite um email válido" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Seu telefone" data-rule="minlen:4" data-msg="Insira pelo menos 4 caracteres" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Data de nascimento" data-rule="minlen:8" data-msg="Insira pelo menos 8 caracteres" required>
              <div class="validate"></div>
            </div>

            <div class="col-md-4 form-group mt-3">
              <input type="text" name="cpf" class="form-control" id="name" placeholder="CPF" \pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \title="Digite um CPF no formato: xxx.xxx.xxx-xx" data-rule="minlen:11" data-msg="Insira pelo menos 11 caracteres" required>
              <div class="validate"></div>
            </div>
  
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" size="10" maxlength="9"  onblur="pesquisacep(this.value);" data-msg="Informe seu cep corretamente" required>
              <div class="validate"></div>
            </div>

            <div class="col-md-4 form-group mt-3">
                <select name="estado" id="estado"  class="form-select">
                  <option value="">Seu estado</option>
                  <option>Acre (AC)</option>
                  <option>Alagoas (AL)</option>
                  <option>Amapá (AP)</option>
                  <option>Amazonas (AM)></option>
                  <option>Bahia (BA)</option>
                  <option>Ceará (CE)</option>
                  <option>Distrito Federal (DF)</option>
                  <option>Espírito Santo (ES)</option>
                  <option>Goiás (GO)</option>
                  <option>Maranhão (MA)</option>
                  <option>Mato Grosso (MT)</option>
                  <option>Mato Grosso do Sul (MS)</option>
                  <option>Minas Gerais (MG)></option>
                  <option>Pará (PA)</option>
                  <option>Paraíba (PB)</option>
                  <option>Paraná (PR)</option>
                  <option>Pernambuco (PE)</option>
                  <option>Piauí (PI)</option>
                  <option>Rio de Janeiro (RJ)</option>
                  <option>io Grande do Norte (RN)</option>
                  <option>Rio Grande do Sul (RS)</option>
                  <option>Rondônia (RO)</option>
                  <option>Roraima (RR)</option>
                  <option>Santa Catarina (SC)</option>
                  <option>São Paulo (SP)</option>
                  <option>Sergipe (SE)</option>
                  <option>Tocantins (TO)</option>
                </select>
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group mt-3">
                <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua"  size="60" data-msg="Informe sua rua">
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group mt-3">
                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" size="40" data-msg="Informe seu bairro">
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group mt-3">
                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" size="40" data-msg="Informe sua cidade">
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group mt-3">
                <input type="password" name="passW" class="form-control" id="senha" placeholder="Sua senha" data-rule="minlen:1" data-msg="Informa uma senha">
                <div class="validate"></div>
              </div>

              <div class="col-md-4 form-group mt-3">
                <input type="password" name="confirmSenha" class="form-control" id="confirm_password" placeholder="Confirme sua senha" data-rule="minlen:1" data-msg="Informa uma senha">
                <div class="validate"></div>
              </div>
            
          <!--<div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="6" placeholder="Mensagem(Opcional)"></textarea>
            <div class="validate"></div>
          </div>-->
          <!-- <div class="mb-3">
            <div class="loading">Carregando</div>
            <div class="error-message"></div>
            <div class="sent-message">Seu cadastro foi concluído com</div>
          </div> -->
          <button type="submit" name="btnCadastrar">Cadastrar-se</button>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" id="duvidas">
          <h2>Dúvidas Frequentes</h2>
          <p>Algumas dúvidas que são enviadas frequentemente para o nosso site.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Agendamento de Consultas<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  De maneira prática, você vera quais os dias e horários livres de seu médico, e assim, poder fazer seu agendamento.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Falhas e Erros <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Se algo de nosso sistema proporcionar algum tipo de erro, voce pode nos contactar e resolveremos rapidamente como forma de melhorarmos o nosso desempenho.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Disponibilidade <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Nosso site ele é aberto a todo momento e sempre estamos atentos com relação a segurança e renovação de nosso produto.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Acessibilidade<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Você encontra o que precisa de forma simples e prática sem muitas dificuldades.
                </p>
              </div>
            </li>

            <!--<li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>-->

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MedFront</h3>
            <p>
              
              <strong>Phone:</strong> +551532841240<br>
              <strong>Email:</strong> contatomedfront@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">Sobre</a></li>
            <!--<li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>-->
              
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Informações</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#testimonials">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Deixe a sua avaliação</h4>
            <p>Avalie os nossos serviços e o nosso site.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Enviar">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MedFront</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/validade.js"></script>
  <script src="../assets/js/cepAPI.js"></script>
  

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>