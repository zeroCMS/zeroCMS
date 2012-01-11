function approuve(id,urlPost) {
    $.post(urlPost, {
        id: id
    },  
    function success(data){  
        location.reload(data.Url);
    }); 
} 
function desapprouve(id,urlPost) {
    $.post(urlPost, {
        id: id
    },  
    function success(data){  
        location.reload(data.Url);
    });  
}