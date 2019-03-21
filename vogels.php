<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?>
<?php echo page_header('Vogels || Overlangbroek', 'vogels'); ?>

<div class="row">
    <div class="col s12">
        <h3 class="animated bounceInLeft delay-200ms">Vogels</h3>
    </div>
</div>
<div class="row animated fadeInUp delay-200ms">

<?php

$vogels = sql_select('vogels', 'id,name,img_url', true, false);

while ($vogel = $vogels->fetch_assoc()) {
    echo <<<HTML
        <div class="col s12 m3">
            <a href="/vogels/{$vogel['id']}"
                ><div class="card">
                    <div class="card-image">
                        <img src="{$vogel['img_url']}" />
                    </div>
                    <div class="card-content smallbox">
                        <span class="card-title black-text">{$vogel['name']}</span>
                    </div>
                </div>
            </a>
        </div>
HTML;
}
?>

</div>

<?php echo page_footer(); ?>
