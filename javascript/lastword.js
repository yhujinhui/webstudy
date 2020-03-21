var body=document.body;
var word=document.createElement('div');
word.textContent='제로초'
document.body.append(word);
var input=document.createElement('input');
document.body.append(input);
var btn=document.createElement('button');
btn.textContent='입력';
document.body.append(btn);

var word1=prompt('제로초')
var word2
while(1){
    word2=prompt(word1);
    if(word2[0]!==word1[word1.length-1]){
        alert("끝말잇기 끝")
        break;
    }
    word1=word2;
}