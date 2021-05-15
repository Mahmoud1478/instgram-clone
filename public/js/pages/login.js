import  {inputsFormUi,loginSlider,userDropDown}from "./../libs/functions.js"

class Login{
    slider = document.querySelector('#slider')
    constructor(){
        loginSlider(this.slider,2000)
        inputsFormUi()
        
    }
}
export default Login

