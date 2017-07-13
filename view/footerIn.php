   <footer class="page-footer orange lighten-2">
        <div class="container"  id="contactos">
            <div class="row">
                <div class="col l5 s12">
                    <h5 class="white-text">Facultad de Ingeniería</h5>
                    <p class="grey-text text-lighten-4">Tu presente y tu futuro.</p>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Enlaces</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Carreras</a></li>
                        <li><a class="grey-text text-lighten-3" href="view/contactos.php">Testimonios</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Noticias</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Registro</h5>
                    <p class="grey-text text-lighten-4">Registrate y recibe las ultimas noticias.</p>
                    <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-classic form-inline offset-top-15" novalidate="novalidate">
                        <div class="form-group has-error">
                            <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-has-validation"><span class="form-validation">El email es requerido.</span>
                            <label for="contact-email" class="form-label rd-input-label">Ingresa tu E-mail</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Copyright DidSoft
                <a class="grey-text text-lighten-4 right" href="#!">UAB</a>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slider();
            $('.materialboxed').materialbox();
            $('.modal').modal();
            $('.tooltipped').tooltip({delay: 50});
        });
    </script>

</body>
</html>
