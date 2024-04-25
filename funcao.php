<?php
function listarGeral($campos, $tabela)
{
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela");
        $sqlLista->execute();

        if ($sqlLista->rowCount() > 0) {
            $results = $sqlLista->fetchAll(PDO::FETCH_OBJ);
            $conn = null;
            return $results;
        } else {
            $conn = null;
            return array();
        }
    } catch (PDOException $e) {
        $conn = null;
        echo 'Exception -> ' . $e->getMessage();
        return false;
    }
}

function EDITARREGISTRO($CAMPOS)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();


        $sql = "UPDATE TABELA SET CAMPO = :CAMPO, CAMPO = :CAMPO WHERE id = :id";
        $stmt = $conn->prepare($sql);


        $stmt->bindParam(':CAMPO', $CAMPO);
        $stmt->bindParam(':CAMPO', $CAMPO);
        $stmt->bindParam(':CAMPO', $CAMPO);

        $stmt->execute();
        $conn->commit();

        return $stmt->rowCount();

    } catch (PDOException $e) {
        $conn->rollback();
        return 'Exception -> ' . $e->getMessage();
    } finally {
        $conn = null;
    }
//}function produtoEditar($nome, $valor, $idproduto)
//{
//    $conn = conectar();
//    try {
//        $conn->beginTransaction();
//
//
//        $sql = "UPDATE produto SET nome = :nome, valor = :valor WHERE idproduto = :idproduto";
//        $stmt = $conn->prepare($sql);
//
//
//        $stmt->bindParam(':nome', $nome);
//        $stmt->bindParam(':valor', $valor);
//        $stmt->bindParam(':idproduto', $idproduto);
//
//        $stmt->execute();
//        $conn->commit();
//
//        return $stmt->rowCount();
//
//    } catch (PDOException $e) {
//        $conn->rollback();
//        return 'Exception -> ' . $e->getMessage();
//    } finally {
//        $conn = null;
//    }
//}


    function ADICIONARREGISTRO($CAMPOS)
    {
        $conn = conectar();
        try {
            $conn->beginTransaction();


            $stmt = $conn->prepare("INSERT INTO TABELA (CAMPOS) VALUES (?, ?)");
            $stmt->execute([$CAMPOS]);
            $conn->commit();
            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
            return 'Vazio';
        } catch (PDOException $e) {
            echo 'Exception -> ' . $e->getMessage();
            $conn->rollback();
            return $e->getMessage();
        } finally {
            $conn = null;
        }
    }

//    function produtoAdd($nome, $valor)
//    {
//        $conn = conectar();
//        try {
//            $conn->beginTransaction();
//
//
//            $stmt = $conn->prepare("INSERT INTO produto (nome, valor) VALUES (?, ?)");
//            $stmt->execute([$nome, $valor]);
//            $conn->commit();
//            if ($stmt->rowCount() > 0) {
//                return $stmt->fetchAll(PDO::FETCH_OBJ);
//            }
//            return 'Vazio';
//        } catch (PDOException $e) {
//            echo 'Exception -> ' . $e->getMessage();
//            $conn->rollback();
//            return $e->getMessage();
//        } finally {
//            $conn = null;
//        }
//    }


    function EXCLUIRREGISTRO($CAMPOS)
    {
        $conn = conectar();
        try {

            $conn->beginTransaction();

            $stmt = $conn->prepare("DELETE FROM TABELA WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $conn->commit();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            } else {
                return 'Vazio';
            }

        } catch (PDOException $e) {
            $conn->rollback();
            return 'Exception -> ' . $e->getMessage();
        } finally {
            $conn = null;
        }
    }
}

//function produtoExc($idproduto)
//{
//    $conn = conectar();
//    try {
//
//        $conn->beginTransaction();
//
//        $stmt = $conn->prepare("DELETE FROM produto WHERE idproduto = :idproduto");
//        $stmt->bindParam(':idproduto', $idproduto);
//        $stmt->execute();
//        $conn->commit();
//
//        if ($stmt->rowCount() > 0) {
//            return $stmt->fetchAll(PDO::FETCH_OBJ);
//        } else {
//            return 'Vazio';
//        }
//
//    } catch (PDOException $e) {
//        $conn->rollback();
//        return 'Exception -> ' . $e->getMessage();
//    } finally {
//        $conn = null;
//    }
//}
