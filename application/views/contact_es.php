 <div class="container-fluid">

      <div class="row">
        <div class="span12">
          <h1>Contacte Nos</h1>
        </div>
      </div>
        <hr>
        <div class="column">

        <div align="center" class="span12">
          <h2>Ecua Henivad Body Shop, LLC</h2>
          <br>218 Thomas St
          <br>Newark, NJ 07114
          <br>por telefono: (973)-877-0905 
          <br>por fax: (973)-877-0906
        </div>
      </div>
  </div>
          <hr>
          <div class="container">

<?php echo validation_errors(); ?>

<?php echo form_open('../contacts_es'); ?>

          <div class="row">
        <div class="span6">
          <h2>Manda nos un mensage</h2>
          <form>
            <label>Nombre</label>
            <input type="text" class="span6" name="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="Su Nombre">
            <label>Email Address</label>
            <input  type="text" class="span6" name="email" value="<?php echo set_value('email'); ?>" placeholder="youremail@email.com">
            <label>Numero de Telefono</label>
            <input  type="text" class="span6" name="numerodetel" placeholder="eg. 555-555-5555">
            <label>Your Message</label>
            <textarea class="input span6" id="textarea" rows="6"  value="<?php echo set_value('mensage'); ?>" name="mensage" placeholder="Type your message here."></textarea>
            <br>
            <a class="btn btn-large moveright" href="mailto:arrb2008@gmail.com"><i class="icon-envelope"></i> Enviar</a>
          </form>
        </div>

        <div class="span4">
          <h2>Visita Nos</h2>
        <iframe frameborder="0" height="350"  width="480" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?f=q&amp;geocode=&amp;hl=en&amp;ie=UTF8&amp;q=218+Thomas+St,+Newark,+NJ+07114&amp;s=AARTsJosUXHCYYIUhFORtStH9doGfNr2Wg&amp;sll=40.721201,-74.171419&amp;sspn=0.032744,0.076561&amp;view=map&amp;hq=&amp;hnear=218+Thomas+St,+Newark,+Essex,+New+Jersey+07114&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
      </div>
