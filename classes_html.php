<?php
class Html {
   public $head;
   public $body;

   public function __construct($head, $body) {
      $this->head = $head;
      $this->body = $body;
   }

   public function render() {
      return "<!DOCTYPE html>\n<html>\n" . $this->head->render() . $this->body->render() . "\n</html>";
   }
}

class Head {
   public $title;

   public function __construct($title) {
      $this->title = $title;
   }

   public function render() {
      return "<head>\n<title>" . $this->title . "</title>\n</head>\n";
   }
}

class Body {
   public $content = array();

   public function add($content) {
      $this->content[] = $content;
   }

   public function render() {
      $html = "<body>\n";

      foreach ($this->content as $content) {
         $html .= $content->render();
      }

      $html .= "</body>\n";

      return $html;
   }
}

class Noticia {
   public $titulo;
   public $resumo;
   public $imagem;
   public $data_publicacao;

   public function __construct($titulo, $resumo, $imagem, $data_publicacao) {
      $this->titulo = $titulo;
      $this->resumo = $resumo;
      $this->imagem = $imagem;
      $this->data_publicacao = $data_publicacao;
   }

   public function render() {
      $html = "<h1>" . $this->titulo . "</h1>\n";
      $html .= "<p>" . $this->resumo . "</p>\n";
      $html .= "<img src='" . $this->imagem . "'/>\n";
      $html .= "<p>Publicado em " . $this->data_publicacao . "</p>\n";
      return $html;
   }
}

$noticia = new Noticia("Titulo", "Resumo da notícia",
                       
 "https://s2.glbimg.com/0rJG_4KFvfpURR6rBGTQ9iFFXKQ=/0x0:800x450/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/y/5/2nLsugQTaB5V044a46dA/china-bbc2.jpg", "21/03/2023");

$body = new Body();
$body->add($noticia);

$head = new Head("Título da página");

$html = new Html($head, $body);

echo $html->render();

?>
