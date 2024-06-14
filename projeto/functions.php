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

    function retornaConsultas(){
        try {
            $sql = "SELECT c.id as id, c.con_data as dia, c.con_hora as hora, a.nome as animal, cli.nome as dono FROM consultas c INNER JOIN animal a ON a.id = c.id_animal INNER JOIN cliente cli ON cli.id = a.id_cliente;";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function retornarClientes(){
        try {
            $sql = "SELECT * FROM cliente";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function retornaTratamentos(){
        try {
            $sql = "SELECT * FROM tratamento";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function consultarAnimalId($id){
        try{ 
            $sql = "SELECT * FROM animal WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e){
            return 0;
        }
    }

    function consultarConsultaId($id){
        try{ 
            $sql = "SELECT a.nome as animal, cli.nome as cliente, c.con_data as dia, c.con_hora as hora
                    FROM consultas c INNER JOIN animal a ON a.id = c.id_animal INNER JOIN cliente cli ON a.id_cliente = cli.id
                    WHERE c.id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e){
            return 0;
        }
    }

    function consultarClienteId($id){
        try{ 
            $sql = "SELECT * FROM cliente WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e){
            return 0;
        }
    }

    function alterarAnimal($nome, $especie, $idade, $id_cliente, $id){
        try{ 
            $sql = "UPDATE produto SET nome = :nome, descricao = :descricao, valor = :valor, categoria_id = :categoria WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function alterarCliente($nome, $telefone, $endereco, $id){
        try{
            $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, endereco = :endereco WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function alterarConsulta($animal, $dia, $hora, $id){
        try{
            $sql = "UPDATE consultas SET id_animal = :animal, con_data = :dia, con_hora = :hora WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":animal", $animal);
            $stmt->bindValue(":dia", $dia);
            $stmt->bindValue(":hora", $hora);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }


    function inserirAnimal($nome, $id_cliente, $especie, $idade){
        try{ 
            $sql = "INSERT INTO animal (nome, id_cliente, especie, idade)VALUES (:nome, :id_cliente, :especie, :idade)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":id_cliente", $id_cliente);
            $stmt->bindValue(":especie", $especie);
            $stmt->bindValue(":idade", $idade);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function inserirCliente($nome, $telefone, $endereco){
        try{ 
            $sql = "INSERT INTO cliente (nome, telefone, endereco)VALUES (:nome, :telefone, :endereco)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":endereco", $endereco);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function inserirConsulta($animal, $dia, $hora){
        try{ 
            $sql = "INSERT INTO consultas (id_animal, con_data, con_hora)VALUES (:animal, :dia, :hora)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":animal", $animal);
            $stmt->bindValue(":dia", $dia);
            $stmt->bindValue(":hora", $hora);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function excluirAnimal($id){
        try{ 
            $sql = "DELETE FROM animal WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return $e;
        }
    }

    function excluirCliente($id){
        try{ 
            $sql = "DELETE FROM cliente WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function excluirConsulta($id){
        try{ 
            $sql = "DELETE FROM consultas WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return $e;
        }
    }
?>