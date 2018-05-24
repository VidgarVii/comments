<html lang="ru">

<head>
    <? require 'db.php'?>   
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Comments</title>
</head>
<body>
 <section>
   <div class="container">
       <? 
       foreach( $result  as  $arry )
         {
             echo "<div class='comm_block'>";
             echo '<b>', $arry["name"]  .  "</b>, ";
             echo $arry["email"]  .  "<br>";
             echo 'категория - ' .$arry["category"]  .  "<br>";
             echo "<hr>" .$arry["comment"]  .  "</div>";
          }
       ?>
   </div>
      
   <div class="comment">
      <p class="warning">Для отправки комментария заполните все поля!</p>
       <form action="" method="get">
          <div>
              <label for="name">Введите Ваше Ф.И.О.</label>
              <input type="text" id="name" name="name" checked autocomplete="additional-name" placeholder="Иванов Иван Иванович" pattern="[A-Za-zА-Яа-яЁё]" required maxlength="20">
              </div>
           
           <div>
               <label for="mail">Ваш e-mail</label> 
               <input type="email" id="mail" placeholder="ivan@mail.ru" required maxlength="20">
           </div>
           <div>
              Выберите категорию
                  <select name="category">
                      <option value="1">Renault</option>
                      <option value="2">Nissan</option>
                      <option value="3">Mersedess</option>
                      <option value="4">other</option>
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
