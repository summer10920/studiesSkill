window.onload=function(){
  whiteit();
}
function whiteit() {
  // document.write("<h1>我的第一次JS親密接觸</h1>");
  //document.write 只適合在HTML生成過程中使用，一但HTML已完成後執行此指令，會導致舊HTML文件整個重置新編輯

  document.getElementById("demo").textContent="我的第一次JS親密接觸";
}