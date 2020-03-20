
<head>  
  <link rel="stylesheet" href="<{$xoImgUrl}>css/jquery-ui-1-11-4.css">
</head>

<style>
  .error{
    color:red;
}
</style>

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">    
      <{include file="tpl/book/book_nav.tpl"}> 
      <div class = "col-sm-8 col-12"> 
        <form action="Onbooking.php?pageid=3&bookpage=3" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
         <div class = "row breadcrumb-container text-center ">
            <div class="col-sm-12 title-font book_all_title">
                <i class="fas fa-angle-double-right"></i>
                <span>填寫表單</span>
            </div>

              <div class = "col-sm-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                    <li class="breadcrumb-item"><a href="Onbooking.php?book=booking_form">線上預訂</a></li>
                    <li class="breadcrumb-item active" aria-current="page">填寫表單</li>
                  </ol>
                </nav>
              </div>

            <div class="col-sm-12 alert alert-secondary book_all_body">         
              <div class = "book-form-title"> 個人資料表單</div>
              <div class="row container book-form_body"> 
                <div class="col-sm-6 col-12">
                  <div class="form-group">
                    <label>預約者姓名<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="usname" name="usname" autocomplete="off">
                  </div>
                </div>

              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <label>聯繫電話<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usphone" name="usphone" autocomplete="off">
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <label>聯繫郵件 <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usemail" name="usemail" autocomplete="off">
                </div>
              </div> 

              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <label>聯繫地址<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usarea" name="usarea" autocomplete="off" placeholder="(縣市)/(區)">
                </div>
              </div> 

              <div class="col-sm-6 col-12">
                <div class="form-group datetest" id="datetimepickerb1">
                  <label>入房時間<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="datein" name="datein" autocomplete="off" placeholder="Arrival Date">
                </div>
              </div>  

              <div class="col-sm-6 col-12">
                <div class="form-group datetest" id="datetimepickerb2">
                  <label>退房時間<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="dateout" name="dateout" autocomplete="off"  placeholder="Departure Date">
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <label>預約訂房總人數<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="usnum" name="usnum" autocomplete="off"  placeholder="1-20">
                </div>
              </div>

              <div class="col-sm-6 col-12 form-group">
                <label>訂房類型</label>
                <select class="wide" name="ustypes" id="ustypes">
                 <{foreach $kind_rows as $kind_row}>
                    <{if $kind_row.enable==1}>
                      <option value=<{$kind_row.kind_sn}>><{$kind_row.title}></option>
                    <{/if}>
                  <{/foreach}>
                </select>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label">備註欄</label>
                  <textarea class="form-control" rows="4" id="usadd" value="" name="usadd" placeholder="No more than 100 words."></textarea>
                </div>
              </div>

              <div class="col-sm-4 col-12">
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





