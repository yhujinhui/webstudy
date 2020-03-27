var body=document.body;
var word=document.createElement('div');
word.textContent='제로초'
document.body.append(word);
var form=document.createElement('form');
document.body.append(form);
var input=document.createElement('input');
form.append(input);
var btn=document.createElement('button');
btn.textContent='입력';
form.append(btn);
var re=document.createElement('div');
document.body.append(re);

form.addEventListener('submit',function(evt){
    evt.preventDefault();//기본동작하지마
    if(word.textContent[word.textContent.length-1]!==input.value[0]){
        re.textContent='땡';
        input.value=null;
        input.focus();
    }else{
        re.textContent='딩동댕';
        word.textContent=input.value;
        input.value=null;
        input.focus();
    }
});

// var word1=prompt('제로초')
// var word2
// while(1){
//     word2=prompt(word1);
//     if(word2[0]!==word1[word1.length-1]){
//         alert("끝말잇기 끝")
//         break;
//     }
//     word1=word2;
// }