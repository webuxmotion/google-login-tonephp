<section class="section">
    <div class="container">
        <h1 class="title is-1 has-text-centered">Signup</h1>
    </div>
    <?=$this->component('centered-card', [
        'children' => [
            'file' => 'pages/User/signup/form',
            'data' => [
                'email_value' => $email_value,
            ]
        ],
    ]) ?>
</section>