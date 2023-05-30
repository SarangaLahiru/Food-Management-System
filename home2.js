var date=document.querySelectorAll('.date')
var time=document.querySelectorAll('.time')
var btn3=document.querySelectorAll('.btn3')
var mealtime=document.querySelectorAll('.mealtimes')
console.log(btn3)
document.addEventListener('mousemove',function(){
    date[0].value=new Date().toDateString();
date[1].value=new Date().toDateString();
date[2].value=new Date().toDateString();

time[0].value=new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds();
time[1].value=new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds();
time[2].value=new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds();


})

var cancle3=document.querySelectorAll('.cancle3')

cancle3[0].addEventListener('click',function(){
    
    mealtime[0].classList.add('lunch1')
    mealtime[0].classList.remove('lunch')
})
cancle3[1].addEventListener('click',function(){
    
    mealtime[1].classList.add('bft1')
    mealtime[1].classList.remove('bft')
})
cancle3[2].addEventListener('click',function(){
    
    mealtime[2].classList.add('dinner1')
    mealtime[2].classList.remove('dinner')
})
btn3[0].addEventListener('click',function(e){
    e.preventDefault();
    mealtime[0].classList.add('lunch')
    mealtime[1].classList.remove('bft')
    mealtime[2].classList.remove('dinner')

    
})
btn3[1].addEventListener('click',function(e){
    e.preventDefault();
    mealtime[1].classList.add('bft')
    mealtime[0].classList.remove('lunch')
    mealtime[2].classList.remove('dinner')

    
})
btn3[2].addEventListener('click',function(e){
    e.preventDefault();
    mealtime[2].classList.add('dinner')
    mealtime[1].classList.remove('bft')
    mealtime[0].classList.remove('lunch')

    
});

var num=document.querySelectorAll('.num')
var price=document.querySelectorAll('.price')

document.addEventListener('mousemove',function(){
    price[0].value=num[0].value*120+"$";
    price[1].value=num[1].value*120+"$";
    price[2].value=num[2].value*120+"$";
})





