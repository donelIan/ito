<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Patient</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="srch_container">
    <h2>Search Patient</h2>
    <div class="inpt_btn">
        <input type="text" id="search" placeholder="Search for patients...">
        <div id="result"></div>
    </div>
   
    

    <script>
        $(document).ready(function(){
            $('#search').on('input', function(){
                var search = $(this).val();
                if(search != ''){
                    $.ajax({
                        url: 'search_autocomplete.php',
                        method: 'POST',
                        data: {query: search},
                        success: function(data){
                            $('#result').html(data);
                        }
                    });
                } else {
                    $('#result').html('');
                }
            });

            $(document).on('click', 'li', function(){
                var name = $(this).text();
                window.location.href = "result.php?name=" + name;
            });
        });
    </script>
    <a class="add" href="add.php">Add Up</a>
    </div>
</body>
</html>