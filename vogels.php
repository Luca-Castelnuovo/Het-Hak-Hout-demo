<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?>
<?php echo page_header('Vogels || Overlangbroek', 'vogels'); ?>

<?php echo json_encode(sql_select('vogels', '*', true, true)); ?>

<?php echo page_footer(); ?>
