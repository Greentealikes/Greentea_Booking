 
<div class="site-section">
  <div class="row">
    <{include file="tpl/book/book_nav.tpl"}>      

    <div class = "col-9">   
      <form action="Onbooking.php?bookpage=4&#myForm" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
        <div class="row book-container text-center ">
          <div class="col-sm-12 title-font book_all_title">
            <i class="fas fa-angle-double-right"></i>
            <span>住宿查詢</span>
          </div>

          <div class = "col-sm-12
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="page_sw.php?pageid=2&bookpage=1">線上預訂</a></li>
                <li class="breadcrumb-item active" aria-current="page">住宿查詢</li>
              </ol>
            </nav>
          </div>   
           
          <div class="col-sm-12 alert alert-secondary book_all_body">       
            <div class = "book-form-title">住宿查詢</div> 

            <div class="row container book-body">           
              <div class="col-sm-6 ">
                <div class="form-group">
                  <label>使用電子郵件查詢<span class="text-danger">*</span></label>
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
 

  

  
