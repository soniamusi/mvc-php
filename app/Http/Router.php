<?php

namespace App\Http;

class Router
{

    /**
     * URL completa do projeto RAIZ
     * @var string
     */
    private $url = '';

    /**
     * prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancias de Request
     * @var Request
     */
    private $request;

    /**
     * Metodo responsavel por iniciar a classe
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request($url);
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Metodo responsavel por definir o prefixo das rotas
     */
    private function setPrefix()
    {
        //INFORMAÇÕES DA URL ATUAL
        $parseUrl = parse_url($this->url);

        //DEFINE O PREFIXO
        $this->prefix = $parseUrl['path'] ?? '';
    }
}
