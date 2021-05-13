document.addEventListener('DOMContentLoaded', function() {
    userDropDown()
    loginFormUi()
    loginSlider(5000)
})




// functions
function userDropDown(){
    const userBtn = document.querySelector("#dropdown");
    if (userBtn !== null){
        userBtn.addEventListener("click",function(){
            ele = document.querySelector("#setting")
            if (ele.classList.contains('active')){
                ele.classList.remove("active")
            }else{
                ele.classList.add("active")
                //downToUP(ele , 2000)
            }
        })
    }
}

function loginFormUi(){
    const inputsFields = document.querySelectorAll(".form-group input ")
    if( inputsFields !== null) {
        inputsFields.forEach((ele)=>{
            ele.addEventListener('focus',() => {
                ele.setAttribute("placeholder","")})
        })
        inputsFields.forEach((ele)=>{
            ele.addEventListener("blur",()=>{
                ele.setAttribute("placeholder",ele.getAttribute('data-target'))})
        })
    }
}


function fadeIn(element,ms){
    let time = 10
    element.style.display = "block"
    element.style.opacity = 0.001
    const intervalID = setInterval(()=>{
        if (parseFloat(element.style.opacity) < 1 ){
            element.style.opacity = Number(window.getComputedStyle(element).getPropertyValue("opacity")) + 0.01
        }else{  
            clearInterval(intervalID)
            element.style.opacity = ""
        }
    },time * (ms/1000))
};

function fadeOut(element, ms){
    let time = 10
    element.style.opacity = 1
    const intervalID = setInterval(()=>{
        if (parseFloat(element.style.opacity) > 0 ){
            element.style.opacity = Number(window.getComputedStyle(element).getPropertyValue("opacity"))- 0.01
        }else{  
            clearInterval(intervalID)
            element.style.opacity = ""
            element.style.display = "none"
        }

    },time * (ms/1000))
};


function loginSlider(ms){
    if( document.querySelector('#slider') !==null){
        let sliderImages = Array.from(document.querySelectorAll('.slider-items img'))
        let index = 1
        setInterval(function(){
            let randomIndex =Math.floor(Math.random() * sliderImages.length)     
            if (index < sliderImages.length ){
                sliderImages.forEach( (ele)=>{
                    ele.style.display = "none"
                })
                fadeIn(sliderImages[index],ms-100)
                index++
            }else{index = 0}
        },ms)
    }
}

function upToDown(ele,ms){
    ele.style.display = "block"
    ele.style.height = 1 + "%"
    
    const intervalID = setInterval(()=>{
        if(Number(ele.style.height.split("%")[0]) < 100){
            ele.style.height =Number(ele.style.height.split("%")[0]) + 1  + "%"
        } 
        else{
            clearInterval(intervalID)
            ele.style.height = ""
        }
    },10*(ms/1000))
}
function downToUP(ele,ms){
    ele.style.height = 100 + "%"
    const intervalID = setInterval(()=>{
        
        if(Number(ele.style.height.split("%")[0]) > 0){
            ele.style.height =Number(ele.style.height.split("%")[0]) - 1  + "%"
        }
        else{
            clearInterval(intervalID)
            ele.style.height = ""
            ele.style.display = "none"
        }
    },10*(ms/1000))
}





















