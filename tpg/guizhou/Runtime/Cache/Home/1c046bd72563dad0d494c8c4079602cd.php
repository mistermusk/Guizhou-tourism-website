<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>贵州旅游网站注册界面</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul{
			/*margin: auto;*/
			list-style-type: none;
		}
    .logodiv{
      margin-left: 80px;
      margin-bottom: -10px;
    }
    .logodiv span{
      font-size: 24px;
      color:pink;
      position: relative;
      bottom: 50px;
    }
    .logodiv label{
      float: right;
      margin-top: 80px;
      margin-right: 60px;
    }
		.mydiv{
			width: 1000px;
			height: 570px;
			margin: auto;
		}
		fieldset,form{
			width: 400px;
			/*margin: auto;*/
			float: left;
		}
    fieldset legend{
      color: red;
      text-align: center;
      font-size: 24px;
    }
		ul li{

			width: 300px;
			height: 60px;
			line-height: 60px;
			/*background-color: gray;*/
			border: 1px solid rgba(125,125,125,0.4);
			margin-top:10px; 
			padding-left: 6px;
		}

      input{
      	margin-left: 20px;
      	height: 30px;
      	width: 180px;
      	border: 1px solid #fff;
      	font-size: 16px;

      }
      [name='yanzhengma']{
      	width: 120px;
      }
     #yanzhengimg{
     	width: 60px;
     	height: 38px;
     	margin-left: 6px;
     	/*margin-top: px;*/
     	position: relative;
     	top: 16px;
     	cursor: pointer;
     }
   [type='submit']{
   	width: 310px;
   	height: 60px;
   	background-color: red;
   	margin-left: -10px;
   	/*padding-left:0px;*/
   	/*margin-top: 10px;*/
   	outline: none;
   	/*border-radius: 15px;*/
   	cursor: pointer;
   	font-size: 32px;
   	font-weight: bold;
   }
   .protocol{
   	border: 1px solid #fff;

   }
   .protocol input{
   	   width: 16px;
   	   height: 20px;
   	   /*margin-top: 8px;*/
   	   position: relative;
   	   top: 6px;
   }
   hr{
    border: 1px solid gray;
    /*box-shadow: 2px 5px 5px 2px rgba(125,125,1250.5);*/
   }
   .show{
    margin-left: 8px;
   }
   .show strong{
    display: block;
   }
   .show h2{
    text-align: center;
   }
   .show strong,h2{
    color: blue;
   }
	</style>


</head>
<body>
     <div class="logodiv"><a href="/tpg/"><img src="/tpg/Public/login/images/glogo.png" width="240px" height="120px;"></a><span>贵州旅游网欢迎您</span><label>若已有账号 ? <a href="login.html">请登录</a></label></div>
     <hr style="">
    <div class="mydiv">
    	<form action="/tpg/home/Form/registerdeal" method="post">
    <fieldset>
    <legend>欢迎注册</legend>
    	<ul>
    		<li><label>用 户 名</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" pattern="^([\u4E00-\u9FA5]+，?)+$" placeholder="输入用户名(中文)" required="required"></li>
    		<li><label>设置密码</label>&nbsp;&nbsp;&nbsp;<input type="password" name="password" pattern="^[a-zA-Z]\w{5,17}$" placeholder="请输入6-18字符" required="required" id="password">
        <!-- <span>只能包含字符、数字和下划线</span> -->
        </li>
    		<li><label>确认密码</label>&nbsp;&nbsp;&nbsp;<input type="password" name="confirmpassword" placeholder="请确认密码" required="required" id="confirmpassword"></li>
    		<li><label>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>&nbsp;&nbsp;<input type="email" name="email" pattern="^[A-Za-z0-9]+([-_.][A-Za-z0-9]+)*@([A-Za-z0-9]+[-.])+[A-Za-z0-9]{2,5}$" placeholder="请输入邮箱号" required="required"></li>
    		<li><label>验 证 码</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="yanzhengma" placeholder="验证码" pattern="[a-z0-9]{4}" id='code'><img src="rand" id="yanzhengimg"></li>
    		<li class="protocol"><input type="checkbox" name="">阅读并同意<a href="" style="text-decoration: none;">《旅游网用户注册协议》</a></li>
    		<li><input type="submit" value="注册"></li>
    		
    	</ul>
    	
    </fieldset>

    </form>
       <div style="width: 500px;height: 560px;float: right;position: relative;top: 10px;overflow: scroll;border: 1px solid gray;">
<div class="show">
                <h2>贵州旅游网用户协议 </h2>
                <strong>一、服务条款</strong>
                贵州旅游网提供的服务将完全按照其发布的使用协议、服务条款和操作规则严格执行。为获得贵州旅游网服务，服务使用人（以下称“会员”）应当同意本协议的全部条款并按照页面上的提示完成全部的注册程序。
                
               <strong>二、目的</strong>
                本协议是以规定用户使用贵州旅游网提供的服务时，贵州旅游网与会员间的权利、义务、服务条款等基本事宜为目的。
                
                <strong>三、遵守法律及法律效力</strong>

                本服务使用协议在向会员公告后，开始提供服务或以其他方式向会员提供服务同时产生法律效力。 会员同意遵守《中华人民共和国保密法》、《计算机信息系统国际联网保密管理规定》、《中华人民共和国计算机信息系统安全保护条例》、《计算机信息网络国际联网安全保护管理办法》、《中华人民共和国计算机信息网络国际联网管理暂行规定》及其实施办法等相关法律法规的任何及所有的规定，并对会员以任何方式使用服务的任何行为及其结果承担全部责任。<br>
                在任何情况下，如果本网站合理地认为会员的任何行为，包括但不限于会员的任何言论和其他行为违反或可能违反上述法律和法规的任何规定，本网站可在任何时候不经任何事先通知终止向会员提供服务。<br>
                本网站可能不时的修改本协议的有关条款，一旦条款内容发生变动，本网站将会在相关的页面提示修改内容。在更改此使用服务协议时，本网站将说明更改内容的执行日期，变更理由等。且应同现行的使用服务协议一起，在更改内容发生效力前7日内及发生效力前日向会员公告。<br>
                会员需仔细阅读使用服务协议更改内容，会员由于不知变更内容所带来的伤害，本网站一概不予负责。<br>
                如果不同意本网站对服务条款所做的修改，用户有权停止使用网络服务。如果用户继续使用网络服务，则视为用户接受服务条款的变动。 <strong>四、服务内容</strong>
                &nbsp;&nbsp; 贵州旅游网服务的具体内容由本网站根据实际情况提供，本网站保留随时变更、中断或终止部分或全部贵州旅游网服务的权利。

                <strong>五、会员的义务</strong>

                用户在申请使用本网站贵州旅游网服务时，必须向本网站提供准确的个人资料，如个人资料有任何变动，必须及时更新。<br>
                用户注册成功后，本网站将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任。<br>
                用户在使用本网站网络服务过程中，必须遵循以下原则：<br>
                ● 遵守中国有关的法律和法规；
    <br>
                ●不得为任何非法目的而使用网络服务系统；<br>
                ●遵守所有与网络服务有关的网络协议、规定和程序；
    <br>
                ●    不得利用贵州旅游网服务系统传输任何危害社会，侵蚀道德风尚，&nbsp;&nbsp; 宣传不法宗教组织等内容；
    <br>
                ●    不得利用贵州旅游网服务系统进行任何可能对互联网的正常运转造成不利影响的行为；<br>
                ● 不得利用贵州旅游网服务系统上载、张贴或传送任何非法、有害、胁迫、滥用、骚扰、侵害、中伤、粗俗、猥亵、诽谤、侵害他人隐私、辱骂性的、恐吓性的、庸俗淫秽的及有害或种族歧视的或道德上令人不快的包括其他任何非法的信息资料；
    <br>
                ●    不得利用贵州旅游网服务系统进行任何不利于本网站的行为；
    如发现任何非法使用用户帐号或帐号出现安全漏洞的情况，应立即通告本网站。 <strong>六、本网站的权利及义务</strong>

                本网站除特殊情况外（例如：协助公安等相关部门调查破案等），致力于努力保护会员的个人资料不被外漏，且不得在未经本人的同意下向第三者提供会员的个人资料。<br>
                本网站根据提供服务的过程，经营上的变化，无需向会员得到同意即可更改，变更所提供服务的内容。<br>
                本网站在提供服务过程中，应及时解决会员提出的不满事宜，如在解决过程中确有难处，可以采取公开通知方式或向会员发送电子邮件寻求解决办法。<br>
                本网站在下列情况下可以不通过向会员通知，直接删除其上载的内容：

    <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ●    有损于本网站，会员或第三者名誉的内容；<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ● 利用贵州旅游网服务系统上载、张贴或传送任何非法、有害、胁迫、滥用、骚扰、侵害、中伤、粗俗、猥亵、诽谤、侵害他人隐私、辱骂性的、恐吓性的、庸俗淫秽的及有害或种族歧视的或道德上令人不快的包括其他任何非法的内容；
    <br>
                ●    侵害本网站或第三者的版权，著作权等内容；
    <br>
                ●    存在与本网站提供的服务无关的内容；<br>
                ● 无故盗用他人的ID(固有用户名)，姓名上载、张贴或传送任何内容及恶意更改，伪造他人上载内容。 <strong>七、贵州旅游网服务内容的著作权，肖像权等</strong>

                包括会员间对上载内容的共享等情况在内，对于会员上载的内容的一切权利及责任应由会员承担。<br>
                贵州旅游网内所有的照片，图片，文章，文字等的版权归原文作者和本网站共同所有，任何人需要转载贵州旅游网内的内容，必须征得原文作者或本网站同意（授权）。<br>
                会员承担开设贵州旅游网内容的一切权利及责任，本网站不负责贵州旅游网内容的信任度，正确度等的一切责任。<br>
                在无相关法律规定的情况下，本网站不履行对于会员开设的贵州旅游网内容的定期确认，监督的义务。
                <br>
                本网站对于由于会员利用贵州旅游网服务时侵害他人的著作权，肖像权等的情况，不承担，负责任何民事，刑事的责任。如果发生由于会员侵害他人的著作权，肖像权等的情况，本网站被第三者告发，起诉，涉及损失赔偿等时，会员必须声明其行为与本网站无关且本网站不负责任何法律责任。 <strong>八、免责声明</strong>

                会员明确同意其使用贵州旅游网服务所存在的风险将完全由其自己承担；因其使用贵州旅游网服务而产生的一切后果也由其自己承担，本网站对用户不承担任何责任。<br>
                本网站不担保贵州旅游网服务一定能满足用户的要求，也不担保网络服务不会中断，对贵州旅游网服务的及时性、安全性、准确性也都不作担保。 <strong>九、服务变更、中断或终止</strong>

                如因系统维护或升级的需要而需暂停贵州旅游网服务，本网站将尽可能事先进行通告。<br>
                如发生下列任何一种情形，本网站有权随时中断或终止向用户提供本协议项下的贵州旅游网服务而无需通知用户：<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ● 用户提供的个人资料不真实；<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ● 用户违反本协议中规定的使用规则。<br>
                除前款所述情形外，本网站同时保留在不事先通知用户的情况下随时中断或终止部分或全部贵州旅游网服务的权利，对于所有服务的中断或终止而造成的任何损失，本网站无需对用户或任何第三方承担任何责任。 <strong>十、违约赔偿</strong>

                用户同意保障和维护本网站及其他用户的利益，如因用户违反有关法律、法规或本协议项下的任何条款而给本网站或任何其他第三者造成损失，用户同意承担由此造成的损害赔偿责任。


                <strong>十一、修改协议</strong>

                本网站将可能不时的修改本协议的有关条款，一旦条款内容发生变动，本网站将会在相关的页面提示修改内容。<br>
                如果不同意本网站对服务条款所做的修改，用户有权停止使用贵州旅游网服务。如果用户继续使用贵州旅游网服务，则视为用户接受服务条款的变动。 <strong>十二、法律管辖</strong>


                本协议的订立、执行和解释及争议的解决均应适用中国法律。<br>
                如双方就本协议内容或其执行发生任何争议，双方应尽量友好协商解决；协商不成时，任何一方均可向本网站所在地的人民法院提起诉讼。


                <strong>十三、其他规定</strong>

                本协议构成双方对本协议之约定事项及其他有关事宜的完整协议，除本协议规定的之外，未赋予本协议各方其他权利。<br>
                如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力。
    </div>          

       </div>
    </div>
    
    <!-- <img src="rand.php" width="100" height="100"> -->

    <!-- 底部 -->
    <style type="text/css">
      .footerlist span a{
           color: black;
           text-decoration: none;
      }
      .footerlist span a:hover{
        color: red;
      }
    </style>
    <div style="width: 1180px;border: 1.5px solid gray;margin-top:20px;"></div>
    <div style="text-align:center;padding-top:8px;background-color: lightgray;">
    <div class="footerlist">
    <span><a href="/tpg/home/about/about" title="">关于我们</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/home/jingdian/jingdian" title="">美丽风景</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/Home/Message/message" title="">留言区域</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/admin.php" title="">后台管理</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/home/show/more?name=xianlu" title="">更多线路选择</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/home/hotels/hotel" title="">酒店预订</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
    <span><a href="/tpg/home/cate/cate" title="">美食天地</a></span></div>
      <p>版权所有：Copyright © 影琪集团　　粤ICP备15019244号</p>
                <p>公司地址：中国贵州贵阳市福田区南园路90号</p>
    </div>



</body>
<script type="text/javascript">
//验证码的验证
var code = document.getElementById('code');
code.onblur=function(){
	//获取图片上的数字
	var name = document.cookie;
	//分割字符串
    var s = name.split("=");
    var len = s.length;
  //取分割数组的最后一个
    var co = s[len-1];
    //获取输入框中的数据
    var value = code.value;
    if (value=='') {}else{
      if (co!=value) {
      code.style.color = 'red';
      alert('验证码错误');
    }else{
      code.style.color = 'green';
    }
    }
}
//确认密码
var confirmpassword = document.getElementById('confirmpassword');
var password = document.getElementById('password');
confirmpassword.onblur=function(){
	var con = confirmpassword.value;
    var pass = password.value;
    if (con!=pass) {
    	confirmpassword.style.color = 'red';
    	password.style.color = 'red';
    	alert('两次密码不一样');
    }else{
    	confirmpassword.style.color = 'green';
    }
}


	var yanzhengimg = document.getElementById('yanzhengimg');
	yanzhengimg.onclick = function(){
		
		location.reload(true);

	}
	// alert(rand.php);
</script>
</html>