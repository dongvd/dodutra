var is_busy=false;
var page=1;
var record_per_page=8;
var stopped=false;

$(document).ready(function(){
    $("#loadmore").click(function(){
        $element=$("#content");
        $button=$(this);
        if(is_busy==true){
            return false;
        }
        page++;
        $button.html("loadding....");
        $.ajax({
            type:"get",
            datatype:"json",
            url:"IndexController.php",
            data:{page:page},
            success:function(result){
                var html="";
                if(result.lenght<=record_per_page){
                    $.each(result,function(key,obj){
                       html+="<div style='background-color:red'>"+obj.id+"-"+obj.ProductName+"</div>"; 
                    });
                    $element.append(html);
                    $button.remove();
                }else{
                    $.each(result,function(key,obj){
                        if(key<result.lenght-1){
                            html+="<div style='background-color:red'>"+obj.id+"-"+obj.ProductName+"</div>"; 
                        }
                    });
                    $element.append(html);
                }
            }
        })
                .always(function(){
                    $button.html("load more");
                    is_busy=false;
                });
    });
});


