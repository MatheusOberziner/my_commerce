<a class="btn btn-dark" style="border: 2px solid white; 
    font-size: 16px; font-weight: 500; width: 150px; float: right; margin-right: 50px;" href="?pagina=sacola">
    Carrinho

    <?php if (isset($_SESSION['sacola'])) {
        echo '(' . count($_SESSION['sacola']) . ')';
    } ?>
</a>
<?php if (isset($_SESSION['autenticado'])) { ?>
    <a class="btn btn-dark" href="?pagina=meus_pedidos" 
        style="border: 2px solid white; float: right; font-size: 16px; 
        font-weight: 500; width: 150px; margin-right: 10px;">
        Meus pedidos
    </a>
<?php }
?>