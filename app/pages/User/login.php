<section class="section">
    <div class="container">
        <h1 class="title is-1 has-text-centered">Login</h1>
    </div>
    <?=$this->component('centered-card', [
        'children' => [
            'file' => 'pages/User/login/form',
            'data' => [
                'email_value' => $email_value,
                'google_login_url' => $google_login_url,
            ]
        ],
    ]) ?>
</section>