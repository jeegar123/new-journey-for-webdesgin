//  adding callback to do in synchronous
function loadScript(src, callback) {
  let script = document.createElement("script");
  script.src = src;
  script.onload = () => callback(script);
  document.head.append(script);
}
console.log("Main script running");
loadScript("first.js", function () {
  console.log("Main script stop "); 
});

