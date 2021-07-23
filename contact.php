<?php 
	include ('header2.php');
?>
</section>

<section class="s-content s-content--narrow">
	
	<div class="container">    
        <h2>Contact Info</h2>
    	</br>
		<p>nursahidaryasuyudi@gmail.com<br>
        <p>Phone: 6281257371736</p>
        </br></br>
		<h3>Say Hello.</h3>

                <form name="cForm" id="cForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                        </div>

                        <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                        </div>

                        <div class="form-field">
                            <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                        </div>

                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary full-width">Submit</button>

                    </fieldset>
                </form>
</br></br></br>
	<a href="index.php"><img srcset="images/panah-kiri.jpg" style="margin-top:80px;width: 100px"></a>
      </br></br>
     </div> 
</section>



<?php 
	include ('footer.php');
?>