/*
Nabigatzailean atzera egiterakoan esperotakoa gerta dadin historialean sarrera bat sortzen duen script-a
*/
window.onpopstate = function(){
    history.pushState({}, "", window.location.href);
    $('#content').load(document.URL +  ' #songs');
};