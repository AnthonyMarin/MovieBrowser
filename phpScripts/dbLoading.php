<?php 
    $index = $_GET['index'];
    $con = mysqli_connect("localhost","moviesDB","movies","moviesite");

    $a = "SELECT * FROM `movies` WHERE `movieIndex`="; 
    $b = $index;
    $sql = $a.$b;
    
    
    if($con->query($sql) == TRUE){
        $rsl = $con->query($sql);
        $row = $rsl->fetch_row();
        $title = $row[1];
        $director = $row[2];
        $year = $row[3];
        $rating = $row[4];
        $imgLink = $row[5];

        $arr = array($title,$director,$year,$rating,$imgLink);
        
        echo json_encode($row);
        
    }else{
        echo "Error: " . $sql . " <br>" . $con->error;
    }

    $con->close();
    /*echo
    
    "document.getElementById("moviePoster").src = $row[5]
    document.getElementById("title").value = data.movies[x].title;
    document.getElementById("year").value = data.movies[x].year;
    document.getElementById("director").value = data.movies[x].director;
    document.getElementById("rating").value = data.movies[x].rating;
    document.getElementById("index").innerText = index+1;
    document.getElementById("indexOf").innerText = len;"*/

?>
