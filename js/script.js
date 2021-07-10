

function getId(note){
    var noteId = Number(note);
    console.log(noteId)
    var data =  new FormData();
    data.append('id',noteId);
    // console.log(noteId);
    var request = new XMLHttpRequest();
    request.open("POST","src/delete.php");
    request.onload = function() {
        location.href = "../index.php";
        //console.log(this.response);
    //     var other = new XMLHttpRequest();
    //     other.open("GET","db_connect.php?zz=11");
    //     other.send();
    }
    request.send(data);
}


// function incheck(obj){
//     if(obj.value === "on"){
//         console.log(obj.attributes);
//         obj.attr("checked","on");
//     }else{
//         console.log("other");
//     }
// }


function test(obj){
    var elem = obj.childNodes[1];
    var data = new FormData();
    data.append("id",elem.innerText);
    var request = new XMLHttpRequest();
    request.open("POST","src/changeState.php");
    request.onreadystatechange = function(){
        console.log("hiii");
        location.href = "../index.php";
    }
    request.send(data);
    console.log(elem.innerText);
}

function test2(obj){
    var elem = obj.childNodes[1];
    var data = new FormData();
    data.append("id2",elem.innerText);
    var request = new XMLHttpRequest();
    request.open("POST","src/changeState.php");
    request.onreadystatechange = function(){
        console.log("hiii");
        location.href = "../index.php";
    }
    request.send(data);
    console.log(elem.innerText);
}
