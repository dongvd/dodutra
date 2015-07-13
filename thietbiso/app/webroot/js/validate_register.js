$("document").ready(function(){
    var empty={required:"không được để trống"};
    var empty_number={required:true,number:true};
    var ms_empty_number={required:"không được để trống",number:"Chỉ được nhập số"};
    var required={required:true};
    $("#form-register").validate({
        rules:{
            pwd:required,
            email:required,
            re_pwd:required,
            fname:required,
            lname:required,
            phone:empty_number,
            add:required
        },
        messages:{
            pwd:empty,
            re_pwd:empty,
            email:empty,
            add:empty,
            lname:empty,
            fname:empty,
            phone:ms_empty_number
        }
    });
});


