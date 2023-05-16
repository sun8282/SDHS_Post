const title = document.querySelector("#utitle");
const text = document.querySelector("#ucontent");
const btn = document.querySelector("button");

 console.log(text);
function texttrim(){
    if(text.value.trim()=="" && title.value.trim() == ""){
                alert("공백은 생성 불가합니다.");
                return;
            }
}
btn.addEventListener('click',texttrim);


