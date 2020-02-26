 
<div class="site-section">
  <div class="row">
    <div class = "col-3">   
      <div class="list-group" id="list-tab" role="tablist">
       <li class="list-group-item item-title"><stong>線上預定系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=1">
        <li class="list-group-item "><stong>預定系統說明</stong></li>
        </a>
                  
        <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
        <li class="list-group-item"><stong>填寫表單</stong></li>
        </a>

        <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
        <li class="list-group-item"><stong>完成表單</stong></li>
        </a>
        <li class="list-group-item item-title"><stong>查詢系統</stong></li>
        <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
        <li class="list-group-item item-mark"><stong>住宿查詢</stong></li>
        </a>
      </div>
    </div>  
              
    <div class = "col-9">   
      <form action="Onbooking.php?bookpage=4" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
        <div class="row book-container text-center ">
          <div class="col-sm-12 title-font book_all_title">
            <i class="fas fa-angle-double-right"></i>
            <span>住宿查詢</span>
          </div>

          <div class="col-sm-12 alert alert-secondary book_all_body">       
            <div class = "book-form-title">住宿查詢</div> 

            <div class="row container book-body"> 
              <div class="col-sm-6">
                <div class="form-group">
                  <label>姓名<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Inquirname" name="Inquirname">
                </div>
              </div>

              <div class="col-sm-6 ">
                <div class="form-group">
                  <label>電子郵件 <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="Inquiremail" name="Inquiremail">
                </div>
              </div> 

              <input type="hidden" name="book" value="visitbook" id="book">
              <div class="col-sm-12">
                <{include file="tpl/book/front_table.tpl"}>   
              </div>

              <div class="col-sm-12 ">
                <div class="pb-20 amplif-gap">
                  <input type="hidden" name="using" value="yes" id="using">
                  <button type="submit" class="btn btn-primary ">查詢</button>
                </div>
              </div>
               </div> 
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
 

  

  
