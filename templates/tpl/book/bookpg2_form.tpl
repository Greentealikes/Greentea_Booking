
<head>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<style>
  .error{
    color:red;
}
</style>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
          <div class="list-group" id="list-tab" role="tablist">
            <li class="list-group-item item-title"><stong>線上預訂系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item "><stong>預定系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2">
              <li class="list-group-item item-mark"><stong>填寫表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
              <li class="list-group-item "><stong>完成表單</stong></li>
            </a>
             <li class="list-group-item item-title"><stong>查詢系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
              <li class="list-group-item"><stong>住宿查詢</stong></li>
            </a>
        </div>
      </div>  

      <div class = "col-9">   
      
        <form action="Onbooking.php?pageid=3&bookpage=3" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
         <div class = "row book-container text-center ">
              <div class="col-sm-12 title-font book_all_title">
                  <i class="fas fa-angle-double-right"></i>
                  <span>填寫表單</span>
              </div>
          <div class="col-sm-12 alert alert-secondary book_all_body">         
              <div class = "book-form-title"> 個人資料表單</div>   

            <div class="row container book-form_body"> 
              <div class="col-sm-6">
                <div class="form-group">
                  <label>姓名<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usname" name="usname" autocomplete="off">
                </div>
              </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>電話<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usphone" name="usphone" autocomplete="off">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>電子郵件 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usemail" name="usemail" autocomplete="off">
              </div>
            </div> 

            <div class="col-sm-6">
              <div class="form-group">
                <label>地區 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="usarea" name="usarea" autocomplete="off" placeholder="(縣市)/(區)">
              </div>
            </div> 

            <div class="col-sm-6">
              <div class="form-group datetest" id="datetimepicker11">
                <label>入房時間<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="datein" name="datein" autocomplete="off" placeholder="Arrival Date">
              </div>
            </div>  

            <div class="col-sm-6">
              <div class="form-group datetest" id="datetimepicker1">
                <label>退房時間<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="dateout" name="dateout" autocomplete="off"  placeholder="Departure Date">
              </div>
            </div>   
                    
            <div class="col-sm-6">
              <label>人數<span class="text-danger">*</span></label>
              <div class="form-group">   
                <select class="form-control" name="usnum" id="usnum">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>                                 
            </div> 


            <div class="col-sm-6 form-group">
              <label>訂房類型</label><span class="text-danger">*</span">
              <select name="ustypes" id="ustypes" class="form-control">
                <{foreach $kind_rows as $kind_row}>
                  <{if $kind_row.enable==1}>
                    <option value=<{$kind_row.kind_sn}>><{$kind_row.title}></option>
                  <{/if}>
                <{/foreach}>
              </select>
            </div>  

            <div class="col-sm-12">
              <div class="form-group">
                <label class="control-label">備註</label>
                <textarea class="form-control" rows="4" id="usadd" value="" name="usadd" placeholder="No more than 100 words."></textarea>
              </div>
            </div>

            <div class="col-sm-4">
              <div id = 'foo'></div>
            </div>

            <div class="pb-20 amplif-gap">
              <input type="hidden" name="book" value="onlineBook" id="book" >
              <button type="submit" class="btn btn-primary" >確認表單</button>           
            </div>

            <div class="pb-20 amplif-gap">
              <button type="reset" class="btn btn-danger">清除表單</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



