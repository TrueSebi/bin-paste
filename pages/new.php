<?php

/* 'New Paste' Page */

echo '
    <div class="container">

      <h1>Paste now!</h1>
      <form name="MyForm" action="response_ajax.php" method="post" onsubmit="xmlhttpPost(\'response_ajax.php\', \'MyForm\', \'MyResult\', \'<img src=\\\'./pleasewait.gif\\\'>\'); return false;">
          <textarea name="paste" style="width: 100%; height: 75%;" class="input-xlarge" id="textarea" rows="33"></textarea>
          <button type="submit" class="btn btn-primary">Paste now & Copy your shell link!</button>  
      </form>
      <div style="max-width: 99%;" id="MyResult"></div>

    </div> <!-- /container -->';
?>