  
<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
            <li class="list-group-item item-title"><stong>預約定房系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item item-mark"><stong>線上系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
              <li class="list-group-item "><stong>填寫表單</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=3" class="activeno">
              <li class="list-group-item "><stong>完成表單</stong></li>
            </a>
             <li class="list-group-item item-title"><stong>查詢系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=4&using=no">
              <li class="list-group-item"><stong>查詢表單</stong></li>
            </a>
        </div>
      </div>  

      <div class = "col-9">   
        <form action="page_sw.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class = "row book-container text-center">
              <div class="col-sm-12 title-font">
                  <span>線上預訂說明</span>
              </div>

              <div class = "col-sm-12 alert alert-secondary body-font ">
                  <span> 為響應環保，愛護地球，不提供盥洗用具(包含毛巾、浴巾、牙刷、牙膏等)，請遊客自行攜帶。<br> </span>
                  <span> 預申請導覽解說，請於15天前電話客服給櫃檯人員，並請詳閱申請須知。<br></span>
                  <span>填寫表單後不代表預約成功，民宿管家將再透過電話或email與您聯絡<br></span>
                  <span>若24小時內未接到我們的聯絡電話，請主動與我們聯絡，不便之處敬請見諒!<br></span> 
                  <span>成功預約後，請於3日內完成訂金匯款，完成匯款後請透過電話告知 09xx-xxx-xxx 。<br></span>

                  <div class="form-check  alert alert-warning ">
                      <input class="form-check-input" type="checkbox" id="Checknorm" >
                      <label class="form-check-label" for="exampleCheck1">我已明確了解規範</label>
                  </div>
              </div>

              <div class = "col-sm-12">
                  <br>
                  <button type="button" class="btn btn-primary" id ="normbtn" 
                    onclick="location.href='page_sw.php?pageid=2&bookpage=2' ">開始線上填單</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
