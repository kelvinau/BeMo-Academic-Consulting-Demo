<?php snippet('header') ?>

  <main class="main" role="main">
  
    <?php snippet('pageimage') ?>

    <section>
        
        <div id="padding">
            <div class="text wrap">
                <?= $page->body_content()->kirbytext() ?>
            </div>
            <div class="message-container">
                <?php if ($form->success()): ?>
                    <div class="sentMessage">
                        Thank you, your email has been sent. We will get back to you shortly.
                    </div>
                <?php else: ?>
                    <div class="message-text">
                        <?php snippet('uniform/errors', ['form' => $form]) ?>
                    </div>
                <?php endif; ?>
            </div>
            <form action="<?php echo $page->url() ?>" method="POST">
                <label>Name: *</label>
                <input class="form-input-field" type="text" name="name" size="40"><br><br>

                <label>Email Address: *</label>
                <input class="form-input-field" type="email" name="email" size="40"><br><br>

                <label>How can we help you? *</label>
                <textarea class="form-input-field" name="message" rows="8" cols="38"></textarea><br><br>

                <?php echo csrf_field() ?>
                <?php echo honeypot_field() ?>
                <div class="btn-container">
                    <input class="form-input-button" type="reset" name="resetButton" value="Reset">
                    <input class="form-input-button" type="submit" name="submitButton" value="Submit">
                </div>
            </form>

            <div class="text wrap footer-msg">
            <?= $page->formfooter()->kirbytext() ?>
            </div>
        </div>
    </section>
  </main>

<?php snippet('footer') ?>