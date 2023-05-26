var time=new Date();
// var end=new Date("2019-12-31T23:59:59");
var end=new Date("2019-07-23T23:59:59");
var tmin=time.getTime(),tmax=end.getTime(); //把兩個日期變成時間戳記的數字

var betwn=tmax-tmin; //相差的總數(單位是毫秒)

var bsec=Math.floor((betwn/1000)%60);  //總秒數除60取餘數，等於剩下的秒
var bmin=Math.floor((betwn/1000/60)%60); //總分數除60取餘數，等於剩下的分
var bhur=Math.floor((betwn/1000/60/60)%24); //總時數除24取餘數，等於剩下的時
var bday=Math.floor(betwn/1000/60/60/24); //總天數