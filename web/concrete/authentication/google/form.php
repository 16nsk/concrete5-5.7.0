<?php
if (isset($error)) {
    ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php
}
if (isset($message)) {
    ?>
    <div class="alert alert-success"><?= $message ?></div>
<?php
}

$user = new User;

if ($user->isLoggedIn()) {
    ?>
    <div class="form-group">
        <span>
            <?= t('Attach a %s account', t('Google')) ?>
        </span>
        <hr>
    </div>
    <div class="form-group">
        <a href="<?= \URL::to('/ccm/system/authentication/oauth2/google/attempt_attach'); ?>" class="btn btn-primary btn-google btn-block">
            <i class="fa fa-google"></i>
            <?= t('Attach a %s account', t('Google')) ?>
        </a>
    </div>
<?php
} else {
    ?>
    <div class="form-group">
        <span>
            <?= t('Sign in with %s', t('Google')) ?>
        </span>
        <hr>
    </div>
    <div class="form-group">
        <a href="<?= \URL::to('/ccm/system/authentication/oauth2/google/attempt_auth'); ?>" class="btn btn-primary btn-google btn-block">
            <i class="fa fa-google"></i>
            <?= t('Log in with %s', 'Google') ?>
        </a>
    </div>
<?php
}
?>
<style>
    .ccm-ui .btn-google {
        border-width: 0px;
        background: #dd4b39;
    }
    .ccm-ui .btn-google:focus {
        background: #dd4b39;
    }
    .ccm-ui .btn-google:hover {
        background: #f04f3d;
    }
    .ccm-ui .btn-google:active {
        background: #c74433;
    }

    .btn-google .fa-google {
        margin: 0 6px 0 3px;
    }
</style>
