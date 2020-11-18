$(document).ready(function(){
    console.log("jquery ok");
    $("esconder").click(function(){
        console.log("esconder");
        $("article").hide();
    })
});