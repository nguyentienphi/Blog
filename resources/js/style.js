$( document ).ready( function() {
    $("#logout").click(function(){
        $.post("logout", $("#logout-form").serialize());
    });
    $('#btnComment').click(function(e) {
        e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postID = $("#post_id").val();
            var postContent = $("#postContent").val();
            $.ajax({
                type: "post",
                url: '/comment',
                data: {
                    postContent:postContent,
                    postID:postID
                },
                dataType: 'json',
                success: function(data){
                   $("#show").append('<p>'+'<strong>'+data.name  + ':' +'</strong>' + data.content +'</p>').html();
                   $('#postContent').val("");
                }
            });
    });
    $('.delete').click(function(){
        var result = confirm('Do you want to delete?');
        if(result) {
            return true;
        } else {
            return false;
        }
    });
});
