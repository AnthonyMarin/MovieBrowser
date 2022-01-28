<!DOCTYPE html>
<html>
    <head>
        <script src = "JS/movieScript.js"></script>
        <script src = "JS/editFunctions.js"></script>
        <script src = "JS/insert.js"></script>
        <script src = "JS/navigationFunctions.js"></script>
        <script src = "JS/delete.js"></script>
        <script src = "JS/sortBy.js"></script>
      

        <style>
            body{
                background: #2f475f ;
                
                height:89vh;
                background:radial-gradient(transparent, black);
              
            }
           #movieInfo{
                display:flex;
                justify-content:space-between; 
                margin-top:1%;
                
                
            }
            #mainContent{
                width:80%;
                height:80%;
                align-content:center;
                margin-left:10%;
                
            }
          
            #movieText{
                padding-top:5%;
            }
            #titleYear{
                display:flex;
            }
            #ratings{
                display:flex;
            }
            #posterContainer{
                
                
            }
            #indices{
                display:flex;
                justify-content: center;
                font-size: 20px;

            }
            #skipButtons{
                display:flex;
                justify-content:center;
            }
            #moviePoster{
                height:70vh;
                box-shadow: -4px 5px 4px black;
                
            }
            .buttonA{
               
               height:100px;
                background-repeat: no-repeat;
            }
            .buttons{
                height:100%;
            }
            .buttonDiv{ 
                display:flex;
                flex-direction:column;
                justify-content:center;

            }
            .skipButtonA {
               height: 50px;
               padding:10px;
            }
            label{
                text-align:right;
               font-weight:bold;
                
             
            }
            .buttonA, .skipButtonA{
                
                border:white;
            }
            #userFor{
                width:80%;
            }
            #buttonContainers{
                height:10%;
            margin-left:5%;
            }
            .dbButtons{
                display:inline-block;
            
             background-color: transparent;
            border: 0;
            color: #fefbef;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            line-height: 1;
            margin-top: 1.5rem;
            width: 18%; /* Large, mobile-friendly touch target */
            background: #da1a1a;
            height:100%;
            
         }
         .dbButtons:hover{
         background: #843e3e;
         

         }
         .dbButtons{
            box-shadow: -4px 5px 4px black;
         }
         .inputs{
            border-radius: 3px;
            border: 1px solid transparent;
            border-top: none;
            border-bottom: 1px solid #DDD;
            box-shadow: inset 0 1px 2px rgba(0,0,0,.39), 0 -1px 1px #FFF, 0 1px 0 #FFF;
            height:50px;
         }
         table{
             height:100%;
         }
         .dataRow{
             height:20%;
         }
         td label{
             font-size: 20px;


         }
        
        </style>
          <meta name="viewport" content="width=1000; user-scalable=0;" />
    </head>
    <body onload = "selection()">
        <section id = "mainContent">

        <form id="userform">
            
                
                <div id  = "movieInfo">
                    <div class = "buttonDiv">
                    
                    <a class ="buttonA" onclick = "prev()"> <img class = "buttons" src = "img/leftImg.png"></img></a>
                    </div>
                 
                    <div id = "posterContainer">
             
                    <img id = "moviePoster" src="">
                    <div id = "posterInputContainer"></div>
                     </div>
                     

                    <form>
                        <div id = "movieText">
                            <?php
                
                            ?>
                            <table>
                                <tr class = "dataRow">
                                    <td><label for = "title">Title:</label></td>
                                    <td><input type = "text" id = "title" name ="title" value="" class = "inputs" readonly></input></td>
                                </tr>
                                <tr>
                                    <td><label for = "year">Year:</label></td>
                                    <td><input id = "year" name ="year"type = text class = "inputs" readonly></input></td>
                                </tr>
                                
                                <tr>
                                    <td><label for = "director">Director:</label></td>
                                    <td><input id = "director" name = "director" type = "text" class = "inputs" readonly></input></td>
                                </tr>
                                
                                <tr>
                                   <td> <label for = "rating">Rating:</label></td>
                                  
                                    <td> <div id ="ratings"><input name ="rating" id = "rating" type ="number" class = "inputs"readonly></input> <div>  &nbsp; of &nbsp; 5</div></div></td>
                                    

                                </tr>
                            </table>
                            
                        </div>
                     </form>
                     <div class = "buttonDiv">

                        <a class ="buttonA" onclick = "next()"> <img class = "buttons" src = "img/rightImg.png"></img></a>
                    </div>
                </div>
                <div id = "indices">
                    <div id = "index">
                        
                    </div>
                    <div>/</div>
                    <div id = "indexOf"></div>
                
                    
                </div>
                <div id = "skipButtons">
                    <a class = "skipButtonA" onclick = "skipBack()" ><img class = "buttons" src = "img/skipLeft.png"></a>
                    <a class = "skipButtonA"   onclick = "skipForward()"><img class = "buttons" src = "img/skipRight.png"></a>

                </div>
                
                     

                
        
        </form>

        </section>
        <div id = "buttonContainers">
                    <button class = "dbButtons"id = "editButton" type = "button" onclick = "edit()">Edit</button>
                    <button class = "dbButtons" id = "insertButton" type = "button" onclick = "insert()">Insert </button>
                    <button  class = "dbButtons" id = "deleteButton" type = "button" onclick = "deleteMovie()"> Delete</button>
                    <button class = "dbButtons"  id = "sortByTitleButton" type = "button" onclick = "sortByTitle()">Sort by Title: Ascending</button> <!--DB queries-->
                    <button class = "dbButtons"  id = "sortByYearButton" type = "button" onclick = "sortByYear()">Sort by Year: Ascending</button>
                    <button class = "dbButtons"id = "select5Button" type = "button" onclick = "select5()">Show All 5s</button>
                    <button class = "dbButtons"id = "loadFromJSON" type = "button" onclick = "loadFromJSON()">! JSON->DB !</button>
               
        </div>
        </div>

       
    </body>
</html>