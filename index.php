<html lang="ru">

<head>
    <? require 'php/db.php'?>   
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Comments</title>
</head>
<body>
 <section>
   <div class="container">
       <? 
       $x = count($res_comment)-4;
        $i=0;
       foreach( $res_comment  as  $arry )
         {
           $i++;
           if($i>$x){
             echo "<div class='comm_block'>";
             echo '<b>', $arry["name"]  .  "</b>, ";
             echo $arry["email"]  .  "<br>";
             echo 'категория - ' .$arry["category"]  .  "<br>";
             echo "<hr>" .$arry["comment"]  .  "</div>";
          }}
  
       ?>
   </div>
      
   <div class="comment">
      <p class="warning">Для отправки комментария заполните все поля!</p>
      
       <form id="comnt_form" action="php/form.php" method="POST">
          <div>
              <label for="name">Введите Ваше Ф.И.О.</label>
              <input type="text" id="name" name="name" checked autocomplete="additional-name" placeholder="Иванов Иван Иванович" required maxlength="20">
              </div>
           
           <div>
               <label for="mail">Ваш e-mail</label> 
               <input type="email" id="mail" name='email' placeholder="ivan@mail.ru" required maxlength="20">
           </div>
           <div>
              Выберите категорию
                  <select name="category">
                     <?
                      foreach ( $res_categ as $cat ) {
                  echo '<option value=' .$cat['name'] .'>' .$cat['name'] .'</option>';
                      }
                      ?>
                     
                  </select>
           </div>
           <div>
               <label for="comment">Ваш комментарий</label><br>
               <textarea type="text" name="comment" id="comment" cols="70" required maxlength="500" rows="4"></textarea>
            </div>
            <center>
           <button>Отправить</button>
           </center>
       </form>
   </div>
 </section>
</body>
</html>