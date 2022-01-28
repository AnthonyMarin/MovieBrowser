<!DOCTYPE html>
<html>
    <head>
        <script src = "movieScript.js"></script>
        <script src = "editFunctions.js"></script>
        <script src = "navigationFunctions.js"></script>
        

        <style>
           #movieInfo{
                display:flex;
                justify-content:space-between; 
                
                
            }
            #titleYear{
                display:flex;
            }
            #ratings{
                display:flex;
            }
            #posterContainer{
                height:50%;
            }
            #indices{
                display:flex;
                justify-content: center;;
            }
            #skipButtons{
                display:flex;
                justify-content:center;
            }
            #moviePoster{
                height:500px;
                
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
            
        </style>
    </head>
    <body onload = "firstSelection()">
        <form id="userform">
            <fieldset> 
                
                <div id  = "movieInfo">
                    <div class = "buttonDiv">
                    
                    <a class ="buttonA" onclick = "prev()"> <img class = "buttons" src = "leftImg.png"></img></a>
                    </div>
                 
                    <div id = "posterContainer">
             
                    <img id = "moviePoster" src="">
                     </div>
                     

                    <form>
                        <div>
                            <table>
                                <tr>
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

                        <a class ="buttonA" onclick = "next()"> <img class = "buttons" src = "rightImg.png"></img></a>
                    </div>
                </div>
                <div id = "indices">
                    <div id = "index">
                        
                    </div>
                    <div>/</div>
                    <div id = "indexOf"></div>
                
                    
                </div>
                <div id = "skipButtons">
                    <a class = "skipButtonA" onclick = "skipBack()" ><img class = "buttons" src = "skipLeft.png"></a>
                    <a class = "skipButtonA"   onclick = "skipForward()"><img class = "buttons" src = "skipRight.png"></a>

                </div>
                <div id = "buttonContainers">
                    <button id = "editButton" type = "button" onclick = "edit()">Edit</button>
                    
                </div>
                     

                
            </fieldset>
        </form>

       
    </body>
</html>