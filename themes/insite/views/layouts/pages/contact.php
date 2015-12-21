<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Cont&aacute;ctanos</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 wow fadeInLeft delay-06s">
                    <form class="form" action="<?= Yii::app()->controller->createUrl("{$this->id}/Contact") ?>" method="POST">
                        <input class="input-text" type="text" name="FormMail[nombres_contacto]" placeholder="Tu Nombre" required="required">
                        <input class="input-text" type="text" name="FormMail[correo_contacto]" placeholder="Tu Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
                        <textarea class="input-text text-area" name ="FormMail[mensaje_contacto]" placeholder="Tu Mensaje" required="required"></textarea>
                        <?php echo CHtml::submitButton('ENVIAR MENSAJE', array('class' => 'read_more2')); ?>
                    </form>
                </div>

            </div>
        </section>
    </div>
</footer>

