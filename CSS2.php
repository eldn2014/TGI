<?php
include("./assets/PHP/Protect.php");
include("./assets/PHP/Conexao.php");

    $Controle = intval($_SESSION["idStatus"]);
    $idconta = intval($_SESSION['ID_conta']);
  
  if (isset($_POST['BTN01'])) {



      if( $Controle > 2){

        $update = "UPDATE users_status SET Status_curso = ( $Controle - 1)  WHERE ID_conta =  $idconta ;";
        $Select = "SELECT u.ID_conta,e.StatusPossiveis FROM `users_status` u 
                RIGHT join validação_status as e on e.ID_Status = u.Status_curso
                where ID_conta = $idconta";

        $mysqli->query($update) or die("Falha na execução do codigo SQL: " . $mysqli->error);
        $_SESSION["idStatus"]= $Controle - 1;

        $atual = $mysqli->query($Select);
        $user = $atual->fetch_assoc();
        $_SESSION["Status_curso"] = $user['StatusPossiveis'];

        header("Location: CSS1.php");

      }

      else{ header("Location: painel.php");}

  }
  elseif(isset($_POST['BTN02'])){

    $update = "UPDATE users_status SET Status_curso = ( $Controle + 1)  WHERE ID_conta =  $idconta ;";
        $Select = "SELECT u.ID_conta,e.StatusPossiveis FROM `users_status` u 
                RIGHT join validação_status as e on e.ID_Status = u.Status_curso
                where ID_conta = $idconta";

        $mysqli->query($update) or die("Falha na execução do codigo SQL: " . $mysqli->error);
        $_SESSION["idStatus"]= $Controle + 1;

        $atual = $mysqli->query($Select);
        $user = $atual->fetch_assoc();
        $_SESSION["Status_curso"] = $user['StatusPossiveis'];

        header("Location: CSS3.php");

      }

?>

<!DOCTYPE html>
<html lang="PT_br">

<head>
  <meta charset="utf-8">
  <title>CSS2</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/CSS/Style_painel.css">
  <script src="jquery/jquery-3.5.1.min.js"></script>


</head>

<body>



  <nav class="sidebar">

    <div class="sidebar-top-wrapper">


      <div class="sidebar-top">
        <a href="painel.php" class="logo__wrapper">
          <img src="assets/imagens/logo.png" width="150" height="150" alt="Logo" class="logo-small">
          <span class="hide company-name">
            kodano
          </span>
        </a>
      </div>


      <button class="expand-btn" type="button">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="exp-btn" role="img">
          <title id="exp-btn">Expand/Collapse Menu</title>
          <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>


    </div>


    <div class="sidebar-links">

      <ul>


        <li>
          <a title="HTML" class="tooltip">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 108.35 122.88" style="enable-background:new 0 0 108.35 122.88" xml:space="preserve">
              <style type="text/css">
                .st0 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #E44D26;
                }

                .st2 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #EBEBEB;
                }

                .st3 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #FFFFFF;
                }
              </style>
              <polygon class="st0" points="108.35,0 98.48,110.58 54.11,122.88 9.86,110.6 0,0 108.35,0" />
              <path class="st2" d="M34.99,36.17h19.19V22.61H20.16l0.32,3.64l3.33,37.38h30.35V50.06H36.23L34.99,36.17L34.99,36.17L34.99,36.17z M38.04,70.41H24.43l1.9,21.3l27.79,7.71l0.06-0.02V85.29l-0.06,0.02l-15.11-4.08L38.04,70.41L38.04,70.41L38.04,70.41z" />
              <path class="st3" d="M54.13,63.63h16.7l-1.57,17.59L54.13,85.3v14.11l27.81-7.71l0.2-2.29l3.19-35.71l0.33-3.64H54.13V63.63 L54.13,63.63z M54.13,36.14v0.03h32.76l0.27-3.05l0.62-6.88l0.32-3.64H54.13V36.14L54.13,36.14L54.13,36.14z" />
            </svg>
            <span class="link hide">HTML</span>
            <span class="tooltip__content">HTML</span>
          </a>
        </li>



        <li>
          <a href="#CSS" title="CSS" onclick="TextosCSS(<?php echo $Controle ?>)" class="tooltip active" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 296297 333333" xmlns:xlink="http://www.w3.org/1999/xlink" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
              <defs>
                <linearGradient id="id4" gradientUnits="userSpaceOnUse" x1="54128.7" y1="79355.5" x2="240318" y2="79355.5">
                  <stop offset="0" stop-color="#e8e7e5" />
                  <stop offset="1" stop-color="#fff" />
                </linearGradient>

                <linearGradient id="id5" gradientUnits="userSpaceOnUse" x1="62019.3" y1="202868" x2="233515" y2="202868">
                  <stop offset="0" stop-color="#e8e7e5" />
                  <stop offset="1" stop-color="#fff" />
                </linearGradient>

                <linearGradient id="id6" gradientUnits="userSpaceOnUse" x1="104963" y1="99616.9" x2="104963" y2="171021">
                  <stop offset="0" stop-color="#d1d3d4" />
                  <stop offset=".388" stop-color="#d1d3d4" />
                  <stop offset="1" stop-color="#d1d3d4" />
                </linearGradient>

                <linearGradient id="id7" gradientUnits="userSpaceOnUse" xlink:href="#id6" x1="194179" y1="61185.8" x2="194179" y2="135407" />

                <mask id="id0">
                  <linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="104963" y1="99616.9" x2="104963" y2="171021">
                    <stop offset="0" stop-opacity="0" stop-color="#fff" />
                    <stop offset=".388" stop-color="#fff" />
                    <stop offset="1" stop-opacity=".831" stop-color="#fff" />
                  </linearGradient>

                  <path fill="url(#id1)" d="M61737 99467h86453v71704H61737z" />
                </mask>

                <mask id="id2">
                  <linearGradient id="id3" gradientUnits="userSpaceOnUse" x1="194179" y1="61185.8" x2="194179" y2="135407">
                    <stop offset="0" stop-opacity="0" stop-color="#fff" />
                    <stop offset=".388" stop-color="#fff" />
                    <stop offset="1" stop-opacity=".831" stop-color="#fff" />
                  </linearGradient>

                  <path fill="url(#id3)" d="M147890 61036h92578v74521h-92578z" />
                </mask>

                <style>
                  .fil6 {
                    fill: #000;
                    fill-opacity: .05098
                  }
                </style>
              </defs>

              <g id="Layer_x0020_1">
                <g id="_513085304">
                  <path fill="#2062af" d="M268517 300922l-120369 32411-120371-32411L0 0h296297z" />
                  <path fill="#3c9cd7" d="M148146 24374v283109l273 74 97409-26229 22485-256954z" />
                  <path fill="#fff" d="M148040 99617l-86153 35880 2857 35524 83296-35614 88604-37883 3674-36339-92278 38432z" />
                  <path mask="url(#id0)" fill="url(#id6)" d="M61887 135497l2857 35524 83295-35614V99617z" />
                  <path mask="url(#id2)" fill="url(#id7)" d="M240318 61186l-92278 38431v35790l88604-37883z" />
                  <path fill="url(#id5)" d="M62019 135497l2858 35524 127806 407-2859 47365-42055 11840-40428-10208-2450-29399H67327l4900 56756 75950 22457 75538-22050 9800-112692z" />
                  <path class="fil6" d="M148040 135497H61888l2857 35524 83295 266v-35790zm0 95022l-408 114-40422-10208-2450-29399H67197l4899 56756 75944 22457v-39720z" />
                  <path fill="url(#id4)" d="M54129 61186h186189l-3674 36339H58620l-4491-36339z" />
                  <path class="fil6" d="M148040 61186H54129l4491 36339h89420z" />
                </g>
              </g>
            </svg>
            <span class="link hide">CSS</span>
            <span class="tooltip__content">CSS</span>
          </a>
        </li>



        <li>
          <a href="#Javascript" title="Javascript" onclick="TextosJS(<?php echo $Controle ?>)"class="tooltip">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
              <style type="text/css">
                .st4 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  fill: #F7DF1E;
                }

                .st5 {
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                }
              </style>

              <g>
                <polygon class="st4" points="0,0 122.88,0 122.88,122.88 0,122.88 0,0" />
                <path class="st5" d="M32.31,102.69l9.4-5.69c1.81,3.22,3.46,5.94,7.42,5.94c3.79,0,6.19-1.48,6.19-7.26V56.41h11.55v39.43 c0,11.96-7.01,17.4-17.24,17.4C40.39,113.24,35.03,108.46,32.31,102.69L32.31,102.69L32.31,102.69z M73.14,101.45l9.4-5.44 c2.48,4.04,5.69,7.01,11.38,7.01c4.78,0,7.84-2.39,7.84-5.69c0-3.96-3.13-5.36-8.41-7.67l-2.89-1.24c-8.33-3.55-13.86-8-13.86-17.4 c0-8.66,6.6-15.26,16.91-15.26c7.34,0,12.62,2.56,16.41,9.24l-8.99,5.77c-1.98-3.55-4.12-4.95-7.42-4.95 c-3.38,0-5.53,2.14-5.53,4.95c0,3.46,2.14,4.87,7.09,7.01l2.89,1.24c9.82,4.21,15.34,8.5,15.34,18.15 c0,10.39-8.17,16.08-19.14,16.08C83.45,113.25,76.52,108.13,73.14,101.45L73.14,101.45L73.14,101.45z M73.14,101.45L73.14,101.45 L73.14,101.45L73.14,101.45z" />
              </g>
            </svg>
            <span class="link hide">Javascript</span>
            <span class="tooltip__content">Javascript</span>
          </a>
        </li>
  

      </ul>



    </div>

    <div class="sidebar__profile">

      <div class="avatar__wrapper">
        <img class="avatar" src="assets/imagens/perfil.png">
        <div class="online__status"></div>
      </div>


      <div class="avatar__name hide">
        <div class="user-name"><?php echo $_SESSION["Nome"]; ?></div>
        <div class="email"><?php echo $_SESSION["Email"]; ?></div>
      </div>


      <a href="Logout.php" class="logout hide">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-labelledby="logout-icon" role="img">
          <title id="logout-icon">log out</title>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
          <path d="M9 12h12l-3 -3"></path>
          <path d="M18 15l3 -3"></path>
        </svg>

      </a>


    </div>



  </nav>


  <div class="box_content">

  <h2 id="Titulo"> CSS Modulo 2</h2>

  <div id="Conteudo" class=<?php echo $_SESSION["Status_curso"]; ?>> 
  
  </div>

  <div class="Botoes">
    <form method="POST" id="Botoes">
    <button  id="BTN01" name="BTN01" title="Voltar" >voltar</button>
    <button  id="BTN02" name="BTN02" title="Proximo">Proximo</button>
    </form>
  </div>

  </div>


  <footer>
    <br>Ciencia da computação - TGI - 8° Semestre <br>
    Caio Batista <br>
    Emesson Nascimento <br>
    Vinicius Brandstater
  </footer>


</body>
<script src="assets/Json/Funcoes.js"></script>

</html>