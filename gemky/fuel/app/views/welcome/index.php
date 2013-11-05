<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FuelPHP Framework</title>
  <?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('header.css'); ?>
	<?php echo Asset::css('login.css'); ?>
</head>
<body>
  <div class="top_container">
  <header>
    <?php echo Asset::img('logo.png', array('height'=>'100%', 'alt'=>'gemky')); ?>
  </header>
    <ul class="pop_btn">
      <li>
        <h2><a href="http://localhost/auth/login/facebook">facebook</a></h2>
      </li>
    </ul>
    
    <table>
      <tr>
          <td width="50%">
            <hr color="grey" size="5px">
          </td>
          <td>or</td>
          <td width="50%">
          <hr color="grey" size="5px">
          </td>
      </tr>
    </table>
    
    <div class="login">
      <form class="login_form" action="#" method="post">
        <input name="name" type="text" value="" placeholder="アカウント名" /><br>
        <input name="password" type="text" value="" placeholder="パスワード" /><br>
        <input type="submit" value="ログイン" />
      </form>
    </div>
  </div>
  </div>
</body>
</html>
