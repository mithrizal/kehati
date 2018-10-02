<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <!--<h2>Keep In Touch</h2>-->
                <h3 class="footer-widget">Keep In Touch</h3>
                <p>Subscribe to hear the latest news from Kehati Shoes.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <?php
                $attributes = array(
                    'method' => "post",
                    'id' => 'subscribe',
                    'name' => 'subscribe',
                    'class' => 'form-inline');
                echo form_open('home/submitsubscribe', $attributes);
                ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="128" placeholder="Your Email...">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-subscribe btn-block">Subscribe</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
