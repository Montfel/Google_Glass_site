<?php
session_start();
?>

<!DOCTYPE html>
<html LANG="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tudo sobre Google glass</title>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <link rel="stylesheet" href="../css/media.css">
</head>
<script language="JavaScript" src="../javascript/funcoes.js"></script>
<body>
<div id="interface">

  <header id="cabecalho">
    <hgroup>
    <h1>Google Glass</h1>
    <h2>A revolução do Google está chegando</h2>
    </hgroup>

    <img id="icone" src="../imagens/multimidia.png"/>

    <nav id="menu">
      <h1>Menu Principal</h1>
      <ul>
        <li onmouseover="mudaFoto('../imagens/home.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('../imagens/especificacoes.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="specs.php">Especificações</a></li>
        <li onmouseover="mudaFoto('../imagens/fotos.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="fotos.php">Fotos</a></li>
        <li onmouseover="mudaFoto('../imagens/multimidia.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="multimidia.php">Multimídia</a></li>

        <?php
          if (!isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="index2.php">Login</a></li>
        
        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="cadastro.php">Sign in</a></li>

        <?php
          endif;
        ?>

        <?php
          if (isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/multimidia.png')"><a href="fale-conosco.php">Fale conosco</a></li>

        <li>Olá, <?php echo $_SESSION['nome'];?></li>

        <li><a href="logout.php">Sair</a></li>

        <?php
          endif;
        ?>

      </ul>
    </nav>
  </header>

  <section id="corpo-full">
    <article id="noticia-principal">
      <header id="cabecalho-artigo">
        <hgroup>
        <h3>Glass > Multimídia</h3>
        <h1>Sons e Vídeos</h1>
        <h2>por Luís Felipe Monteiro</h2>
        <h3 class="direita">Atualizado em 08/Maio/2020</h3>
        </hgroup>
      </header>

      <div id="tv-radio">
        <audio id="musica" controls="controls">
          <source src="../media/2009-lovers-carvings-bibio.mp3" type="audio/mpeg"/>
        </audio>
        <video id="filme" controls="controls" poster="imagens/video-mini03.jpg">
          <source src="../media/getting-started.mp4" type="video/mp4">
        </video>
      </div>
    </article>
  </section>
<footer id="rodape">
    <p>Copyright &copy; 2020 - by Luís Felipe Monteiro<br>
      <a href="https://www.linkedin.com/in/luís-felipe-monteiro-86276a174" target="_blank">Linkedin</a> |
      <a href="https://github.com/Montfel" target="_blank">Github</a></p>
  </footer>
</div>
</body>
</html>
