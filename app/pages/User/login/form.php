<form method="POST" action="/user/login">
    <?=$this->component('message')?>

    <div class="field">
        <label class="label">Email</label>
        <div class="control">
            <input 
                class="input is-medium" 
                name="email" 
                type="email" 
                placeholder=""
                value="<?=$email_value?>"
            >
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input 
                class="input is-medium" 
                name="password" 
                type="password" 
                placeholder=""
            >
        </div>
    </div>
    
    <div class="pt-5">
        <button class="button is-link is-large is-fullwidth" type="submit">
            <strong>Login</strong>
        </button>
    </div>
    <div class="pt-5">
        <a class="button is-large is-fullwidth is-light" href="<?=$google_login_url?>"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> <span class="ml-4">Login With Google</span></a>
    </div>

</form>