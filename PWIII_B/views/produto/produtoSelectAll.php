<?php require_once '../../utils/header.php'; ?>
<?php require_once '../../utils/menu.php'; ?>
<?php require_once './produtoHandlerSelectAll.php'; ?>

    <h1>Lista de produtos</h1>

    <?php

        if($num > 0){

            echo "<table class='table table-hover'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Descrição</th>";
            echo "<th>Preço</th>";
            echo "<th>Url</th>";
            echo "<th>Ações</th>";
            echo "</tr>";

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>";
                echo "<td>{$pro_id}</td>";
                echo "<td>{$pro_nome}</td>";
                echo "<td>{$pro_descricao}</td>";
                echo "<td>{$pro_preco}</td>";
                echo "<td><img src='{$pro_url}' alt='{$pro_nome}'></td>";
                echo "<td>";
                echo "<a class='btn btn-primary' href=''>Detalhes</a>";
                echo "<a class='btn btn-warning' href=''>Editar</a>";
                echo "<a class='btn btn-danger' href=''>Deletar</a>";
                echo "</td>";
                echo "</tr>";

            }

            echo "</table>";

        }else{
            echo "<p>Nenhum produto encontrado.</p>";
        }
    ?>

<?php require_once '../../utils/footer.php'; ?>
    