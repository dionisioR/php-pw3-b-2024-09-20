<?php
    $base_url = dirname($_SERVER["PHP_SELF"]);
    // echo $base_url;

    $base_url = rtrim($base_url,'/views/produto');

?>

<nav>
    <ul>
        <li>
            <a href="<?php echo $base_url; ?>/index.php">Home</a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>/views/produto/produtoInsert.php">Insert</a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>/views/produto/produtoSelectAll.php">Select</a>
        </li>
    </ul>
</nav>