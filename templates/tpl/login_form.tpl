
  <head>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  
  <div class="login_interval">
    <form class="form-signin" action="page_sw.php?op=login" method="post">
        <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
        <div class="mb-3" style="margin:10px 0px; ">
          <label for="uname" class="sr-only">帳號</label>
          <input type="text" name="uname" id="uname" class="form-control" placeholder="請輸入帳號"  required>
        </div>
        <div class="mb-3">
          <label for="pass" class="sr-only">密碼</label>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
        </div>
            
        <div class="checkbox mb-3">
          <label>
          <input type="hidden" name="op" value="login" id="op">
          <input type="checkbox" name="remember" id="remember"> 記住我
          </label>             
        </div>               
                
        <button class="btn btn-lg btn-primary btn-block" type="submit">會員登入</button>
        <div>
          您還沒還沒註冊嗎？請 <a href="page_sw.php?op=reg_form&pageid=6">點選此處註冊您的新帳號</a>。
        </div>
    </form>
  </div>        
  <!--<h2><{$op}></h2>-->
  