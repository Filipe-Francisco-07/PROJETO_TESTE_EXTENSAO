<?php

/**
 * Classe responsável por fornecer utilitários para manipulação de strings,
 * incluindo a geração de slugs e truncamento de texto.
 */
class StringHelper
{

    /**
     * Converte uma string em um formato "slug", substituindo espaços e caracteres especiais por hífens.
     * 
     * @param mixed $text A string a ser convertida em slug.
     * @return mixed A string formatada como slug.
     */
    public function slugify($text)
    {
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }

    /**
     * Trunca uma string para um limite especificado e adiciona reticências se necessário.
     * 
     * @param mixed $text A string a ser truncada.
     * @param mixed $limit O limite de caracteres para a truncagem.
     * @return mixed A string truncada ou a original se o limite não for excedido.
     */
    public function truncate($text, $limit)
    {
        if (strlen($text) <= $limit) {
            return $text;
        }
        return substr($text, 0, $limit) . "...";
    }

}