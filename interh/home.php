<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit;
  }

$name = $_SESSION['name'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> A sua plataforma de eventos e projetos universitários! </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logoeach2.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="img/logoeach.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro" style="font-size: 20px; margin-top: -4px;"> Home </a></li>
                    <li><a href="#speakers" style="font-size: 20px; margin-top: -4px;"> Eventos </a></li>
                    <li><a href="#calendar" style="font-size: 20px; margin-top: -4px;"> Calendário </a></li>
                    <li><a href="#contact" style="font-size: 20px; margin-top: -4px;"> Contato </a></li>
                    <li>
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="font-size: 20px; margin-top: -4px;" data-toggle="dropdown">Gerenciar</a>
                        <ul class="dropdown-item">
                          <li><a class="dropdown-item" href="listarCoordenador.php">Coordenadores</a></li>
                          <li><a class="dropdown-item" href="listarProfessor.php">Professores</a></li>
                          <li><a class="dropdown-item" href="listarAluno.php">Alunos</a></li>
                          <li><a class="dropdown-item" href="listarEntidade.php">Entidades</a></li>
                          <li><a class="dropdown-item" href="listarEvento.php">Eventos</a></li>
                        </ul>
                    </li>
                    <li class="buy-tickets"><a style="background-color: white; font-size: 20px;" class="btn btn-primary" ><strong style="color: black;"><?=$name?></strong></a></li>
                    <li class="buy-tickets"><a style="background-color: white; font-size: 20px;" href="./php/logout.php" class="btn btn-primary"><strong style="color: black;">Sair</strong></a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->
    <!-- MODAL ENTRAR -->
    <div class="modal fade" id="modalEntrar" tabindex="-1" role="dialog" aria-labelledby="modalEntrarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEntrarLabel"> Entrar </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="validarLogin.php">
                    <div class="form-group">
                      <label for="email">E-mail:</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu email" required maxlength="100">
                    </div>
                    <div class="form-group">
                      <label for="senha">Senha:</label>
                      <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha" required maxlength="20">
                    </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary botao-vermelho cinza" data-dismiss="modal"> Fechar </button>
                          <button type="submit" class="btn btn-primary btn-lg botao-vermelho" oninvalid=""> Entrar </button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CADASTRAR -->
    <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="modalCadastrarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCadastrarLabel"> Cadastro de aluno </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="./php/dbCadastroAluno.php">
                      <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira seu nome" required maxlength="100">
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu email" required maxlength="100">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua senha" required maxlength="20">
                      </div>
                      <div class="form-group">
                        <label for="confirmarSenha">Confirmar senha:</label>
                        <input type="password" name="confirmarSenha" id="confirmarSenh+a" class="form-control" placeholder="Insira a confirmação da senha" required>
                      </div>
                      <div class="form-group">
                        <label for="numusp">Número USP:</label>
                        <input type="number" name="numusp" id="numusp" class="form-control" placeholder="Insira seu número USP" required  maxlength="8">
                      </div>
                      <div class="form-group">
                        <label for="curso">Curso:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option value="BIO"> Biotecnologia </option>
                          <option value="EFS"> Educação Física e Saúde </option>
                          <option value="GERONTO"> Gerontologia </option>
                          <option value="GA"> Gestão Ambiental </option>
                          <option value="GPP"> Gestão de Políticas Públicas </option>
                          <option value="LZT"> Lazer e Turismo </option>
                          <option value="LCN"> Licenciatura em Ciências da Natureza </option>
                          <option value="MKT"> Marketing </option>
                          <option value="OBS"> Obstetrícia </option>
                          <option value="SI"> Sistemas de Informação </option>
                          <option value="TM"> Têxtil e Moda </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="rg">RG:</label>
                        <input type="text" name="rg" id="rg" class="form-control" placeholder="Insira seu número de RG" required maxlength="12">
                      </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary botao-vermelho cinza" data-dismiss="modal"> Fechar </button>
                            <button type="submit" class="btn btn-primary btn-lg botao-vermelho" oninvalid="">Cadastrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
      <div class="intro-container wow fadeIn">
          <h1 class="mb-4 pb-0"> A sua plataforma de <br><span> eventos universitários</span> </h1>
          <p class="mb-4 pb-0">Facilitando experiências, realizando encontros.</p>
          <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
      data-autoplay="true"></a>--><br>
      </div>
  </section>

    <main id="main">


        <!--==========================
      Speakers Section
    ============================-->
        <section id="speakers" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2 style="margin-top: 1.1em;"> Eventos </h2>
                    <p style="font-size: 24px"> Estes são os eventos com data mais próxima de acontecer </p>

                    <div class="container">
                      <div class="row">

                        <div class="col-sm-12" style="display: flex; margin-left: 39.4%;">
                          <nav id="nav-menu-container">
                              <ul class="nav-menu">
                                  <li class="buy-tickets"><a style="background-color: white;" class="btn btn-primary" data-toggle="modal" data-target="#criarEvento"><strong style="color: black;"> Adicionar novo evento </strong></a></li>
                              </ul>
                          </nav>
                        </div>

                      </div>
                    </div>

                    <div class="modal fade" id="criarEvento" tabindex="-1" role="dialog" aria-labelledby="criarEvento" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="./php/dbCadastroEvento.php">
                              <div class="form-group">
                                <label for="nome_evento">Nome do evento:</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira o nome do evento" required maxlength="100">
                              </div>
                              <div class="form-group">
                                <label for="datai">Data de início:</label>
                                <input type="text" name="datai" id="datai" class="form-control" placeholder="Insira a data de início" required maxlength="100">
                              </div>
                              <div class="form-group">
                                <label for="horai">Hora de início:</label>
                                <input type="text" name="horai" id="horai" class="form-control" placeholder="Insira a hora de início" required maxlength="20">
                              </div>
                              <div class="form-group">
                                <label for="dataf">Data do término:</label>
                                <input type="text" name="dataf" id="dataf" class="form-control" placeholder="Insira a data do término" required maxlength="20">
                              </div>
                              <div class="form-group">
                                <label for="horaf">Hora do término:</label>
                                <input type="text" name="horaf" id="horaf" class="form-control" placeholder="Insira a hora do término" required maxlength="20">
                              </div>
                              <div class="form-group">
                                <label for="descricao">Descrição:</label>
                                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Insira a descrição do evento" required maxlength="12">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Criar</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/logossi.jpg" alt="Speaker 1" class="img-fluid tamanho-imagens">
                            <div class="details">
                                <h3><a href="speaker-details.html">Semana de Sistemas de Informação</a></h3>
                                <p>USP Leste</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/palestrassi.jpg" alt="Speaker 2" class="img-fluid tamanho-imagens">
                            <div class="details">
                                <h3><a href="speaker-details.html">Palestra de IA</a></h3>
                                <p>Anfiteatro</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/comida.jpg" alt="Speaker 3" class="img-fluid tamanho-imagens" style="height: 380px;">
                            <div class="details">
                                <h3><a href="speaker-details.html">Almoço</a></h3>
                                <p>estava muito bom</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/palestra22.jpg" alt="Speaker 4" class="img-fluid tamanho-imagens">
                            <div class="details">
                                <h3><a href="speaker-details.html">Outra Palestra</a></h3>
                                <p>USP Leste</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/profs.jpg" alt="Speaker 5" class="img-fluid tamanho-imagens">
                            <div class="details">
                                <h3><a href="speaker-details.html">Debate Sobre o Futuro da área de TI</a></h3>
                                <p>EACH l1 116</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                            <img src="img/logointerhack.jpg" alt="Speaker 6" class="img-fluid tamanho-imagens">
                            <div class="details">
                                <h3><a href="speaker-details.html">Interhack</a></h3>
                                <p>IME, ICMC, EACH</p>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="calendar" class="wow fadeInUp">
						<img src="img/calendario.png" alt="Speaker 3" class="img-fluid tamanho-imagens" style="height: 80%; margin-left: auto; margin-right: auto; display: block;">
        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2> Contate-nos </h2>
                    <p> Entre em contato para obter o sistema ou para tirar dúvidas! </p>
                </div>


                <div class="form">
                    <div id="sendmessage"> Sua mensagem foi enviada. Obrigado(a)!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome completo" data-rule="minlen:4" data-msg="Por favor, escreva pelo menos 4 caracteres." />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" data-rule="email" data-msg="Por favor, envie um e-mail válido." />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor, escreva pelo menos 8 caracteres de assunto." />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escreva sua mensagem." placeholder="Escreva sua mensagem aqui"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit"> Enviar mensagem </button></div>
                    </form>
                </div>

            </div>
        </section>
        <!-- #contact -->

    </main>


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-info">
                        <img src="img/logoeach.png" alt="TheEvenet">
                        <p>A Escola de Artes, Ciências e Humanidades (EACH - USP), localizada no campus USP Leste e por isso comumente referida assim, é uma unidade de ensino, pesquisa e extensão da Universidade de São Paulo. Foi inaugurada no dia 27 de fevereiro de 2005 e pertence ao segmento leste do campus da Capital da Universidade de São Paulo, estando localizada no distrito de Ermelino Matarazzo, às margens da rodovia Ayrton Senna, ao lado do Parque Ecológico do Tietê e da estação de trem USP Leste da CPTM.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h4> Contate-nos </h4>
                        <p>
                            <strong>Email:</strong> contato@projeto.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</body>

</html>
