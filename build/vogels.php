<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?>
<?php echo page_header('Vogels || Overlangbroek', 'vogels'); ?>

<?php

$vogels = sql_select('vogels', 'id,name,img_url', true, false);

while ($vogel = $vogels->fetch_assoc()) {
    echo <<<HTML
    <div class="row">
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
    </div>
HTML;
}
?>

<?php echo page_footer(); ?>
