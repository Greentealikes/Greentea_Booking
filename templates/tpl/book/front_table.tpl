
<{if $bookpage == 3}>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">姓名</th>
          <th scope="col">電話</th>
          <th scope="col">信箱</th>
          <th scope="col">區域</th>
          <th scope="col">入住日期</th>
          <th scope="col">退房日期</th>
          <th scope="col">人數</th>
          <th scope="col">種類</th>
          <th scope="col">備註</th>      
      </tr>
      </thead>
      <tbody>    
        <{if $row}>
          <script>
          window.onload = function(){
              Swal.fire({
              //position: 'top-end',
              icon: 'success',
              title: "線上預訂成功",
              showConfirmButton: false,
              timer: 3000
              })
          }
        </script>
          <tr>
              <td><{$row.usname}></td>
              <td><{$row.usphone}></td>
              <td><{$row.usemail}></td>
              <td><{$row.usarea}></td>
              <td><{$row.datein}></td>
              <td><{$row.dateout}></td>
              <td><{$row.usnum}></td>
              <td><{$row.ustype}></td>
              <td><{$row.usadd}></td>
          </tr>
        <{else}>
          <tr>
            <td colspan=9>查無此資料</td>
          </tr>
        <{/if}>
    </tbody>
  </table>
 
<{/if}>

  