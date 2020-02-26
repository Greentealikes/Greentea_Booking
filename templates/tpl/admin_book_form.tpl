
<{if $book == "book_list"}>
   <table class="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
      <th scope="col">顧客姓名</th>
      <th scope="col">顧客電話</th>
      <th scope="col">顧客email</th>
      <th scope="col">入住時間</th>
      <th scope="col">退房時間</th>
      <th scope="col">人數</th>
      <th scope="col">訂房種類</th>     
      <th scope="col">功能</th>
    </tr>
    </thead>
    <tbody>
      <{foreach $rows as $row}>
        <tr>
            <td><{$row.usname}></td>
            <td><{$row.usphone}></td>
            <td><{$row.usemail}></td>
            <td><{$row.datein}></td>
            <td><{$row.dateout}></td>
            <td><{$row.usnum}></td>
            <td><{$row.ustype}></td>           
            <td>
            <a href="userbook.php?book=book_form&usid=<{$row.usid}>"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="op_delete(<{$row.usid}>);"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
      <{foreachelse}>
        <tr>
          <td colspan=8>目前沒有資料</td>
        </tr>
      <{/foreach}>
    </tbody>
  </table>
<!-- sweetalert2 -->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
    <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
    <script>
        function op_delete(usid){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="userbook.php?book=book_delete&usid="+usid;
                }
            })
        }
    </script>

<{/if}>


<{if $book == "book_form"}>    
  <div class="container mt-5" >
    <h1 class="text-center">預約訂房資料表</h1>
    <form action="userbook.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
        <!--姓名-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" name="usname" id="usname" value="<{$row.usname}>" readonly>
          </div>
        </div> 

        <!--電話-->              
        <div class="col-sm-3">
          <div class="form-group">
          <label>電話</label>
          <input type="text" class="form-control" name="usphone" id="usphone" value="<{$row.usphone}>"readonly>
          </div>
        </div> 

        <!--信箱-->              
        <div class="col-sm-6">
          <div class="form-group">
          <label>信箱</label>
          <input type="text" class="form-control" name="usemail" id="usemail" value="<{$row.usemail}>"readonly>
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>入住時間</label>
          <input type="text" class="form-control" name="ordatein" id="ordatein" value="<{$row.datein}>"readonly>
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>退房時間</label>
          <input type="text" class="form-control" name="ordateout" id="ordateout" value="<{$row.dateout}>"readonly>
          </div>
        </div> 
        
        <div class="col-sm-3">
          <div class="form-group">
          <label>人數</label>
          <input type="text" class="form-control" name="usnum" id="usnum" value="<{$row.usnum}>">
          </div>
        </div> 

        <div class="col-sm-3">
          <div class="form-group">
          <label>種類</label>
          <input type="text" class="form-control" name="ustype" id="ustype" value="<{$row.ustype}>">
          </div>
        </div> 

     

        <div class="col-sm-6">
          <div class="form-group">
          <label>區域</label>
          <input type="text" class="form-control" name="usarea" id="usarea" value="<{$row.usarea}>"readonly>
          </div>
        </div> 

        <div class="col-sm-12">
          <div class="form-group">
          <label>備註</label>
          <textarea class="form-control" name="usadd" id="usadd" 
            rows="5" cols="40"><{$row.usadd}></textarea>        
          </div>
        </div> 

        <div class="text-center pb-20">
        <input type="hidden" name="book" value="book_update">
        <input type="hidden" name="usid" value="<{$row.usid}>">
        <button type="submit" class="btn btn-primary">送出</button>
        </div>
      </div>
    </form>
  </div>

  <script src="<{$xoImgUrl}>js/typed.js"></script>
  <script>
    !function ($) {
      var typed = new Typed('.typed-words', {
        strings: ["Business", " Startups", " Organization", " Company"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      })
    };
  </script>

  <script src="<{$xoImgUrl}>js/jquery-3.3.1.min.js"></script>
  <script src="<{$xoImgUrl}>js/jquery.validate.min.js"></script>
  <script>
    $(function(){
      $("#bookreg").validate({
        submitHandler: function(form) {
        form.submit();},
      rules: {
        'uname':{
          required: true}},
          
      messages: {
        'uname' : {
          required: "必填"}}        
        }
      );
    });
  </script>
<{/if}>

