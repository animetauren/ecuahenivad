 <div class="container-fluid">

      <div class="row">
        <div class="span12">
          <h1>Contacte-nos</h1>
        </div>
      </div>
        <hr>
        <div class="column">

        <div align="center" class="span12">
          <h2>Ecua Henivad Body Shop, LLC</h2>
          <br>218 Thomas St
          <br>Newark, NJ 07114
          <br>por telefone: (973)-877-0905 
          <br>por fax: (973)-877-0906
        </div>
      </div>
  </div>
          <hr>
          <div class="container">

<?php echo validation_errors(); ?>

<?php echo form_open('../contacts_pt'); ?>

          <div class="row">
        <div class="span6">
          <h2>Envie-nos uma mensagem</h2>
          <form>
            <label>Nome</label>
            <input type="text" class="span6" name="nome" value="<?php echo set_value('nome'); ?>" placeholder="O Seu Nome">
            <label>Endereço de Email</label>
            <input  type="text" class="span6" name="email" value="<?php echo set_value('email'); ?>" placeholder="youremail@email.com">
            <label>Número de Telefone</label>
            <input  type="text" class="span6"placeholder="eg. 555-555-5555">
            <label>Sua Mensagem</label>
            <textarea class="input span6" id="textarea" value="<?php echo set_value('mensagem'); ?>" name="mensagem" rows="6" placeholder="digite sua mensagem aqui."></textarea>
            <br>
            <a class="btn btn-large moveright" href="mailto:arrb2008@gmail.com"><i class="icon-envelope"></i> Enviar</a>
          </form>
        </div>

        <div class="span4">
          <h2>Visite-nos</h2>
        <iframe frameborder="0" height="350"  width="480" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?f=q&amp;geocode=&amp;hl=en&amp;ie=UTF8&amp;q=218+Thomas+St,+Newark,+NJ+07114&amp;s=AARTsJosUXHCYYIUhFORtStH9doGfNr2Wg&amp;sll=40.721201,-74.171419&amp;sspn=0.032744,0.076561&amp;view=map&amp;hq=&amp;hnear=218+Thomas+St,+Newark,+Essex,+New+Jersey+07114&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
      </div>
