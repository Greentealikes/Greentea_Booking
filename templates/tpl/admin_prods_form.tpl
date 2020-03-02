<{if $book == "prods_update_form"}>
 <div class="container mt-5" >
    <h1 class="text-center">房型資料表</h1>
    <form action="userprods.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
               
        <div class="col-sm-4">
          <div class="form-group">
          <label>名稱</label>
          <input type="text" class="form-control" name="title" id="title" value="<{$row.title}>" >
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
          <label>分類</label>
          <input type="text" class="form-control" name="kind_sn" id="kind_sn" value="<{$row.kind_sn}>" >
          </div>
        </div> 
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">狀態</label>
            <input type="radio" name="enable" id="enable" value="1" <{if $row.enable=='1'}>checked<{/if}>>
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            
            <input type="radio" name="enable" id="enable" value="0" <{if $row.enable=='0'}> checked <{/if}>>
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>  

        <div class="col-sm-4">
          <div class="form-group">
          <label>建立時間</label>
          <input type="text" class="form-control" name="date" id="date" value="<{$row.date}>" readonly>
          </div>
        </div> 
        
        <div class="col-sm-12">
          <div class="form-group">
          <label>房型內容</label>
          <textarea class="form-control" name="content" id="content"  placeholder="No more than 100 words."
            rows="4" cols="40" value=""><{$row.content}></textarea>        
          </div>
        </div> 

        <!-- ckeditor -->
        <script src="<{$xoAppUrl}>class/ckeditor/ckeditor.js"></script>
        <script>
              CKEDITOR.replace('content',{
                    height:200,
                    contentsCss: ['<{$xoImgUrl}>css/creative.css'] //引入前台樣板css
                });
        </script>
         
       
        <div class="col-sm-12 text-left ">
          <input type="hidden" name="sn" value="<{$row.sn}>">
          <input type="hidden" name="book" id="book" value="prods_update">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userprods.php?book=prods_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>
<{/if}>

<{if $book == "prods_list"}>
  <table class="table table-striped table-bordered table-hover table-sm tablesorter"  id="myTable" >
    <thead>
    <tr>
      <th scope="col">名稱</th>
      <th scope="col">分類</th>
      <th scope="col">狀態</th>   
      <th scope="col" class="text-center">
          <a href="userprods.php?book=prods_insert_form"><i class="fas fa-plus-square"></i>新增</a>
      </th>
      <tbody>
      <{foreach $rows as $row}>
        <tr>
            <td><{$row.title}></td>
            <td><{$row.kind_sn}></td>
            <td><{if $row.enable}><i class="fas fa-check"></i><{/if}></td>
              
            <td>
            <a href="userprods.php?book=prods_update_form&sn=<{$row.sn}>"><i class="far fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="prods_delete(<{$row.sn}>);"><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
      <{foreachelse}>
        <tr>
          <td colspan=4>目前沒有資料</td>
        </tr>
      <{/foreach}>
    </tbody>
    </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <!-- sweetalert2 -->
    <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
    <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
    <script>
        function prods_delete(sn){
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
                    document.location.href="userprods.php?book=prods_delete&sn="+sn;
                }
            })
        }
    </script>
<{/if}>

<{if $book == "prods_insert_form"}>
  <div class="container mt-5" >
    <h1 class="text-center">房型新增資料表</h1>
    <form action="userprods.php" method="post" id="bookreg" class="mb-20" enctype="multipart/form-data">
      <div class="row">         
               
        <div class="col-sm-4">
          <div class="form-group">
          <label>名稱</label>
          <input type="text" class="form-control" name="title" id="title"  >
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
          <label>分類</label>
          <input type="text" class="form-control" name="kind_sn" id="kind_sn" >
          </div>
        </div> 
        
        <div class="col-sm-4">
          <div class="form-group">
            <label style="display:block;">狀態</label>
            <input type="radio" name="enable" id="enable" value="1">
            <label for="enable_1" style="display:inline;">啟用</label>&nbsp;&nbsp;
            
            <input type="radio" name="enable" id="enable" value="0">
            <label for="enable_0" style="display:inline;">停用</label>
          </div>
        </div>  

        <div class="col-sm-6">
          <div class="form-group">
          <label>內容</label>
          <input type="text" class="form-control" name="content" id="content" >
          </div>
        </div> 
       
        <div class="col-sm-12 text-left ">
          <input type="hidden" name="book" id="book" value="prods_insert">
          <button type="submit" class="btn btn-primary">送出</button>
          <a class="btn btn-danger" href="userprods.php?book=prods_list" role="button">返回</a>
        </div>
      </div>
    </form>
  </div>
<{/if}>

<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
<link rel="stylesheet" href="<{$xoAppUrl}>class/tablesorter/css/theme.blue.min.css"></link>
<script type="text/javascript" src="<{$xoAppUrl}>class/tablesorter/jquery.tablesorter.min.js"></script>
<script>
  $("#myTable").tablesorter({
  theme: "blue",
  widgets: ['zebra']
  });
</script>
