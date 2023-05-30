var search=document.getElementById('search')
var box=document.querySelectorAll('.box')

search.addEventListener('keyup',function(){
   
    for(var i=0; i<box.length; i++){
        var itemName=box[i].getElementsByTagName('caption')[0];
        var match=itemName.textContent.toLowerCase();
        var searchThing=search.value.toLowerCase();
        
        if(match.indexOf(searchThing)>-1){
            box[i].style.display="";
        }
        else{
            box[i].style.display='none';
        }
        
    }
})