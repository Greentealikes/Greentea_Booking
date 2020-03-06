
<style>
  .breadcrumb li a{
    color:#930;
  }
</style> 

<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <{include file="tpl/book/book_nav.tpl"}> 
      <div class = "col-sm-8 col-12"> 
        <form action="Onbooking.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class = "row book-container text-center ">                 
            <div class="col-sm-12 title-font book_all_title">
              <i class="fas fa-angle-double-right"></i>
              <span>完成表單</span>
            </div>

            <div class = "col-sm-12
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                  <li class="breadcrumb-item"><a href="page_sw.php?pageid=2&bookpage=1">線上預訂</a></li>
                  <li class="breadcrumb-item active" aria-current="page">完成表單</li>
                </ol>
              </nav>
            </div>    

            <div class="col-sm-12 alert alert-secondary book_all_body">   
              <div class = "book-form-title"> 完成線上預訂</div>   
              <div class="row container book-form_body">               
                <{include file="tpl/book/front_table.tpl"}>    
              </div>
            </div>    

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 