window.onpopstate = function(){
    history.pushState({}, "", window.location.href);
    $('#content').load(document.URL +  ' #songs');
};