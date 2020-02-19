  
<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group " id="list-tab" role="tablist">
          <a href = "page_sw.php?pageid=2&bookpage=1">
            <li class="list-group-item btn-hold"><stong>線上系統說明</stong></li>
          </a>

          <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
            <li class="list-group-item "><stong>填寫表單</stong></li>
          </a>

          <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
            <li class="list-group-item"><stong>完成表單</stong></li>
          </a>

          <a href = "page_sw.php?pageid=2&bookpage=4" class="activeno">
            <li class="list-group-item"><stong>查詢表單</stong></li>
          </a>

          <{if $smarty.session.admin}>
          <a href = "page_sw.php?pageid=2&bookpage=4">
            <li class="list-group-item"><stong>刪除表單</stong></li>
          </a> 
          <{/if}>
        </div>
      </div>  

      <{* 線上預訂畫面內容 *}>
      <div class = "col-9">   
        <form action="Onbooking.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class = "row book-container text-center">
              <div class="col-sm-12 title-font">
                  <span>線上預訂說明</span>
              </div>

              <div class = "col-sm-12 alert alert-secondary body-font">
                  <span>歡迎透過下列表單向民宿管家確認住宿日期及房型。<br></span>
                  <span>填寫表單後不代表預約成功，民宿管家將再透過電話或email與您聯絡<br></span>
                  <span>若24小時內未接到我們的聯絡電話，請主動與我們聯絡，不便之處敬請見諒!<br></span> 
                  <span>成功預約後，請於3日內完成訂金匯款，完成匯款後請透過電話告知 09xx-xxx-xxx 。<br></span>
                  <div class="form-check  alert alert-warning ">
                      <input type="checkbox" class="form-check-input" id="Checknorm">
                      <label class="form-check-label" for="exampleCheck1">我已明確了解規範</label>
                  </div>
              </div>

              <div class = "col-sm-12">
                  <br>
                  <button type="button" class="btn btn-primary" id ="normbtn" 
                    onclick="location.href='page_sw.php?pageid=2&bookpage=2'">開始線上填單</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
