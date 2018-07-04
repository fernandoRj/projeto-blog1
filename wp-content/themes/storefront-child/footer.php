<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<div class="copi1">
<div class="container">
<div class="row justify-content-center">
                    <div class="col-lg-6 text-white">
                        <h3 class="font-alt font-w-600 letter-spacing-2 text-uppercase title-xs-small title-extra-large-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrar em contato</font></font></h3>
                        <p class="font-alt mb-0 mt-3 text-xs-large text-uppercase title-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Não hesite em contactar-nos</font></font></p>
                        <span class="bg-base-color d-inline-block mt-4 sep-line-thick-long"></span>
                        
                        <div class="mt-4 text-extra-large text-white">
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envie a qualquer momento, nos esforçamos para responder a todas as perguntas dentro de 24 horas nos dias úteis.</font></font></p>
                            <span class="d-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E: equipe@9mobile.com.br </font></font></span>
                     
                        </div>
                        <!-- //.mt-4 -->
                    </div>
                    <!-- //.col-lg-6 -->
                    
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <form action="http://9mobile.com.br/email/" method="post" id="form-contact">
                            <div class="form-group">
                                <span class="d-block font-alt letter-spacing-1 text-medium text-uppercase text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seu nome</font></font></span>
                                <input type="text" name="nome" class="font-alt form-control mt-2 required" id="nome" placeholder="">
                            </div>
                            <!-- //.form-group -->
                            
                            <div class="form-group">
                                <span class="d-block font-alt letter-spacing-1 text-medium text-uppercase text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seu email</font></font></span>
                                <input type="email" name="email" class="font-alt form-control mt-2 required email" id="email" placeholder="">
                            </div>
                            <!-- //.form-group -->
                            
                            <div class="form-group">
                                <span class="d-block font-alt letter-spacing-1 text-medium text-uppercase text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mensagem</font></font></span>
                                <textarea name="menssagem" class="font-alt form-control mt-2 required" id="menssagem" rows="6" placeholder=""></textarea>
                            </div>
                            <!-- //.form-group -->
                            
                            <span class="d-block font-alt letter-spacing-1 text-small text-uppercase text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* Complete todos os campos corretamente</font></font></span>
                            <button type="submit" class="btn btn-shadow btn-base-color mt-4 text-uppercase" id="btn-form-contact"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar mensagem</font></font></button>
                        </form>
                    </div>
                    <!-- //.col-lg-6 -->
                </div>
</div>
</div>

<div class="copi">
<div class="container">
<small class="copyright pull-left">Copyright © <a href="#" target="_blank">Fernando Alcantara</a></small>
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
