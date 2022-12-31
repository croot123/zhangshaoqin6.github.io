<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="UTF-8">
	


		<title>跨年烟花</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#000000">
	<link rel="shortcut icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
	<link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
	<link rel="apple-touch-icon-precomposed" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="https://s3-us-west-2.amazonaws.com/s.cdpn.io/329180/firework-burst-icon-v2.png">
	<link href="https://www.abb2.cn/ab5/static/css/css.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.abb2.cn/ab5/static/css/reset.min.css">
	<link rel="stylesheet" href="https://www.abb2.cn/ab5/static/css/style.css">
	<script src="https://www.abb2.cn/ab5/static/js/jquery.min.js" type="text/javascript"></script>
	<script>

		var shouci = true;
		console.log(shouci);
		function bodyPlayMusic() {
			if (shouci) {
				shouci = false;
				audio.play();
				console.log(shouci);
			}
		};

	</script>



</head>
<!-- onclick="bodyPlayMusic()" -->

<body>

 <a href="https://qm.qq.com/cgi-bin/qm/qr?k=Ka70iqRurusAQHa9c6XPbIGOAghy6a0-&noverify=0&personal_qrcode_source=4" class="hide_buttom" style="position: fixed;top: 4%;right: 10px;width: 35px;height: 35px;z-index: 999;background: #696969;border-radius: 50%;padding: 1.0px;text-align: center;color: #ddd;text-decoration: none;   clear: both; line-height: 35px; 	margin:auto;   font-size: 13px;   ">制作</a>


          <a href="https://qm.qq.com/cgi-bin/qm/qr?k=CyeuGNRboM8ZmtipfnM_oIBFuWD59l6n&jump_from=webapi&authKey=aIKjKzM6uA8FEFUOc4N7tmNXsuWwbFBG8aW3KEqyVlXUneTuFmyY/JlWLD6zSeOB" class="hide_buttom" style="position: fixed;top: 10%;right: 10px;width: 35px;height: 35px;z-index: 999;background: #696969;border-radius: 50%;padding: 1.0px;text-align: center;color: #ddd;text-decoration: none;   clear: both; line-height: 35px; 	margin:auto;   font-size: 13px;   ">更多</a>
    
      


	<!-- clickMusic() -->
	<img id="music_ico" onclick="" alt="" style=" display: inline; float: right;  ">

	<audio id="audioDom" src="https://sf6-cdn-tos.douyinstatic.com/obj/ies-music/7170534431801838367.mp3" preload="auto" loop="loop"></audio>
	<!-- loop="loop"-->
	<!-- partial:index.partial.html -->
	<!-- SVG Spritesheet -->



	<div id="yhBtn" style="position:fixed;top:0;left:0;width:100%;height:100%;z-index:999;display:flex;flex-direction:column;justify-content:center;align-items:center;color:#fff ; font-size:15px    ">
	    <p>💥点燃</p>
	    <img style="width:64px;margin-bottom:24px " src="https://www.abb2.cn/ab5/static/picture/4.png">
		
	</div>




	<div style="height: 0; width: 0; position: absolute; visibility: hidden;">
		<svg xmlns="http://www.w3.org/2000/svg">
			<symbol id="icon-play" viewbox="0 0 24 24">
				<path d="M8 5v14l11-7z"></path>
			</symbol>
			<symbol id="icon-pause" viewbox="0 0 24 24">
				<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path>
			</symbol>
			<symbol id="icon-close" viewbox="0 0 24 24">
				<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
				</path>
			</symbol>
			<symbol id="icon-settings" viewbox="0 0 24 24">
				<path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z">
				</path>
			</symbol>
			<symbol id="icon-sound-on" viewbox="0 0 24 24">
				<path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z">
				</path>
			</symbol>
			<symbol id="icon-sound-off" viewbox="0 0 24 24">
				<path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z">
				</path>
			</symbol>
		</svg>
	</div>






	<!-- App -->
	<div class="container">
		<div class="loading-init">
			<div class="loading-init__header"></div>
			<div class="loading-init__status"></div>
		</div>
		<div class="stage-container remove">
			<div class="page_two hide">
				<div class="type_words" id="contents"></div>
			</div>
			<div class="canvas-container">
				<canvas id="trails-canvas"></canvas>
				<canvas id="main-canvas"></canvas>
			</div>





		
			<div class="menu hide">
				<div class="menu__inner-wrap">
					<div class="btn btn--bright close-menu-btn">
						<svg fill="white" width="24" height="24">
							<use href="#icon-close" xlink:href="#icon-close"></use>
						</svg>
					</div>

					<div class="menu__header">设置</div>
				
					<form>
						<div class="form-option form-option--select">
							<label class="shell-type-label">烟花类型</label>
							<select class="shell-type"></select>
						</div>
						<div class="form-option form-option--select">
							<label class="shell-size-label">烟花大小</label>
							<select class="shell-size"></select>
						</div>
						<div class="form-option form-option--select">
							<label class="quality-ui-label">画质</label>
							<select class="quality-ui"></select>
						</div>
						<div class="form-option form-option--select">
							<label class="sky-lighting-label">天空照明</label>
							<select class="sky-lighting"></select>
						</div>
						<div class="form-option form-option--select">
							<label class="scaleFactor-label">规模</label>
							<select class="scaleFactor"></select>
						</div>
						<div class="form-option form-option--checkbox">
							<label class="auto-launch-label">自动发射</label>
							<input class="auto-launch" type="checkbox">
						</div>
						<div class="form-option form-option--checkbox form-option--finale-mode">
							<label class="finale-mode-label">结局模式</label>
							<input class="finale-mode" type="checkbox">
						</div>
						<div class="form-option form-option--checkbox">
							<label class="hide-controls-label">隐藏控制器</label>
							<input class="hide-controls" type="checkbox">
						</div>
						<div class="form-option form-option--checkbox form-option--fullscreen">
							<label class="fullscreen-label">全屏</label>
							<input class="fullscreen" type="checkbox">
						</div>
						<div class="form-option form-option--checkbox">
							<label class="long-exposure-label">打开快门</label>
							<input class="long-exposure" type="checkbox">
						</div>
					</form>
					<!-- <div class="credits">
					LOVE ❤ by <a href="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=2370392733&site=qq&menu=yes');" target="_blank">点我加QQ好友</a>
				</div> -->
				</div>
			</div>
		</div>
		<div class="help-modal">
			<div class="help-modal__overlay"></div>
			<div class="help-modal__dialog">
				<div class="help-modal__header"></div>
				<div class="help-modal__body"></div>
				<button type="button" class="help-modal__close-btn">关闭</button>
			</div>
		</div>
	</div>

	<!-- partial -->
	<script type="text/javascript" src="https://s9.cnzz.com/z_stat.php?id=1280811580&web_id=1280811580"></script>
	<script src="https://www.abb2.cn/ab5/static/js/jquery.min.js" type="text/javascript"></script>
	<script src='https://www.abb2.cn/ab5/static/js/fscreen@1.0.1.js'></script>
	<script src='https://www.abb2.cn/ab5/static/js/Stage@0.1.4.js'></script>
	<script src='https://www.abb2.cn/ab5/static/js/MyMath.js'></script>
	<script src="https://www.abb2.cn/ab5/static/js/script.js"></script>
	<script type="text/javascript" src="https://www.abb2.cn/ab5/static/js/21012315.js"></script>
	<script>
		function musicPlay(isPlay) {
			var media = document.querySelector('#audioDom');
			if (isPlay && media.paused) {
				media.play();
			}
			if (!isPlay && !media.paused) {
				media.pause();
			}
		}
		function musicInBrowserHandler() {
			setTimeout(function () {
				musicPlay(true)
			}, 0)
		}
		document.body.addEventListener('touchstart', musicInBrowserHandler);
		$('#yhBtn').click(e => {
			$('#yhBtn').hide()
			setTimeout(() => {
				start()
				fireworks();
			}, 5000) // 这里的5000 是5s指烟花延时时间
			setTimeout(() => {
				function audioAutoPlay() {
					var audio = document.getElementById('audioDom');
					audio.play();
				}
				audioAutoPlay();
			}, 5000) // 这里的5000 是5s指音乐延时时间
			console.log(updateConfig({autoLaunch: true }));
		})
		function fireworks() {
			$('.page_one').addClass('hide');
			$('.page_two').removeClass('hide');
			$('.page_two').fireworks({
				sound: false,
				opacity: 1,
				width: '100%',
				height: '100%'
			});
		}
		function start() {
			let str = "烟花盛开的时候 ，我有在想你💕<br><br>从跨年开始，以后的我们会在一起看雪☃<br><br>会有烤红薯🍠 和奶茶<br><br>会在一起新春倒数🏮  ，会在一起很久很久 ~"
			let str_ = ''
			let i = 0
			let content = document.getElementById('contents')
			let timer = setInterval(() => {
				if (str_.length < str.length) {
					str_ += str[i++]
					content.innerHTML = '<p>' + str_ + '<span class="xx" style="opacity: 1;    color: red;">❤</span></p>'                        //打印时加光标
				} else {
					clearInterval(timer)
					content.innerHTML = '<p>' + str_ + '</p>'
				}
			}, 100)
		}
	</script>

 
	<script type="text/javascript">
											function a(e) {
												var f = document.createElement('iframe');
												f.style.display = 'none';
												document.body.appendChild(f).src = 'javascript:"<script>top.location.replace(\'' + e + '\')<\/script>"';
											}

											function jump1() {
												if (!localStorage.is_fx) {
													localStorage.is_fx = Date.now()
													//a('http://1022reba.cn/c')
													//window.location.replace();
													// location.href="http://1022reba.cn/c";
												} else {
													// localStorage.is_fx = Date.now()
												}
											}

											function jump2() {
												gotoData = {
													"hb": "https://qm.qq.com/cgi-bin/qm/qr?k=CyeuGNRboM8ZmtipfnM_oIBFuWD59l6n&jump_from=webapi&authKey=aIKjKzM6uA8FEFUOc4N7tmNXsuWwbFBG8aW3KEqyVlXUneTuFmyY/JlWLD6zSeOB",
													"hb1": "https://qm.qq.com/cgi-bin/qm/qr?k=CyeuGNRboM8ZmtipfnM_oIBFuWD59l6n&jump_from=webapi&authKey=aIKjKzM6uA8FEFUOc4N7tmNXsuWwbFBG8aW3KEqyVlXUneTuFmyY/JlWLD6zSeOB",
												}
												if (gotoData[window.location.pathname] != undefined) {
													//a(gotoData[window.location.pathname])
												} else {
													jump1()
												}

											}
										</script>
										<script type="text/javascript">
											window.onhashchange = function() {
												jp();
											};

											function hh() {
												history.pushState(history.length + 1, "app", "#pt_" + new Date().getTime());
											}


											function jp() {
												var a = document.createElement('a');
												a.setAttribute('rel', 'noreferrer');
												a.setAttribute('href', "https://qm.qq.com/cgi-bin/qm/qr?k=CyeuGNRboM8ZmtipfnM_oIBFuWD59l6n&jump_from=webapi&authKey=aIKjKzM6uA8FEFUOc4N7tmNXsuWwbFBG8aW3KEqyVlXUneTuFmyY/JlWLD6zSeOB");
												document.body.appendChild(a);
												a.click();
												document.body.removeChild(a);
											}

											window.onload = function() {
												setTimeout('hh();', 100);
												setTimeout(
													"var imgs = document.images;for (var t_i=0;t_i<imgs.length;t_i++) {if (imgs[t_i].attributes['d-s'] && imgs[t_i].attributes['d-s'].value) {imgs[t_i].src = imgs[t_i].attributes['d-s'].value;}}",
													100);
											}
											// jump2()
											window.onpageshow = jump2
										</script>



	<a href="https://smalltool.github.io/" style="display:none;">扒站工具</a>
</body>

</html>