<?php
// Inicie a sessão
session_start();

if (!isset($_SESSION['noticias'])) {
    // Se não existir, crie o array 'noticias' vazio
    $_SESSION['noticias'] = array();
}

if (isset($_POST['submit'])) {
    $nova_noticia = array(
        'titulo' => $_POST['titulo'],
        'resumo' => $_POST['resumo'],
        'imagem' => $_POST['imagem'],
        'data' => date('d/m/Y')
    );

    array_push($_SESSION['noticias'], $nova_noticia);
}

echo '<html>';
echo '<head>';
echo '<title>Notícias</title>';
echo '</head>';
echo '<body>';

echo '<h1>Enviar notícia</h1>';
echo '<form method="post" action="">';
echo 'Título: <input type="text" name="titulo"><br>';
echo 'Resumo: <textarea name="resumo"></textarea><br>';
echo 'Imagem: <input type="text" name="imagem"><br>';
echo '<input type="submit" name="submit" value="Enviar">';
echo '</form>';

echo '<h1>Notícias</h1>';
foreach ($_SESSION['noticias'] as $noticia) {
    echo '<h2>' . $noticia['titulo'] . '</h2>';
    echo '<p>' . $noticia['resumo'] . '</p>';
    echo '<img src="' . $noticia['imagem'] . '">';
    echo '<p>Publicado em ' . $noticia['data'] . '</p>';
}

echo '</body>';
echo '</html>';
?>
