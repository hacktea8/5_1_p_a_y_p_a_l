<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="ibS7-o-knBS5jJVQLiIigpVnqchYZUuAfxVF1ayf5j4" />
<title>贊助升級專區</title>
<link href="http://85pay.net/css/css.css?3334" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/j/jquery/jquery-1.4.2.min.js"></script>


</head>
<body>
<div id="top">
<p class="pay-tw"><a href="/" alt="回到首頁"><img src="/images/pay.jpg"/></a></p>
</div>
<div id="box">
<div id="header">
  
<script type="text/javascript">
$(document).ready(function(){ 
//var m = {_currentProcess:'S1211200173',_setCurrentProcess:function(p){this._currentProcess=p;return false;}};
$("#checkFormButoon").click(function() {
var isChecked = $("input[@name=mpId]:checked").val();
if(isChecked==undefined)
  return false;
else
  $('#payForm').submit();

});

$("input").click(function() {
  p = $(":checked").val();
  $.getJSON('/payment/getValue/'+p+'/2200/iTMhVj', function(data) {
    if(data.r){
        m._setCurrentProcess(p);
        $('#checkValue').value(data.r);          
    }

  });
 
});


});
</script>

<div id='log'></div>

<form id="payForm" name="form1" action=" https://www.esafe.com.tw/Service/Etopm.aspx" method="POST">
<input type="hidden" name="MN" Value="2200">
<input type="hidden" name="OrderInfo" Value="Wisawa+want+pay+2200+%40+2014-02-20+12%3A53%3A05">
<input type="hidden" name="Td" Value="141404">
<input type="hidden" id='checkValue' name="ChkValue" Value="">
<ul class="flowchart">
  <li class="process1">1.選擇贊助方式與方案</li>
  <li class="process2">2.填寫訂單與付款資料</li>
  <li class="process3">3.完成升級</li>
</ul>
 <div class="forum_upgrade">
 <div class="upgrade_left">

 <ul class="upgrade-nav">
 </ul>
 </div>
 <div class="upgrade_right">
 <p class="upgrade-title"></p>
 <p class="announcement">註：目前信用卡支付後可申請退款，使用支付寶和WebATM支付後無法退款</p>
  <div class="program">
 <p class="program-title">NT$2200元</p>
 <ul class="selection">
 <p class="explain">交易完成後即可馬上開通升級VIP會員</p>
<li class="selection_list">
 <table>
   <tr>
       <td class="choose"><input type="radio" name="web" value="S1211200173" checked/>使用信用卡<p> (推薦)</p></td>
       <td><span class="buysafe">BuySafe</span></td>
    </tr>
</table>
</li><li class="selection_list">
 <table>
   <tr>
       <td class="choose"><input type="radio" name="web" value="S1211200207"  />使用WebATM <p>(推薦)</p></td>
       <td><span class="webatm">WebATM</span></td>
    </tr>
</table>
</li>
<li class="selection_list">
 <table>
   <tr>
       <td class="choose"><input type="radio" name="web" value="S1211200215" />使用支付寶</td>
       <td><span class="alipay">Alipay</span></td>
    </tr>
</table>
</li>
</form>
   <li>
     <div class="next-button"><a id="checkFormButoon" href="#">下一步</a></div>
  </li>
 </ul>
 </div>
 </div>
 </div>
<p class="footer_pay"></p>
</body>
</html>
