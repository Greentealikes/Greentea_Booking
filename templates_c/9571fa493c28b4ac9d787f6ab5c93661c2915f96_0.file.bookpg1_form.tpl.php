<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 09:50:28
  from 'D:\xampp\htdocs\booking-web_v0301\templates\tpl\book\bookpg1_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5cc8d4dc0861_94583178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9571fa493c28b4ac9d787f6ab5c93661c2915f96' => 
    array (
      0 => 'D:\\xampp\\htdocs\\booking-web_v0301\\templates\\tpl\\book\\bookpg1_form.tpl',
      1 => 1583139024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5cc8d4dc0861_94583178 (Smarty_Internal_Template $_smarty_tpl) {
?>  
<div class="site-wrap" id="home-section">
  <div class="site-section">
    <div class="row">
      <div class = "col-3">   
        <div class="list-group" id="list-tab" role="tablist">
            <li class="list-group-item item-title"><stong>線上預定系統</stong></li>
            <a href = "page_sw.php?pageid=2&bookpage=1">
              <li class="list-group-item item-mark"><stong>預定系統說明</stong></li>
            </a>
            <a href = "page_sw.php?pageid=2&bookpage=2" class="activeno">
              <li class="list-group-item "><stong>填寫表單</stong></li>
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
        <form action="page_sw.php" method="post" id="myForm" class="mb-20" enctype="multipart/form-data">
          <div class = "row book-container text-center ">
              <div class="col-sm-12 title-font book_all_title">
                  <i class="fas fa-angle-double-right"></i>
                  <span>訂房說明</span>                  
              </div>

              <div class = "col-sm-12
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                    <li class="breadcrumb-item"><a href="page_sw.php?pageid=2&bookpage=1">線上預訂</a></li>
                    <li class="breadcrumb-item active" aria-current="page">預定系統說明</li>
                  </ol>
                </nav>
              </div>

              <div class = "col-sm-12 alert alert-secondary book_all_body">
                  <div class="book_description_body_txt">
                    <span><i class="fas fa-braille"></i>訂房說明<br></span>
                    <span>1.	開放訂房時間為入住日期前1個月，當日早上六時開始網路訂房，每次預定每支郵件以1種客房為限。<br></span>
                    <span>2.	非假日的團體訂房，可接受三個月前預訂，請逕洽訂房中心辦理。<br></span>
                    <span>3.	如有預訂上的問題，請撥打06-2200599(德鍵職訓中心)。<br></span>
                    <span>4.  預申請導覽解說，請於15天前電話客服給櫃檯人員，並請詳閱申請須知。<br></span>
                    <span>5.  填寫線上表單後不代表立即預約成功，訂房中心會在1小時內主動聯繫作最後確認<br></span>

                    <span><i class="fas fa-braille"></i>蒐集、處理及利用個人資料告知<br></span>
                    <span>1.	蒐集之目的:<br></span>
                    <span>本處基於住宿訂房及其他基於正當性目的之需要，有權對個人資料蒐集、處理及利用。<br></span>
                    <span>2.	蒐集之個人資料類別:<br></span>
                    <span>姓名、身分證統一編號、聯絡方式等。<br></span>
                    <span>3.	個人資料利用之期間、地區、對象及方式:<br></span>
                    <span>(1)期間:個人資料蒐集之特定目的存續期間、依相關法令或契約約定之保存所訂保存年限或本處執行業務所必須之保存期間。<br></span>
                    <span>(2)地區:本處、本處分支機構所在地、本處業務委外機構所在地、與本處有業務往來之機構處所所在地、除蒐集之目的涉及駐外或國際之業務或活動外，本處僅於中華民國領域內利用台端之個人資料。<br></span>
                    <span>(3)對象:本處、本處分支機構、業務委外機構、其他與本處有業務往來之機構、依法有調查權機關或主管機關。<br></span>
                    <span>(4)方式:以自動化機器或其他非自動化之利用方式。<br></span>
                    <span>4.	依個人資料保護法第三條規定，台端就本處保有台端之個人資料得行使下列權利，連絡窗口06-2200599#德鍵職訓中心<br></span>
                    <span>(1)得向本處查詢、請求閱覽或請求製給複製本。<br></span>
                    <span>(2)得向本處請求補充或更正，惟台端應依法適當釋明其原因及事實。<br></span>
                    <span>(3)得相本處請求停止蒐集、處理或利用及請求刪除，惟依法本處因執行業務所必須者，得不依台端請求為之。<br></span>
                    <span>5.	台端不提供個人資料所致權益之影響:<br></span>
                    <span>台端得自由選擇是否提供相關個人資料，惟台端若拒絕提供相關個人資料，或提供之資料不足或有誤時，本處將無法進行必要之審核及處理作業，致無法提供台端相關完整服務，亦可能無法維護台端權益。<br></span>
                    <span><i class="fas fa-braille"></i>其他告知<br></span>
                    <span> 為響應環保，愛護地球，不提供盥洗用具(包含毛巾、浴巾、牙刷、牙膏等)，請遊客自行攜帶。<br> </span>
                    <span> 以上文字皆是參考國家森林遊樂區網路訂房系統，實際規定還是以業者自行決定<br></span>
                  </div> 

                  <div class="form-check alert alert alert-info ">
                      <input class="form-check-input" type="checkbox" id="Checknorm" onclick="normok()">
                      <label class="form-check-label" for="exampleCheck1">我已明確了解規範</label>
                  </div>                
              </div>
              
              <div class = "col-sm-12 book_description_btn">
                  <button type="button" class="btn btn-primary" id ="normbtn" 
                    onclick="location.href='page_sw.php?pageid=2&bookpage=2'" disabled>開始線上填單</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>
  function normok() {
    var Checknorm = document.getElementById("Checknorm");
    var normbtn = document.getElementById("normbtn");
    if (Checknorm.checked == true){
      normbtn.disabled = false;
    } else {
      normbtn.disabled = true;
    }
  }
<?php echo '</script'; ?>
>


<?php }
}