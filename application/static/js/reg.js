$(function () {
       $(".form-horizontal").validate({
           rules:{
               uname:{
                   required:true,
                   minlength:5,
                   remote:{
                       url:"/index.php/admin/reg/checkName",
                       type:"post",
                       data:{
                           uname:function () {
                               return $("input[name=uname]").val()
                           }
                       }
                   }
               },
               pass:{
                   required:true,
                   rangelength:[5,10],
                   equalTo:"#pass1",
               },
               pass1:{
                   required:true,
                   rangelength:[5,10],
                   equalTo:"#pass"
               }
           },
           messages:{
               uname:{
                    required:"用户名没有填写",
                    minlength:"用户名五位以上",
                    remote: "用户名已经存在",

               },
               pass:{
                   required:"密码没填写",
                   rangelength:"密码5到10位",
                   equalTo:"两次密码要相同",
               },
              pass1:{
                  required:"密码没填写",
                  rangelength:"密码5到10位",
                  equalTo:"两次密码要相同",
    }
           }
       })
})