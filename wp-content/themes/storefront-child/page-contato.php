   <?php
/*
Template Name: contato
*/
?>


<?php get_header()?>



<div class="caption contato25">
<div class="container">


            <div class="row contact-info">

      
           
        
            </div>
<div class="cor">

            <div class="header">
              <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deixe-nos uma mensagem</font></font></h1>
			  <p>equipe@9mobile.com.br</p>
            </div>

            <div class="row">
              <div class="col-md-6 m-md-auto">
                <form  action="https://9mobile.com.br/email/" method="post">
                  <div class="form-group">
                    <label for="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome</font></font></label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O email</font></font></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                  </div>
               
                  <div class="form-group">
                    <label for="message"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mensagem</font></font></label>
                    <textarea placeholder="menssagem" class="form-control" id="menssagem" name="menssagem" ></textarea>
                  </div>
                  <button type="submit" class="btn btn-ada-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="corbtn">Enviar</font></font></button>
                </form>
              </div>
            </div>
</div>
</div>
          </div>

<?php get_footer('blog');?>