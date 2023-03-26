
<?php
class Html {
    private $conteudo;
    private $atributos;

    public function __construct($conteudo, $atributos = array()) {
        $this->conteudo = $conteudo;
        $this->atributos = $atributos;
    }

    public function exibir() {
        $html = '<';
        $html .= $this->conteudo;
        foreach ($this->atributos as $atributo => $valor) {
            $html .= ' ' . $atributo . '="' . $valor . '"';
        }
        $html .= '>';
        echo $html;
    }
}

class Head {
    private $titulo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
    }

    public function exibir() {
        echo '<head>';
        echo '<title>' . $this->titulo . '</title>';
        echo '</head>';
    }
}

class Body {
    private $conteudo;
    private $atributos;

    public function __construct($conteudo, $atributos = array()) {
        $this->conteudo = $conteudo;
        $this->atributos = $atributos;
    }

    public function exibir() {
        $html = '<';
        $html .= 'body';
        foreach ($this->atributos as $atributo => $valor) {
            $html .= ' ' . $atributo . '="' . $valor . '"';
        }
        $html .= '>';
        $html .= $this->conteudo;
        $html .= '</body>';
        echo $html;
    }
}

    class data {
        private $noticia;
        public function_construct($noticia){
           $this ->noticia = &noticia;
        }
        public function_toString() {
          return "<p> puplicado em: {noticia['data']</><hr>";
          }
}


?>
