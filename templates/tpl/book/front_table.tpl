<{if $bookpage == 3}>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">預訂者姓名</th>
          <th scope="col">聯繫電話</th>
          <th scope="col">聯繫信箱</th>
          <th scope="col">聯繫地址</th>
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
          </tr>
        <{else}>
          <tr>
            <td colspan=4>查無此資料</td>
          </tr>
        <{/if}>
    </tbody>
    <thead>     
      <tr> 
        <th scope="col">入住日期</th>
        <th scope="col">退房日期</th>
        <th scope="col">預約訂房總人數</th>
        <th scope="col">訂房類型</th>
      </tr>      
    </thead>    
    <tbody>   
      <{if $row}> 
        <tr>
            <td><{$row.datein}></td>
            <td><{$row.dateout}></td>
            <td><{$row.usnum}></td>
            <td><{$kind_row.title}></td>
        </tr>
        <{else}>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <{/if}>      
    </tbody>

    <thead>
      <tr> 
        <th scope="col" colspan=4>備註</th>  
      </tr> 
    </thead>    
    <tbody>   
      <{if $row}> 
        <tr>
          <{if $row.usadd !==""}>
            <td colspan=4><{$row.usadd}></td>
          <{else}>
            <td colspan=4>無備註</td>
          <{/if}>
        </tr>
      <{else}>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <{/if}> 
    </tbody>
  </table>
<{/if}>

<{if $using == yes}>
  <table class="table table-striped table-bordered table-hover table-sm">
      <thead>
      <tr>
          <th scope="col">預訂者姓名</th>
          <th scope="col">聯繫電話</th>
          <th scope="col">聯繫信箱</th>
          <th scope="col">聯繫地址</th>
      </tr>
      </thead>
      <tbody>    
        <{if $row}>         
          <tr>
              <td><{$row.usname}></td>
              <td><{$row.usphone}></td>
              <td><{$row.usemail}></td>
              <td><{$row.usarea}></td>
          </tr>
        <{else}>
          <tr>
            <td colspan=4>查無此資料</td>
          </tr>
        <{/if}>
    </tbody>
    <thead>     
      <tr> 
        <th scope="col">入住日期</th>
        <th scope="col">退房日期</th>
        <th scope="col">預約訂房人數</th>
        <th scope="col">訂房類型</th>
      </tr>      
    </thead>    
    <tbody>   
      <{if $row}> 
        <tr>
            <td><{$row.datein}></td>
            <td><{$row.dateout}></td>
            <td><{$row.usnum}></td>
            <td><{$kind_row.title}></td>
        </tr>
        <{else}>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <{/if}>      
    </tbody>

    <thead>
      <tr> 
        <th scope="col" colspan=4>備註欄</th>  
      </tr> 
    </thead>    
    <tbody>   
      <{if $row}> 
        <tr>
          <td colspan=4>
          <{if $row.usadd !==""}>
            <{$row.usadd}>
          <{else}>
            無備註
          <{/if}>
          </td>
        </tr>
      <{else}>
        <tr>
          <td colspan=4>查無此資料</td>
        </tr>
      <{/if}>
    </tbody>
  </table>
<{/if}>

  