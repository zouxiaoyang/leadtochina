var canSubmit = false;
    $(function(){
       $('input[vtype]').each(function(){
            var vtype = $(this).attr('vtype');
            var compareId = $(this).attr('compareId');
            var text = $(this);
            $(this).initDom(vtype);
            $(this).focus(function(){
                text.edit(text);
            });
            $(this).blur(function(){
                text.check(vtype,compareId,text);
            });
        });
    })
    
    $.fn.extend({
        // 初始化dom元素
        initDom : function(vtype){
            $(this).after('<font color="red" style="margin-left: 4px;"></font>');
        },
        
        // 验证
        check: function(vtype, compareId, text){
            // 比较2个控件的value值
            if(isEmpty(compareId)){
                var val = text.val();
                var comPareVal = $('#' + compareId).val();
                if(val != comPareVal || !isEmpty(comPareVal)){
                    text.next().html(text.attr('msg')).show();
                    text.attr('style', 'background-color: #FFFF80');
                    return false;
                }
                $('#' + compareId).next().hide();
                text.removeAttr('style');
                text.next().html(text.attr('msg')).hide();
                return true;
            }
            
            // 非空验证
            if(vtype == 'notNull'){
                var val = text.val();
                if(isEmpty(val)){
                    text.next().html(text.attr('msg')).hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }
            // email验证
            if(vtype == 'email'){
                var regEmail = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
                var email = text.val();
                if(isEmpty(email) && regEmail.test(email) && email.length <= 50){
                    text.next().hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }
            // 数字验证            
            if(vtype == 'integer'){
                var regInteger = /^[0-9]*[1-9][0-9]*$/;
                var val = text.val();
                if(isEmpty(val) && regInteger.test(val) && val.length < 30){
                    text.next().html(text.attr('msg')).hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }
             if(vtype == 'price'){
                var regInteger = /^[0-9]*[.]{0,1}[1-9][0-9]*$/;
                var val = text.val();
                if(isEmpty(val) && regInteger.test(val) && val.length < 30){
                    text.next().html(text.attr('msg')).hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }  
            if(vtype == 'MobilePhone'){
                var regInteger = /^[0-9]*[1-9][0-9]*$/;
                var val = text.val();
                if(isEmpty(val) && regInteger.test(val)){
                    text.next().html(text.attr('msg')).hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }
            if(vtype == 'telPhone'){
                var reg = /(\d{3}-\d{3}-\d{4})|(\d{5,})/;
                var val = text.val();
                if(isEmpty(val) && reg.test(val) && val.length < 30){
                    text.next().html(text.attr('msg')).hide();
                    return true;
                }else{
                    text.next().html(text.attr('msg')).show();
                    return false;
                }
            }
           
           //手机和固定电话2选1验证
          if(vtype=='phone'){
              var reg = /(\d{3}-\d{3}-\d{4})|(\d{5,})/;
              var regInteger = /^[0-9]*[1-9][0-9]*$/;
              var mobileVal=$('#txtMobilePhone').val();
              if( mobileVal=="")
              {
                text.next().html("Please check your Phone Number").show();
                return false;
               }
              else 
              {
                    if(isEmpty(mobileVal))
                    {
                       if(isEmpty(mobileVal)&&regInteger.test(mobileVal)&&mobileVal.length<30)
                       {
                            if(isEmpty(phoneVal)&&reg.test(phoneVal)&&phoneVal.length<30)
                            {
                                text.next().html(text.attr('msg')).hide();
                                return true;
                            }
                        }
                 
                     else 
                        {
                            if(phoneVal=="")
                            {   
                                if(isEmpty(mobileVal)&&regInteger.test(mobileVal)&&mobileVal.length<30)
                                {
                                    $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).hide();
                                     return true;
                                 }
                                else{
                                    
                                        if(mobileVal==""||!(regInteger.test(mobileVal)))
                                        {
                                            $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).show();
                                            text.next().html(text.attr('msg')).hide()
                                            return false;
                                        }
                                    }
                             }
                            else
                            {
                                  if(mobileVal=="")
                                  {
                                    if(!(reg.test(phoneVal)))
                                    {
                                       text.next().html(text.attr('msg')).show();
                                       $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).hide();
                                       return false;
                                          
                                    }
                                  }
                                  else
                                  {
                                    if(reg.test(phoneVal) && regInteger.test(mobileVal))
                                    {                                                                                                         
                                        return true;   
                                    }
                                    else
                                    {
                                      if(!(reg.test(phoneVal)) || !(regInteger.test(mobileVal)))
                                      {
                                  
                                        if(!(reg.test(phoneVal)))
                                        {   
                                            text.next().html(text.attr('msg')).show();
                                            if(!(regInteger.test(mobileVal)))
                                            {
                                                $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).show();
                                                 return false;  
                                            }
                                            else
                                            {
                                                $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).hide();
                                                return false;
                                            }
                                               
                                        }
                                        else
                                        {   
                                            text.next().html(text.attr('msg')).hide();
                                            if(!(regInteger.test(mobileVal)))
                                            {
                                                $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).show();                                                                                   
                                                return false;                                              
                                            }
                                            else
                                            {
                                                $('#txtMobilePhone').next().html($('#txtMobilePhone').attr('msg')).hide();
                                                return false;
                                            }
                                         }
                                                                            
                                      }                                      
                                    }
                                  }
                           }                             
                        }
                    }
             }         
             
           }            
         
        },
        
        // 编辑样式
        edit : function(text){
        }
    });
    
    // 验证非空，非空时返回true
    function isEmpty(val){
        val = (val || "").replace(/^\s+|\s+$/g, "");
        if(val == ""){
            return false;
        }
        return true;
    }
    
    // 表单提交验证
    function checkForm(){
        var returnValue = true;
        $('input[vtype]').each(function(){
            canSubmit = $(this).check($(this).attr('vtype'),$(this).attr('compareId'),$(this));
            if(canSubmit != undefined && canSubmit == false){
                returnValue = false;
            }
        });
        return returnValue;
    }