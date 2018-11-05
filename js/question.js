
function getQuestion(){
$.getJSON('go/question', getData);

function getData(data){
    console.info(data[0].id);
    $("#question_text").text(data[0].question);
}

}