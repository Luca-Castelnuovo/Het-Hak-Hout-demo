<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?>

<?php echo json_encode(sql_select('vogels', '*', true)); ?>
