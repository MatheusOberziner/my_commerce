<h3>Meus Pedidos:</h3>

<?php
// $sql_pedidos = 'select * from vendas where usuario_id = :usuario_id';
// $sql_pedidos = $conn->prepare($sql_pedidos);
// $sql_pedidos->execute(['usuario_id' => $_SESSION['usuario']['id']]);

// while ($linha = $sql_pedidos->fetch()) {

    // echo "<h5>#{$linha['id']} - {$linha['data_venda']}</h5>";

    $sql_itens = "select * from vendas_produtos";
    $sql_itens = $conn->prepare($sql_itens);
    // $sql_itens->execute(['venda_id' => $linha['id']]);
    ?>
<table class="table" style="width: 1300px;">
    <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Produto ID</th>
            <th scope="col">Descricao</th>
            <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total = 4300 + 1500;
        while ($item = $sql_itens->fetch()) {
            $total += $item['valor']; ?>
        <tr>
            <th scope="row"><?php echo $item['id']; ?></th>
            <td><?php echo $item['produto_id']; ?></td>
            <td><?php echo $item['descricao']; ?></td>
            <td><?php echo $item['valor']; ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td>1</td>
            <td>3</td>
            <td>Console Sony PlayStation 5 + FIFA 23</th>
            <td>4300</td>
        </tr>
        <tr>
            <td>2</td>
            <td>4</td>
            <td>Ar Condicionado Split Springer Hi Wall Inverter Save 9.000 Btus Frio 220V</td>
            <td>1500</td>
        </tr>
        <tr>
            <td>
                Total: <?php echo $total; ?>
            </td>
        </tr>
    </tbody>
</table>
<br>
<?php
// }


?>