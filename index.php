<?php
// Inicie a sessão
session_start();

if (!isset($_SESSION['noticias'])) {
    // Se não existir, crie o array 'noticias' vazio
    $_SESSION['noticias'] = array(
    " Uma pesquisa indica que, em 2021, mais de 40% das mulheres jovens que moram nas cidades não tinham planos de se casar por causa do aumento dos custos da criação dos filhos e da política chinesa do filho único.
TOPO
Por Samantha Chan, BBC — Cingapura

26/03/2023 15h00  

Taxa de natalidade da China está em queda há anos. — Foto: Getty Images via BBC
Taxa de natalidade da China está em queda há anos. — Foto: Getty Images via BBC


Crystal (nome fictício) mora em Pequim, na China, e tem 26 anos de idade. Ao contrário da maioria das mulheres chinesas das últimas gerações, ela não é casada e não enfrenta atualmente nenhuma pressão para formar família.

Quando pergunto o motivo, ela ri: Acho que é porque meus parentes nunca se casaram ou são divorciados.

Esse parece ser um sentimento comum entre as mulheres que moram nas cidades chinesas.

Uma pesquisa da Liga da Juventude Comunista da China, realizada em 2021, entrevistou quase 3 mil pessoas com 18 a 26 anos de idade. Mais de 40% das mulheres jovens que moram nas cidades não tinham planos de se casar. Já entre os homens, eram menos de 25%.

Ter apenas um ou nenhum filho tornou-se o padrão social na China, segundo Yi Fuxian, cientista sênior em ginecologia e obstetrícia da Universidade de Wisconsin-Madison, nos Estados Unidos, e conhecido crítico da política do filho único.
Ele acrescenta que a economia, o ambiente social, a educação e quase tudo o mais se refere à política do filho único.

Para Pequim, a tendência é preocupante, já que a população chinesa está diminuindo. Sua taxa de natalidade vem se reduzindo há anos, mas, em 2022, sua população caiu pela primeira vez em 60 anos.

Essa é uma má notícia para a segunda maior economia do mundo. A quantidade de trabalhadores está diminuindo e o envelhecimento da população começa a pressionar os serviços de previdência social do Estado.

A população chinesa em idade de trabalhar - entre 16 e 59 anos de idade - soma atualmente cerca de 875 milhões de pessoas, que representam pouco mais de 60% do total de pessoas do país. Espera-se que esse número caia ainda mais, em 35 milhões, ao longo dos próximos cinco anos, segundo uma estimativa oficial do governo chinês em 2021.

 "
    );
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
echo '<title>Noticia</title>';
echo '</head>';
echo '<body>';

echo '<h1>Enviar notícia</h1>';
echo 'Título: <input type="text" name="titulo"><br>';
echo 'Resumo: <textarea name="resumo"></textarea><br>';
echo '<form method="post" action="">';
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
