<!DOCTYPE html>

<html>

<head>

    <title>Laravel Autocomplete Search From Database - NiceSnippets.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>

<body>

<div class="container">

    <h1>Laravel Autocomplete Search From Database - NiceSnippets.com</h1>
    <div class="row gy-3">
        <div class="col-md-1">
        <input class="typeahead form-control " data-provide="typeahead" autocomplete="off" id="cod_familia"
                type="text" disabled>
        </div>
        <div class="col-md-5">
        <input class="typeahead form-control" data-provide="typeahead" autocomplete="off" id="familia"
                oninput="this.value = this.value.toUpperCase()"  type="text">
        </div>
    </div>
</div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('#familia.typeahead').typeahead({
        source:  function (query, process) {

            //var test = $.get(path, { query: query } );
            //console.log(test);
            // return $.get(path, { query: query }, function (data) {
            //     const familia = Object.values(data);
            //     //console.log(obj2);
            //     //const obj = JSON.parse(data);
            //     //console.log(obj);
            //     //console.log(obj);
            //     //document.getElementById("cod_familia").value = Object.keys(data);
            //     return process(familia);
            // });
        },

        onselect: function(query, process) {
            console.log(query);
            // return $.get(path, { query: query }, function (data) {
            //         const familia = Object.values(data);
            //         console.log(familia);
            //         return process(familia);
            // });
        },

        itemSelected:function(data,value,text){
            console.log(data);
            alert('value is'+value);
            alert('text is'+text);
        },

        select:function(data,value,text){
            console.log(data);
            alert('value is'+value);
            alert('text is'+text);
        },
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
