const body = document.getElementsByTagName('body')[0];
const ua = window.navigator.userAgent.toLowerCase();

if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0) {
    body.classList.add('ios');
    console.log('iOS使用中');
  }else{
    body.classList.add('windows');
    console.log('iOS以外使用中');
  }

for (let i = 1;i <= 3;i++){
  eval(`var parallax_bg${i}=document.getElementsByClassName('parallax-bg${i}')[0]`);
  eval(`console.log(parallax_bg${i});`)
}

for (var i = 0; i < 10; i++) {
  　　eval("var num" + i + "=" + i + ";");
  }
