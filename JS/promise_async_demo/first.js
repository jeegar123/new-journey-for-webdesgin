function loadScript(src, callback) {
  let script = document.createElement("script");
  script.src = src;
  script.onload = () => callback(script);
  document.head.append(script);
}
console.log("First script running");
loadScript("second.js",function () { 
    console.log("First script Stop");
 });

