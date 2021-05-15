require('./bootstrap');
import  Login from "./pages/login.js"
import Register from "./pages/regester.js"
import {userDropDown} from "./libs/functions.js"
import Profile from "./pages/profile.js"
document.addEventListener('DOMContentLoaded', ()=> {
    class App {
        path = window.location.pathname
        page = null
        constructor(){
            this.userBtn()
            if(this.path ==="/login"){
                this.page = new Login()
            }else if (this.path ==="/register"){
                this.page = new Register()
            }else if(this.path ==="/index" | this.path ==="/" ){
               //
            }else if (this.path ==="/post"){
                //
            }else if(this.path ==="/profile"){
                this.page = new Profile()
            }
            else{
                console.log(this.path)
            }
        }
        userBtn = ()=>{
            //const btns = Array.from(document.querySelectorAll(".dropdown_item a"))
            //btns[0].setAttribute("href","profile.html")
            //btns[1].setAttribute("href","post.html")
            //btns[2].setAttribute("href","index.html")
            userDropDown()
        }
    } 
    const app = new App() 
})



