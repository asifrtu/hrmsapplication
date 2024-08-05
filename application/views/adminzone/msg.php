<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Sliding Menu Tiles</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Electrolize' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div id="wrapper">
      <div id="star" class="button dialog-open">
        <i class="icon-star"></i>
      </div>
      <div id="anchor" class="button dialog-open">
        <i class="icon-anchor"></i>
      </div>
      <div id="beaker" class="button dialog-open">
        <i class="icon-beaker"></i>
      </div>
      <div id="bug" class="button dialog-open">
        <i class="icon-bug"></i>
      </div>
    </div>
    <div id="overlay">
      <div id="screen"></div>
      <div id="dialog-star" class="dialog">
        <div class="label-dialog"><i class="icon-star"></i></div>
        <div class="body-dialog">
          <p>The Star dialog is <span>modeless</span>. You can click on the check mark or anywhere outside of the dialog's body to clear it.</p>
        </div>
        <div class="ok-dialog"><i class="icon-ok-sign"></i></div>
      </div>
      <div id="dialog-anchor" class="dialog modal">
        <div class="label-dialog"><i class="icon-anchor"></i></div>
        <div class="body-dialog">
          <p>The Anchor dialog is <span>modal</span>. You must click on the check mark to acknowledge and clear it.</p>
        </div>
        <div class="ok-dialog"><i class="icon-ok-sign"></i></div>
      </div>
      <div id="dialog-beaker" class="dialog">
        <div class="label-dialog"><i class="icon-beaker"></i></div>
        <div class="body-dialog">
          <p>The Beaker dialog is <span>modeless</span>. You can click on the check mark or anywhere outside of the dialog's body to clear it.</p>
        </div>
        <div class="ok-dialog"><i class="icon-ok-sign"></i></div>
      </div>
      <div id="dialog-bug" class="dialog modal">
        <div class="label-dialog"><i class="icon-bug"></i></div>
        <div class="body-dialog">
          <p>The Bug dialog is <span>modal</span>. You must click on the check mark to acknowledge and clear it.</p>
        </div>
        <div class="ok-dialog"><i class="icon-ok-sign"></i></div>
      </div>
    </div>
  </body>
</html>