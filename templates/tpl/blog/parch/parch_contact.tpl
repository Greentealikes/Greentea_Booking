<div class="container mt-5" style="margin-top:100px!important;">
    <h1 class="text-center" >預約城苑行旅交誼廳親子手做活動</h1>
    
<!-- 表單返回頁，記得在表單加「 target='returnWin' 」 -->
<iframe name="returnWin" style="display: none;" onload="this.onload=function(){window.location='parch.php'}"></iframe>

<form target='returnWin' role="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfdgg6MepL_CMhhFlOtqzp0GmaD6CHiDkEvungqdOPQQSO77A/formResponse" method="post" id="parchForm" >
    
    <div class="row">
        <!--姓名-->              
        <div class="col-sm-4">
            <div class="form-group">
                <label><span class="title">姓名</span><span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="entry.102161246" id="name" value="">
            </div>
        </div>
        <!--電話-->              
        <div class="col-sm-4">
            <div class="form-group">
                <label><span class="title">電話</span><span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="entry.1984961468" id="tel" value="">
            </div>
        </div>
        <!--email-->              
        <div class="col-sm-4">
            <div class="form-group">
                <label><span class="title">email</span><span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="entry.1219003357" id="email" value="">
            </div>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-sm-12">  
            <!-- 聯絡事項 -->
            <div class="form-group">
                <label class="control-label">預約項目1</label>
                <textarea class="form-control" rows="5" id="contact" name="entry.1838347097"></textarea>
            </div>
            
        </div>
    </div>

    <div class="text-center pb-3">
        <button type="submit" class="btn btn-primary">送出</button>
    </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

<style>
    .error{
        color:red;
    } 
</style>

<script>
    $(function(){
        $("#parchForm").validate({
            submitHandler: function(form){  
            form.submit();
            },
            rules:{        
                'entry.102161246':{
                required: true
                },    
                'entry.1984961468':{
                required: true
                },
                'entry.1219003357':{
                required: true
                },
                'entry.1838347097':{
                required: true
                }
            },
            messages:{
                'entry.102161246':{
                    required: "必填"
                    },
                
                'entry.1984961468':{
                    required: "必填"
                    },
                'entry.1219003357':{
                    required: "必填"
                    },
                'entry.1838347097':{
                    required: "必填",
                    email:"請填正確電子郵件"
                    }    
            }
    });
    });
 </script>
