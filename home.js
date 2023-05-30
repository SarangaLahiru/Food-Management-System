var slide=document.querySelectorAll('.slide')
console.log(slide)
function nextSlide(){
    var curr=document.querySelector('.curr')
    curr.classList.remove('curr')
    if(curr.nextElementSibling){
        curr.nextElementSibling.classList.add('curr')
    }
    else{
        slide[0].classList.add('curr')
    }
    
}
var slideInt=setInterval(nextSlide,7000)



window.addEventListener('scroll',function(){
    var header=document.querySelector('.header')
    header.classList.toggle('toggle',this.scrollY>100)
})

var student=document.getElementById('student')
var food=document.getElementById('food')
var reg=document.getElementById('reg')
var cout1=0;
var cout2=0;
var cout3=0;
function count1(){
    
    student.innerHTML="0"+cout1+"+";
    cout1++;
    if(cout1>=100)
    {
        clearInterval(c1)
        student.innerHTML=100+"+";
    }

}
var c1=setInterval(count1,50)

function count2(){
    
    food.innerHTML=cout2+"+";
    cout2++;
    if(cout2==50)
    {
        clearInterval(c2)
        food.innerHTML=50+"+";
    }

}
var c2=setInterval(count2,80)

function count3(){
    
    reg.innerHTML=cout3+"+";
    cout3++;
    if(cout3>=5)
    {
        clearInterval(c3)
        food.innerHTML=5+"+";
    }

}
var c3=setInterval(count3,1000)

var img2=document.querySelector('.img2')

window.addEventListener('scroll',function(){
    if(this.scrollY>350){
        img2.classList.add('img1')
    }
})


console.log(new Date().toDateString())
var usericon=document.getElementById('user')
var usericon1=document.getElementById('user1')
var register=document.querySelector('.regis')
var login=document.querySelector('.log')
var logbtn=document.getElementById('logbtn')
var regbtn=document.getElementById('regbtn')
usericon.addEventListener('click',function(e){
    e.preventDefault();
    register.classList.add('regis1')

})
usericon1.addEventListener('click',function(e){
    e.preventDefault();
    register.classList.add('regis1')
    header1.classList.add('header2');

})

logbtn.addEventListener('click',function(e){
    e.preventDefault();
    login.classList.add('log1')
    register.classList.remove('regis1')

})
regbtn.addEventListener('click',function(e){
    e.preventDefault();
    login.classList.remove('log1')
    register.classList.add('regis1')
})
var cancle1=document.querySelector('.cancle1')
var cancle2=document.querySelector('.cancle2')
cancle1.addEventListener('click',function(){
    register.classList.remove('regis1')

})
cancle2.addEventListener('click',function(){
    login.classList.remove('log1')

})

var cancle5=document.querySelector('.cancle5')
var header1=document.querySelector('.header1')
var menu=document.querySelector('.menu')
console.log(cancle5)
cancle5.addEventListener('click',function(e){
    e.preventDefault();
    header1.classList.add('header2');
    
})
menu.addEventListener('click',function(e){
    e.preventDefault();
    header1.classList.remove('header2');
})

