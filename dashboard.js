var date=document.getElementById('date')
var time=document.getElementById('time')

date.innerHTML=new Date().toDateString();
time.innerHTML=new Date().getHours()+":"+new Date().getMinutes();