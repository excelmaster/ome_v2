async function legalModal(){
    console.log("Legal modal displaying...");
    var legalcount = this.localStorage.getItem('ISBN');

    if(legalcount == null){
        $('#modalISBN').modal('show')
        localStorage.setItem('ISBN','1')       
        console.log('data received: '+ localStorage.getItem("ISBN") );
    }
}
