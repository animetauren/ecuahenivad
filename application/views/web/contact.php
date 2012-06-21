 <div class="container">

      <div class="row">
        <div class="span12">
          <h1>Contact Us</h1>
          <p></p>
        </div>
      </div>
        <hr>
        <div class="row">

<!--         <div align="center" class="span4">
        </br>
          <br>218 Thomas St
          <br>Newark, NJ 07114
          <br>by phone: (973)-877-0905 
          <br>by fax: (973)-877-0906
        </div> -->

        <div align="center" class="span12">
          <h2>Ecua Henivad Body Shop</h2>
          218 Thomas St
          <br>Newark, NJ 07114
          <br>by phone: (973)-877-0905 
          <br>by fax: (973)-877-0906
        </div>

<!--         <div align="center" class="span4">
        </br>
          <br>218 Thomas St
          <br>Newark, NJ 07114
          <br>by phone: (973)-877-0905 
          <br>by fax: (973)-877-0906
        </div> -->

      </div>
  </div>
          <hr>
          <div class="container">

<?php echo validation_errors(); ?>

<?php echo form_open('../contacts'); ?>

          <div class="row">
        <div class="span6">
          <h2>Send us a message</h2>
          <form>
            <label>Name*</label>
            <input type="text" class="span6" name="name" value="<?php echo set_value('name'); ?>" placeholder="Your Name">
            <label>Email Address*</label>
            <input  type="text" class="span6" name="email" value="<?php echo set_value('email'); ?>" placeholder="youremail@email.com">
            <label>Phone Number</label>
            <input  type="text" class="span6" name="phonenum"  placeholder="eg. 555-555-5555">
            <label>Message*</label>
            <textarea class="input span6" id="textarea" rows="6" value="<?php echo set_value('message'); ?>" name="message" placeholder="Type your message here."></textarea>
            <br>
            <div><input type="submit" value="Submit" /></div>
          </form>
        </div>

        <div class="span4">
          <h2>Visit us</h2>
        <iframe frameborder="0" height="350"  width="480" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?f=q&amp;geocode=&amp;hl=en&amp;ie=UTF8&amp;q=218+Thomas+St,+Newark,+NJ+07114&amp;s=AARTsJosUXHCYYIUhFORtStH9doGfNr2Wg&amp;sll=40.721201,-74.171419&amp;sspn=0.032744,0.076561&amp;view=map&amp;hq=&amp;hnear=218+Thomas+St,+Newark,+Essex,+New+Jersey+07114&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
      </div>
   
