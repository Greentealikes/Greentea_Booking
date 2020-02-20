<table class="table table-striped table-bordered table-hover table-sm">
    <thead>
    <tr>
        <th scope="col">Username</th>
        <th scope="col">Userphone</th>
        <th scope="col">Useremail</th>
        <th scope="col">Userarea</th>
        <th scope="col">Datein</th>
        <th scope="col">Dateout</th>
        <th scope="col">Usernum</th>
        <th scope="col">Usertype</th>
        <th scope="col">Useradd</th>      
    </tr>
    </thead>
    <tbody>    
      <{foreach $rows as $row}>
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
      <{foreachelse}>
        <tr>
          <td colspan=9>查無此資料</td>
        </tr>
      <{/foreach}>
    </tbody>
  </table>