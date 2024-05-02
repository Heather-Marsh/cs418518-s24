<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
function onSubmit(token) {
  document.getElementById("demo-form").submit();
}
</script>

<button class="g-recaptcha" 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>}

<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
        grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
                // Add your logic to submit to your backend server here.
        });
     });
    }
    </script>


