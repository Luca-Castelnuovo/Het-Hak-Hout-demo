<?php require $_SERVER['DOCUMENT_ROOT'].'/includes/init.php'; ?> <?php echo
page_header('Overlangbroek', 'vogels'); ?>



<div class="row">
    <!-- Phone -->
    <div class="hide-on-med-and-up center">
        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <div class="row">
                        <div class="col s12">
                            <img src="<?= $user['profile_picture'] ?>" onerror="this.src='https://cdn.lucacastelnuovo.nl/general/images/profile_picture.png'" class="circle" width="200">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h2 class="mt-0"><?= $user_name ?></h2>
                            <?php
                                if ($_SESSION['id'] != $user['user_id']) {
                                    if (in_array($user['user_id'], $logged_in_user['following'])) {
                                        echo <<<HTML
                                        <a onclick="user_undo_follow('{$user_name}')" class="waves-effect waves-light btn grey lighten-5 col s12 black-text tooltipped" data-position="bottom" data-tooltip="Unfollow">Following</a>
HTML;
                                    } else {
                                        echo <<<HTML
                                        <a onclick="user_follow('{$user_name}')" class="waves-effect waves-light btn blue accent-4 col s12">Follow</a>
HTML;
                                    }
                                } else {
                                    echo <<<HTML
                                    <a href="/user/settings" class="waves-effect waves-light btn blue accent-4 col s12">Settings</a>
HTML;
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <a onclick="user_followers('<?= $user_name ?>')" class="accent-4 blue btn-small pointer waves-effect waves-light col s12"><span class="bold" id="followersNumber"><?= $followers_count ?></span> followers</a>
                        </div>
                        <div class="col s6">
                            <a onclick="user_following('<?= $user_name ?>')" class="accent-4 blue btn-small pointer waves-effect waves-light col s12"><span class="bold" id="followingNumber"><?= $following_count ?></span> following</a>
                        </div>
                    </div>
                    <?php if (!empty($user['bio'])) {
                                ?>
                    <div class="row">
                        <div class="col s12">
                            <p><?= $user['bio'] ?></p>
                        </div>
                    </div>
                    <?php
                            } ?>
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
                            <img src="/static/images/Buizerd2.jpg" onerror="this.src='https://cdn.lucacastelnuovo.nl/general/images/profile_picture.png'" class="responsive-img">
                        </div>
                        <div class="col s7">
                            <div class="row">
                                <div class="col s12">
                                    <h2>Buizerd</h2>
                                    <p>
                                        De buizerd is een middelgrote tot grote roofvogel uit de familie van de havikachtigen. De wetenschappelijke naam van de soort werd als Falco buteo in 1758 gepubliceerd door Carl Linnaeus. De buizerd komt voor in het grootste gedeelte van Europa en delen van Azië. Hij is overwegend een standvogel die in hetzelfde gebied overwintert als waar hij broedt, behalve in de koudste gebieden en op enkele ondersoorten na. De vogel jaagt gebruikelijk in open land, maar nestelt in bosranden. Normaal gesproken bestaat de prooi van een buizerd voornamelijk uit kleine zoogdieren, amfibieën (zoals kikkers) en kleine vogels, maar hij is bij gelegenheid ook aaseter.
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
