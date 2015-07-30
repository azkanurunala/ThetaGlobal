 $(document).ready(function () {
                var i = 0;
    var numberOfWraps = 4; //value from SQL query
    for (var j = i+1; j<=numberOfWraps; j++){
        $('#wrap'+j).toggle('hide');
    }
    setInterval(function () {
        if (i !== numberOfWraps){
            $('#wrap'+(i+1)).toggle('show');
            $('#wrap'+i).toggle('hide');
            i = i+1;
        }
        else{
            $('#wrap'+numberOfWraps).toggle('hide');
            i = 0;
            $('#wrap'+i).toggle('show');    
        }
    }, 3000);
    });