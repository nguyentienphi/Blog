$( document ).ready( function() {
    $("#logout").click(function(){
        $.post("logout", $("#logout-form").serialize());
    });
});
