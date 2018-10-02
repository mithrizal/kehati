<!DOCTYPE html>

<div id="gtco-header" class="gtco-cover gtco-cover-md" >
    <div id="col-main" class="col-xs-2 clearfix contact-wrapper">
        <div class="widget-wrapper">
            <h1>CORPORATE CONTACTS</h1>  
            <div class="contact-content">
                <?php if (isset($message_sys)) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $message_sys; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
                <div class="hidden-xs">
                    <div class="row row-p b-md">
                        <div class="col-xs-4 contact">
                            <h2>HEAD OFFICE</h2>
                            <h3>KEHATI</h3>
                            <p>Griya Bandung Asri 1 Blok E No. 2</p>
                            <p>Bojongsoang – Bandung, 40288</p>
                            <p>tel. +62877-4136-3273</p>
                            <!--<p><a class="contact-email" href="mailto:info@kehati-shoes.com">info@kehati-shoes.com</a></p>-->
                        </div>
                        <div class="col-xs-4 contact">
                            <h2>PRESS</h2>
                            <h3>HERRY</h3>
                            <p><a class="contact-email" href="mailto:kehati.shoes@gmail.com">kehati.shoes@gmail.com</a></p>
                            <!--<p>tel. +1 212.371.7171</p>-->
                        </div>
                        <div class="col-xs-4 contact">
                            <h2>Customer Service</h2>
                            <h3>9 am - 5 pm</h3>
                            <p><a class="contact-email" href="mailto:info@kehati-shoes.com">info@kehati-shoes.com</a></p>
                            <p>whatssap +62877-4136-3273</p>
                        </div>
                    </div>
                </div>
                <div class="visible-xs-block">
                    <div class="row row-p b-md">
                        <div class="col-xs-12 contact">
                            <h2>HEAD OFFICE</h2>
                            <h3>KEHATI</h3>
                            <p>Griya Bandung Asri 1 Blok E No. 2</p>
                            <p>Bojongsoang – Bandung, 40288</p>
                            <p>tel. +62877-4136-3273</p>
                            <!--<p><a class="contact-email" href="mailto:info@kehati-shoes.com">info@kehati-shoes.com</a></p>-->
                        </div>
                        <div class="col-xs-12 contact">
                            <h2>PRESS</h2>
                            <h3>HERRY</h3>
                            <p><a class="contact-email" href="mailto:kehati.shoes@gmail.com">kehati.shoes@gmail.com</a></p>
                            <!--<p>tel. +1 212.371.7171</p>-->
                        </div>
                        <div class="col-xs-12 contact">
                            <h2>Customer Service</h2>
                            <h3>9 am - 5 pm</h3>
                            <p><a class="contact-email" href="mailto:info@kehati-shoes.com">info@kehati-shoes.com</a></p>
                            <p>whatssap +62877-4136-3273</p>
                        </div>
                    </div>
                </div>
                <div class="authenticity text-center">
                    <h3>AUTHENTICITY</h3>
                    <p>Delivering an elegant shoe design that put comfortable as our first priority in many color choices from soft to bright and celebrating feminine as well.</p>
                    <!--<p><a class="contact-email" href="mailto:info@paulandrew.com">info@paulandrew.com</a></p>-->
                    <p>See our full list of authorized retailers <a class="contact-email" href="<?php echo base_url("home/collections"); ?>"><b>here!</b></a></p>
                </div>
                <div class="row general-inquries">
                    <div class="col-md-12" animate-box>
                        <div class="col-md-3">&nbsp;</div>
                        <div class="col-md-6">
                            <h3>GENERAL INQUIRES</h3>
                            <?php
                            $attributes = array(
                                'method' => "post",
                                'id' => 'inquiry',
                                'name' => 'inquiry',
                                'class' => 'form-inline simple-form');
                            echo form_open('home/submitinquiry', $attributes);
                            ?>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Your firstname" required maxlength="60" >
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Your email address" required maxlength="128" >
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="subject">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required maxlength="100" >
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something" required maxlength="1000" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-global">
                                </div>
                            <?php echo form_close(); ?>		
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!--        -->
    </div>
</div>
<!--
<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Keep In Touch</h2>
                <p>Subscribe to hear the latest news from Kehati Shoes.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email...">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-subscribe btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->
