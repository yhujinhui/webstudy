var body=document.body;
var result=document.createElement('h1');
body.append(result);
var table=document.createElement('table');
body.appendChild(table);
var arr_td=[];
var arr_tr=[];
var turn='X';
var action=function (e) {
    console.log(e.target);
    console.log(e.target.parentNode);
    console.log(e.target.parentNode.parentNode);
    var index_tr=arr_tr.indexOf(e.target.parentNode);
    console.log(index_tr);
    var index_td=arr_td[index_tr].indexOf(e.target);
    console.log(index_td);

    if(arr_td[index_tr][index_td].textContent !== "") {//칸이 이미 채워져 있는가
        console.log('빈칸 X');
    }else{
        console.log('빈칸');
        arr_td[index_tr][index_td].textContent=turn;
        var bingo=false;
        if(
            arr_td[index_tr][0].textContent===turn &&
            arr_td[index_tr][1].textContent===turn&&
            arr_td[index_tr][2].textContent===turn
        ){
            bingo=true;
        }
        if(
            arr_td[0][index_td].textContent===turn &&
            arr_td[1][index_td].textContent===turn&&
            arr_td[2][index_td].textContent===turn
        ){
            bingo=true;
        }
        if(index_tr-index_td===0){
            if(
                arr_td[0][0].textContent===turn&&
                arr_td[1][1].textContent===turn&&
                arr_td[2][2].textContent===turn
            ){
                bingo=true;
            }
        }
        if(index_tr+index_td===2){
            if(
                arr_td[0][2].textContent===turn&&
                arr_td[1][1].textContent===turn&&
                arr_td[2][0].textContent===turn
            ){
                bingo=true;
            }
        }
        if(bingo){
            result.textContent=turn+"님이 승리!";
            arr_td.forEach(function(tr){
                tr.forEach(function(td){
                td.textContent='';
                });
            });

        }else{
            if(turn=='X'){
                turn='O';
            }else{
                turn='X';
            }
        }
    }
}
    //세칸 다 채워졌나?

for(var i=1;i<=3;i++) {
    var tr = document.createElement('tr');
    arr_td.push([]);
    arr_tr.push(tr);
    for (var j = 1; j <= 3; j++) {
        var td = document.createElement('td');
        td.addEventListener('click',action);
        arr_td[i-1].push(td);
        tr.appendChild(td);
    }
    table.appendChild(tr);
    console.log(arr_tr);
}

