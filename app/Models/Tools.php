<?php

namespace App\Models;


trait Tools
{


    /**
     * Função para remover máscaras de inputs que tem como foco números. Ex: CPF,CNPJ e TELEFONE.
     * @param string $inputComMascara input o qual terá sua mascara removida.
     * @return string
     */
    public static function removeMascara(string $inputComMascara): string
    {
        return preg_replace("/[^0-9]/", '', $inputComMascara); // Retorna a string passada no parâmetro, substituindo na mesma tudo que nao estiver entre os numeros 0 e 9 por vazio.
    }


    /**
     * Função para formatar CPF E CNPJ nos seguintes formatos respectivamente (XXX.XXX.XXX-XX) (XX.XXX.XXX/XXXX-XX).
     * @param string $cpfcnpj CPF ou CNPJ a ser formatado.
     * @return string
     */
    public static function formataCpfeCnpj(string $cpfcnpj): string
    {
        if (strlen($cpfcnpj) == 11) {  //verifica se o tamanho da string passada é  igual a 11, que é o tamanho do cpf sem os pontos e o traço.

            return  substr($cpfcnpj, 0, 3) . '.' . substr($cpfcnpj, 3, 3) . '.' . substr($cpfcnpj, 6, 3) . '-' . substr($cpfcnpj, 9, 2); //retorna a concatenação entre as posições dos numeros com os pontos e o traço para formatação no modelo (XXX.XXX.XXX-XX).
        }
        if (strlen($cpfcnpj) == 14) { //verifica se o tamanho da string passada é igual a 14, que é o tamanho do cnpj sem os pontos, barra e traço.       

            return substr($cpfcnpj, 0, 2) . '.' . substr($cpfcnpj, 2, 3) . '.' . substr($cpfcnpj, 5, 3) . '/' . substr($cpfcnpj, 8, 4) . '-' . substr($cpfcnpj, 12, 2); //retorna a concatenação entre as posições dos numeros com os pontos,traço e barra para formatação no modelo (XX.XXX.XXX/XXXX-XX).
        }
    }

    /**
     * Função para gerar token.
     * @return string
     */
    public static function gerarToken(): string
    {
        return md5(uniqid());  // Retorna em string a criptografia em hash MD5 de um identificador único baseado no tempo atual.
    }
}
