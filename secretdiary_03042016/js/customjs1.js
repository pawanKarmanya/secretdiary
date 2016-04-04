$(document).ready(function(){
            
            $(".containertext").css("height", $(window).height() - 200);

            $(".contentContainer").css("min-height", $(window).height());
            $("textarea").keyup(function () {
                $.post("update.php", {diary: $("textarea").val()});
            });





});