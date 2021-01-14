<html>
    <head>
        <title>Form Table</title>
        <link rel="stylesheet" href="CSS/A_style.css">
    
    </head>
    <body>
        
        <form action="A_index.php" method="post">
        
        <table class="center">
            <tr >
                <th colspan="2">Book Form</th>
            </tr>
            
            <tr>
                <td>Title</td>
                <td> <input type="text" name="title" id="title">
                </td> 
            </tr>          
            <tr>
                <td>Author</td>
                <td> <input type="text" name="author" id="author">
                </td> 
            </tr>
            <tr>
                <td>Category</td>
                <td> <input type="text" name="category" id="category">
                </td> 
            </tr>            
            <tr>
                <td>Unit price</td>
                <td> <input type="text" name="unit_price" id="unit_price">
                </td> 
            </tr>
            
            <tr >
                <td align="center" colspan="2" > 
                    
                    <input type="submit" value="submit" name="submit">
                    
                    <button type="button">Clear</button>
                </td> 
            </tr> 
        </table>
    
        </form>
    
    </body>
    
    </html>

    

 




<?php
$link = mysqli_connect("localhost", "root", "","student");

 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
     echo "success";
 }
     
 if(isset($_POST['submit'])){
     
     echo "clicked";
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $unit_price = $_POST['unit_price'];
     

        
        $sql = "INSERT INTO data (title, author, category, unit_price) VALUES ('$title', '$author', '$category','$unit_price')";
     
    
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 }
   
mysqli_close($link);
?>