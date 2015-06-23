
    $(document).ready(function (){
        
        //scroll to top
        $(window).scroll(function () {
                if ($(window).scrollTop() !== 0) {
                    $('#btt').fadeIn();
                } else
                    $('#btt').fadeOut();
            });
            $('#btt').click(function () {
                $('html, body').animate({scrollTop: 0}, 500);
            });
        
        //set height
        $(document).ready(function () {
            $('.pro_img').height('150');
            
        //facebook
        
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        
        //toggle nav
        
        $("#click").click(function(){
            $("#toggle_nav").slideToggle();
            });
        });
        
        
        
        //function lấy id products
        $(".get_id_pro").click(function(){
            $.ajax({
                    url : "../../../Model/Product.php", // gửi ajax đến file
                    type : "get", // chọn phương thức gửi là post
                    dateType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                         id : $('.get_id_pro').attr('id')
                    },
                    success : function (Product){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        $('#result').html(Product);
                    }
            });
        });
    });
