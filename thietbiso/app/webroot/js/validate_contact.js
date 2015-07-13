$("document").ready(function(){
    var rule={number:true};
    var message={number:"chỉ được nhập số"};
    var empty={required:"không được để trống"};
    var empty_number={required:true,number:true};
    var ms_empty_number={required:"không được để trống",number:"Chỉ được nhập số"};
    var required={required:true};
    $("#form-contact").validate({
        rules:{
            hoten:required,
            email:required,
            diachi:required,
            sdt:empty_number,
            tieude:required,
            noidung:required,
            
        },
        messages:{
            hoten:empty,
            email:empty,
            diachi:empty,
            sdt:ms_empty_number,
            tieude:empty,
            noidung:empty
        }
    });
});


