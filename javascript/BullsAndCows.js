var bd=document.body;

var 숫자후보;
var 숫자배열;

function 숫자뽑기(){
    숫자후보=[1,2,3,4,5,6,7,8,9];
    숫자배열=[];
    for(var i=0;i<4; i++){
        var 뽑은것=숫자후보.splice(Math.floor(Math.random()*(9-i)),1)[0];
        숫자배열.push(뽑은것)
    }//+ shift=pop, unshift=push
}
숫자뽑기();
console.log(숫자배열);

var result=document.createElement('h1')
document.body.append(result)
var form=document.createElement('form')
document.body.append(form)
var input=document.createElement('input')
form.append(input)
input.type='text'
input.focus()
input.maxLength=4
var btn=document.createElement('button');
btn.textContent='입력';
form.append(btn);
var 틀린횟수=0;

form.addEventListener('submit', function(e){
    e.preventDefault();
    var answer=input.value;
    //console.log((answer)===숫자배열.join(''))
    if(answer===숫자배열.join('')) {
        result.textContent="홈런"
        input.value=''
        숫자뽑기();
        console.log(숫자배열);
        틀린횟수=0;
    }else{
        틀린횟수++;
        var 답배열=answer.split('');
        var 스트라이크=0;
        var 볼=0;
        if(틀린횟수>10) {
            result.textContent = "10번 넘어서 실패! 답은 " + 숫자배열.join(',') + "였습니다!";
            input.value = '';
            숫자뽑기();
            틀린횟수=0;
        }else{
            for(var i=0; i<4; i++){
                if(Number(답배열[i])===숫자배열[i]){
                    스트라이크++;
                }else if(숫자배열.indexOf(Number(답배열[i]))!==-1){
                    볼++;
                }
            }
            result.textContent=스트라이크+'스트라이크 '+볼+'볼입니다. ';
            input.value='';
        }

    }
})