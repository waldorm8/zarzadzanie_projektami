window.onload = function(){ 
var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('.show-dialog');
    showDialogButton.onclick=function(){
      dialog.showModal();
    }
    dialog.querySelector('.agree').onclick=function(){
        dialog.close();
    }
    dialog.querySelector('.close').onclick=function(){
      dialog.close();
    }
}
