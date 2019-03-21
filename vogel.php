<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?>
<?php echo page_header('VOGELNAAM || Overlangbroek', 'vogels'); ?>

<?php
$id = clean_data($_GET['id']);
$vogel = sql_select('vogels', 'name,img_url,description', 'id = '.$id, true);

?>

<div class="row animated fadeInUp delay-200ms">
    <!-- Phone -->
    <div class="hide-on-med-and-up center">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <div class="row">
                        <div class="col s12">
                            <img src="<?php echo $vogel['img_url']; ?>" class="circle" width="200">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h2 class="mt-0"><?php echo $vogel['name']; ?></h2>
                            <p>
                                <?php echo $vogel['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tablet and up -->
    <div class="hide-on-small-only">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <div class="row mb-0">
                        <div class="col s5">
                            <img src="<?php echo $vogel['img_url']; ?>" class="responsive-img">
                        </div>
                        <div class="col s7">
                            <div class="row">
                                <div class="col s12">
                                    <h2><?php echo $vogel['name']; ?></h2>
                                    <p>
                                        <?php echo $vogel['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo page_footer(); ?>
