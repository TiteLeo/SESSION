<?php
require 'inc/head.php';
require 'inc/data/products.php';
?>

<?php
if(empty($_SESSION['UserName'])) {
    header('Location: /login.php');
    exit();
}
?>
    <section class="cookies container-fluid">
        <div class="row">
            <ul>
                <?php
                $sumCookies = array_count_values($_SESSION['add_to_cart']);
                foreach ($sumCookies as $cookie => $value):
                    echo '<li class="list-group-item">' . $catalog[$cookie]['name'] . '<br>Ta gourmandise s\élève à : ' . $value . ' cookies </li>';
                    ?>

                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>