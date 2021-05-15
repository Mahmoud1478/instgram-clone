// functions
function userDropDown(){
    const userBtn = document.querySelector("#dropdown");
    if (userBtn !== null){
        userBtn.addEventListener("click",function(e){
            e.preventDefault()
            const menue = document.querySelector("#setting");
            if (menue.classList.contains('active')){
                menue.classList.remove("active")
            }else{
                menue.classList.add("active")
            }
            
        })
    }
}

function inputsFormUi(){
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

function loginSlider(element,ms){
    if( element !==null){
        let sliderImages = Array.from(document.querySelectorAll('.slider-items img'))
        let index = 1
        setInterval(function(){   
            if (index < sliderImages.length ){
                sliderImages.forEach( (ele)=>{
                    ele.style.display = "none"
                })
                fadeIn(sliderImages[index],ms +200)
                index++
            }else{index = 0}
        },ms)
    }
}

function setCss(element,style){
    Object.entries(style).forEach((prop)=>{
        element.style.setProperty(prop[0],prop[1])
    })
}
export const getAttrs = (element,params) => {
    let attrArray = new Array()
    params.keys.forEach(key =>{
        attrArray.append(element.getAttribute(key))
    })
    return attrArray
};
export const setAttrs = (element,params) => {
    Object.keys(params).forEach(key =>{
        element.setAttribute(key,params[key])
    })
};
export {userDropDown,inputsFormUi,fadeIn ,fadeOut ,loginSlider,setCss}
