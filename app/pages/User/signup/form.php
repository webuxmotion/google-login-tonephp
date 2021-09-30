<form method="POST" action="/user/signup">
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
            <strong>Sign up</strong>
        </button>
    </div>

</form>