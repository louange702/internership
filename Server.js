const express=require("express");
const app=express();
app.get("/",(req,res)=>{
    res.send("Hello Louange");
})
app.get("/students",(req,res)=>{
    res.json({id:1,student_name:"Louange",age:14,class:"L4sod"})
})

const port=300;
app.listen(port,()=>{
    console.log(`server is run on port ${port}`);
})
