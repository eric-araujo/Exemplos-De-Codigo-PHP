<!-- GENERATE SECRET KEY https://www.google.com/recaptcha/admin/create -->
<html>
  <head>
    <title>ReCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="cadastrar.php" method="POST">
      <div class="g-recaptcha" data-sitekey="SECRET_KEY"></div>
      <br/>
      <input type="email" name="email">
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>