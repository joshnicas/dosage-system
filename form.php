<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header("location:./index.html");
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
         body{
            background-color:white;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            
            

    
        }
        #heading{
            background-color: palegreen;
            position: fixed; 
            width: 100%;
            top: 0;
            display: flex;
            gap: 40rem;
            padding-left: 2rem;
            
            
            
        }
        form{
            padding-top: 8rem;
            padding-left: 2rem;
        }
        input{
            height: 2rem;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
        #top-nav{
            display: flex;
            flex-direction: column;
            padding: 2rem;

        }
        nav{
            display: flex;
            gap: 3rem;
            font-size: larger;
        }
        #age_sex{
            display:flex;
            gap: 4rem;

        }
        #Weight_height{
            display:flex;
            gap: 4rem;
        }
        #section{
            display: flex;
            flex-direction: row;
            gap: 2rem;
            padding-left:4rem;
             

        }
        #parts{
            background-color: rgb(238, 236, 236);
            padding: 2rem;
            margin-bottom: 1rem;
            width: 100%;
            margin-right: 2rem;
            border-radius: 8px;
            
            
        }
        #Relationship_PhoneNumber{
            display: flex;
            gap: 4rem;
        
        }
    



        </style>
        <title>register patients</title>
        
    </head>
        <body>
            <div id="heading">
               <div id="logo">
                 <h1><b>DRS</b>
               </div>
               <div id="top-nav">
                 <nav>
                    <a href="">home</a>
                    <a href="">patients</a>
                    <a href="">dose</a>
                    <a href="./includes/logout.php">log out</a>
                 </nav>
               </div>

            </div>

        
        
        <form>
        <div id="section">

            <div id="parts">
                <h2 style="text-align: center;">Patient Information</h2>
    
            <label for="Names">Names:</label><br>
           <input type="text" placeholder="First Name">
           <input type="text" placeholder="Second Name">
           <input type="text" placeholder="Surname"><br>
           
           <div id="age_sex">
            <div id="age">
               
            <label for="Age">Age:</label>
             <br>
               <input type="number" "Age">
            </div>
        <div id="sex">
            <label for="Sex">Sex:</label><br>
               <input type="text" name="Sex"><br>
        </div>
           </div>
          
           <div id="age_sex">
            <div id="Weight"> 
                <label for="Weight">Weight:</label><br>
           <input type="number" name="Weight">
        </div>
          <div id="Height">
              <label for="Height">Height:</label><br>
              <input type="number" name="Height">
          </div>
           </div>
            <div id="Home_Address">
            <div id="District">
                <label for="District">District</label><br>
                <input type="text" name="District">
            </div>
            <div id="Ward">
                <label for="Ward">Ward</label><br>
                <input type="word" name="Ward">
            </div>
            <div id="Street">
                <label for="Street">Street</label><br>
                <input type="word" name="Street">
            </div>

            </div>
            <div id="PhoneNumber">
               <label for="PhoneNumber">Phone Number:</label><br>
               <input type="number" "PhoneNumber"><br>
            </div>
            
            </div>


          
            
                 <div id="parts">
                    <h2 style="text-align: center">An attendant information</h2>
    
                 <label for="Names">Names:</label><br>
           <input type="text" placeholder="First Name">
           <input type="text" placeholder="Second Name">
           <input type="text" placeholder="Surname"><br>
           
           <div id="Relationship_PhoneNumber">
            <div id="Relationship">
            <label for="Relationship">Relationship:</label>
             <br>
               <input type="text" name="Relationship">
            </div>
        <div id="PhoneNumber">
            <label for="PhoneNumber">Phone Number:</label><br>
               <input type="number" name="PhoneNumber"><br>
        </div>
           </div>
            <div id="Home_Address">
            <div id="District">
                <label for="District">District</label><br>
                <input type="text" name="District">
            </div>
            <div id="Ward">
                <label for="Ward">Ward</label><br>
                <input type="word" name="Ward">
            </div>
            <div id="Street">
                <label for="Street">Street</label><br>
                <input type="word" name="Street">
            </div>
            </div>
          
           
          
                 </div> 
        </div>
        </div>
        <div id="section">
            <div id="parts">
                <h2 style="text-align: center;">Doctor's information(Consultation)</h2>
    
            <label for="Names">Names:</label><br>
           <input type="text" placeholder="First Name">
           <input type="text" placeholder="Second Name">
           <input type="text" placeholder="Surname"><br>
        <div id="PhoneNumber">
            <label for="PhoneNumber">Phone Number:</label><br>
            <input type="number" name="PhoneNumber"><br>
        </div>
        <div id="Special_Instructions">
            <label for="SpecialInstruction">Special Instruction</label>
        </div>
           
           
          
           
            </div>
                 <div id="parts">
                    <h2 style="text-align:center;">Dose's Information</h2>
    
                 <label for="Names">Names:</label><br>
           <input type="text" placeholder="First Name">
           <input type="text" placeholder="Second Name">
           <input type="text" placeholder="Surname"><br>
           
           <div id="age_sex">
            <div id="age">
            <label for="Age">Age:</label>
             <br>
               <input type="number" "Age">
            </div>
        <div id="sex">
            <label for="Sex">Sex:</label><br>
               <input type="text" "Sex"><br>
        </div>
           </div>
          
           <div id="age_sex">
            <div id="Weight"> 
                <label for="Weight">Weight:</label><br>
           <input type="number" "Weight">
        </div>
          <div id="Height">
              <label for="Height">Height:</label><br>
              <input type="number" "Height">
          </div>


          
                 </div>
        </div>


        </div>
        </form>
</body>
</html>