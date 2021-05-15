import { setAttrs } from "../libs/functions.js"

export default class Profile{
    followBtn = document.querySelector("#followBtn")
    constructor(){
        this.followBtn.addEventListener("click",this.followStatus)
        this.followStatusInit()
    }
    followStatus = (e)=>{
        e.preventDefault()
        status = this.followBtn.getAttribute("data-status")
        if (status ==="false"){
            setAttrs( this.followBtn,{
                "data-status" : "true",
                "value" : "unFollow"
            })
            this.followBtn.parentElement.setAttribute("action","/follow.html")
            //this.followBtn.parentElement.submit()
        }else{
            setAttrs( this.followBtn,{
                "data-status" : "false",
                "value" : "Follow"
            })
            this.followBtn.parentElement.setAttribute("action","/unfollow.html")
            //this.followBtn.parentElement.submit()
        }
    }
    followStatusInit = ()=>{
        status = this.followBtn.getAttribute("data-status")
        if (status ==="false"){
            setAttrs( this.followBtn,{
                "value" : "Follow"
            })
        }else{
            setAttrs( this.followBtn,{
                "value" : "unFollow"
            })
        }
    }
}  

