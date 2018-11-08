var setBackground = function() {
    var twitterhandle ='Do not capture'
  var occupation = 'Do not capture'
    var svgstring = '<svg id="diagtext" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"><style type="text/css">text { fill: black; font-family: NanumGothic, Avenir, Arial, Helvetica, sans-serif; }</style><defs><pattern id="twitterhandle" patternUnits="userSpaceOnUse" width="400" height="200"><text y="30" font-size="30" id="name">'+twitterhandle+'</text></pattern><pattern xlink:href="#twitterhandle"><text y="120" x="200" font-size="30" id="occupation">'+occupation+'</text></pattern><pattern id="combo" xlink:href="#twitterhandle" patternTransform="rotate(-45)"><use xlink:href="#name" /><use xlink:href="#occupation" /></pattern></defs><rect width="100%" height="100%" fill="url(#combo)" /></svg>';
  document.body.style.backgroundImage = "url('data:image/svg+xml;base64,"+window.btoa(svgstring)+"')";
  }

  setBackground();
  
  
  
  