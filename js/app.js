import  Login from "./pages/login.js"
import Regester from "./pages/regester.js"
import {userDropDown} from "./libs/functions.js"
import Profile from "./pages/profile.js"
document.addEventListener('DOMContentLoaded', ()=> {
    class App {
        path = window.location.pathname
        page = null
        constructor(){
            this.userBtn()
            if(this.path ==="/login.html"){
                this.page = new Login()
            }else if (this.path ==="/regester.html"){
                this.page = new Regester()
            }else if(this.path ==="/index.html" | this.path ==="/" ){
               //
            }else if (this.path ==="/post.html"){
                //
            }else if(this.path ==="/profile.html"){
                this.page = new Profile
            }
            else{
                console.log(this.path)
            }
        }
        userBtn = ()=>{
            const btns = Array.from(document.querySelectorAll(".dropdown_item a"))
            btns[0].setAttribute("href","profile.html")
            btns[1].setAttribute("href","post.html")
            btns[2].setAttribute("href","index.html")
            userDropDown()
        }
    } 
    const app = new App() 
})














