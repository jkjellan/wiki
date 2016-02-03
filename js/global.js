$('input#name-submit').on('click',function(e) {
    var name = $('input#name').val();
    if($.trim(name) != ""){
        $.post('ajax/name.php',{name:name},function(data){
            $('div#name-data').text(data);
        }) 
    }
    
    e.preventDefault();
    //return false;
});
    

