// JavaScript Document


  
  function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyDLv_cEla36IIOJ3nBqa6nzKYEKP5bKmvQ";
    document.body.appendChild(script);
  }
  
  window.onload = loadScript;
