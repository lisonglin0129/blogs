window.onloadListeners=new Array();
window.addOnLoadListener = function (listener) {
        window.onloadListeners[window.onloadListeners.length]=listener;
}
window.onload=function(){
        for(var i=0;i<window.onloadListeners.length;i++){
                func = window.onloadListeners[i];
                func.call();
        }
}
