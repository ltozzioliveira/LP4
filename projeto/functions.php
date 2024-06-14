<?php
    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost; dbname=consultorio", "root", "");
        return $conexao;
    }


    function retornarAnimais(){
        try {
            $sql = "SELECT a.id, a.nome as Nome, a.especie as Espécie, a.idade as Idade, c.nome as Dono FROM animal a INNER JOIN cliente c ON c.id = a.id_cliente";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch(Exception $e) {
            return 0;
        }
    }

    function consultarAnimalId($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM animal WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function alterarAnimal($nome, $especie, $idade, $id_cliente, $id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "UPDATE produto SET nome = :nome, descricao = :descricao, valor = :valor, categoria_id = :categoria WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            $stmt->bindValue(":id", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function retornarClientes(){
        try {
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM cliente";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Executo a consulta, retornando o seu resultado
            return $conexao->query($sql);
        } catch (Exception $e) {
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function inserirAnimal($nome, $id_cliente, $especie, $idade){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "INSERT INTO animal (nome, id_cliente, especie, idade)VALUES (:nome, :id_cliente, :especie, :idade)";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":id_cliente", $id_cliente);
            $stmt->bindValue(":especie", $especie);
            $stmt->bindValue(":idade", $idade);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    function excluirAnimal($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "DELETE FROM animal WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            //Executo a consulta, retornando o seu resultado
            return $stmt->execute();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }
?>