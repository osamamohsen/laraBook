
function buildComment(username,res,image_src,container){
    //var ww= "{!!  !!}";
    //console.log('er');
    console.log('start');
    console.log(username);
    console.log(image_src)
    var article = document.createElement('article');
    article.setAttribute('class','comments__comment media status-media');

    var div = document.createElement('div');
    div.setAttribute('class','pull-left');

    var a = document.createElement('a');
    a.setAttribute('href','/profile_path/'+username)
    var image = document.createElement('img');
    image.setAttribute('class','status-gravatar avatar img-circle');
    image.setAttribute('src',image_src);
    image.setAttribute('title',username);

    a.appendChild(image);
    div.appendChild(a);

    var h4 = document.createElement('h4');
    h4.setAttribute('class','media-heading');
    h4.setAttribute('html',username);

    article.appendChild(div);
    article.appendChild(h4);
    article.innerHTML += res.body;

    console.log(article);

    //var build = "#commentsBody"+res.statusID;
    //console.log(build);
    var d = document.getElementById(container+res.statusID);
    d.appendChild(article);
    //$(container).appendChild(article);
    //$(container+res.statusID).innerHTML += article;
    //console.log();

}

function comment(event,statusID,body,form){
    //console.log('here');
    if(event.keyCode==13){
        event.preventDefault();
        var id = $(form).attr('name');
        var formData = {
            '_token'    :  document.getElementsByName('_token')[0].value,
            'status_id' : $(statusID+id).val(),
            'body'      : $(body+id).val()
        };
        $.ajax({
            type : 'post',
            data : formData,
            url  : '/status/'+$(statusID).val()+'/comments',
            dataType : 'json'
        }).done(function(data){
            //console.log(data);
            //buildComment($(statusID+id).val(),$(body+id).val(),user);
        });
        var obj ={"statusID":$(statusID+id).val(),"body":$(body+id).val()};
        $(body+id).val("");
        return obj;
    }
    return null;
}