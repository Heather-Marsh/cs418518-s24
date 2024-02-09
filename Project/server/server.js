const express=require("express");
const app=express();
const port=8080;

const myLogger = function (req, res, next) {
    console.log('LOGGED')
    next()
  }

 app.use(myLogger); 

//  localhost:8080/user
 app.use('/user',require('./routes/user'));



app.listen(port,()=>{
    console.log(`Server is listening at port ${port}`)
});

//Root get API
app.get("/",(req,res)=>{
    res.send("Calling get api")
});

//Root post API
app.post("/",(req,res)=>{
    res.send("Calling post api")
});


