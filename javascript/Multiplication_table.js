var num1=Math.ceil(Math.random()*9);
var num2=Math.ceil(Math.random()*9);
var result=num1*num2;

var body=document.body;
var question=document.createElement('div');
question.textContent=String(num1)+" X "+String(num2)+" 는?";
document.body.append(question);
var form=document.createElement('form');
document.body.append(form);
var answer=document.createElement('input');
form.append(answer);
var btn=document.createElement('button');
btn.textContent="입력";
form.append(btn);
var text=document.createElement('div');
document.body.append(text);
form.addEventListener('submit',function(e){
    e.preventDefault();
    if(Number(answer.value)===result){
        num1=Math.ceil(Math.random()*9);
        num2=Math.ceil(Math.random()*9);
        result=num1*num2;
        question.textContent=String(num1)+" X "+String(num2)+" 는?";
        text.textContent="딩동댕";
        answer.focus();
        answer.value=null;
    }else {
        text.textContent ="땡";
        answer.focus();
        answer.value=null;
    }
});