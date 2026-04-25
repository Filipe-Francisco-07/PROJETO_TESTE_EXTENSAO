<?php
/**
 * Classe responsável pela gestão de usuários, incluindo criação e busca de usuários por ID.
 */
class UserService
{

    /**
     * Cria um novo usuário com um ID aleatório, nome e email fornecidos.
     * 
     * @param mixed $name O nome do usuário a ser criado.
     * @param mixed $email O email do usuário a ser criado.
     * @return mixed Um array contendo o ID, nome e email do usuário.
     */
    public function createUser($name, $email)
    {
        return [
            "id" => rand(1, 1000),
            "name" => $name,
            "email" => $email
        ];
    }

    /**
     * Retorna um array com informações de um usuário com base no ID fornecido.
     * 
     * @param mixed $id O identificador do usuário a ser buscado.
     * @return mixed Um array contendo o ID, nome e email do usuário.
     */
    public function findUserById($id)
    {
        return [
            "id" => $id,
            "name" => "Usuário Teste",
            "email" => "teste@email.com"
        ];
    }

}