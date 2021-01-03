let promise = new Promise((resolve, reject) => {
  let connection = false;

  if (connection) {
    resolve("connection sucessfully");
  } else {
    reject("not connected");
  }
});
  
promise.then((message) => {
  console.log(message);
}).catch((message)=>{
    console.log(message);
});
