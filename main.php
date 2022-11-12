<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Business card </title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/250.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Я научился создавать переменные </p>
                    <p> Изучил простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <div class="vl"></div>

                    
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> <br>
                    <?php
                        echo $e;
                    ?> <br>
                    <?php
                        echo $f;
                    ?> <br>
                    <?php
                        echo $i;
                    ?> <br>

            </div>

            <div class="article">
                <p class="text">
                Это одна из разновидностей текста lorem ipsum, который используют дизайнеры, 
                набирающие рыбу (произвольный текст, намеренно лишённый смысла). Обычно lorem ipsum используют, 
                если нужно заполнить некое место текстом и не думать о его содержании.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>