<div class = "col-3">   
    <div class="list-group" id="list-tab" role="tablist">
        <li class="list-group-item item-title"><stong>線上預定系統</stong></li>
        <a href = "Onbooking.php?book=book_descrn_form">
            <li class="list-group-item <{if $bookpage==1}>item-mark  <{/if}>">            
            <stong>預定系統說明</stong></li>
        </a>
        <a href = "Onbooking.php?book=booking_form" class="activeno">
            <li class="list-group-item <{if $bookpage==2}>item-mark  <{/if}>"><stong>填寫表單</stong></li>
        </a>
        <a href = "Onbooking.php?book=booking_result_form" class="activeno">
            <li class="list-group-item <{if $bookpage==3}>item-mark  <{/if}>"><stong>完成表單</stong></li>
        </a>
            <li class="list-group-item item-title"><stong>查詢系統</stong></li>
        <a href = "Onbooking.php?book=booking_query_form&using=no">
            <li class="list-group-item <{if $bookpage==4}>item-mark  <{/if}>"><stong>住宿查詢</stong></li>
        </a>
    </div>
</div>  