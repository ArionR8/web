<!DOCTYPE html>
<html>
<head>
    <title>HappyMindset</title>
    <link rel="icon" type="image/x-icon" href="logo.PNG">
    <?php $assets = '/web/assets'; ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $assets ; ?>/css/style-for-nutrition.css?v=<?php echo time(); ?>">
 <Style>
html{
    scroll-behavior: smooth;
}
 </Style>
</head>
<body>
    
    <div class="paralax">
        <div class="paralax-item p-item1"></div>
        <div class="paralax-item p-item2"></div>
        <div class="paralax-item p-item3"></div>
        <div class="paralax-item p-item4"></div>
     
    </div>
    
    <div class="sign">
        <ul>
          <li><a href="#div1">Breakfast</a></li>
          <li><a href="#div2">Lunch</a></li>
          <li><a href="#div3">Dinner</a></li>
      </ul>
      </div>
<div class="home-link">
    <h1><a href="Home-page.php" target="_self">HappyMindset</a></h1>
</div>

<div class="notification" id="notification">
    <div>&#129504;</div>
    <div style="border-color:blue;">&#129505;</div>
    <div style="border-color:red;">&#128170;</div><span id="timer"></span>
    <p><b style="color:green;">Green:</b> Excellent effect.<br>
    <b style="color:blue;">Blue:</b> Good effect.<br>
    <b style="color:red;"> Red:</b> Less helpful effect.</cp>
</div>


    <div class="morning-dishes" id="div1">
      <div class="dishes" style="margin-left:16%;">
      <div class="dishes-status">
      <div style="border-color:red;">&#129504;</div>
      <div>&#129505;</div>
      <div style="border-color:green;">&#128170;</div>
  </div>
  <div class="dishes-img">
      <img src="<?= $assets ; ?>/images-nutrition/Your-Delicious-Simple-Vegan-French-Toast-removebg-preview.png" style="width:100%;margin-bottom:-16px;">
  </div>
  <div class="dishes-info">
  <h1>French toast</h1>
  <p>Whisk together eggs, milk, vanilla, and optional cinnamon. 
  Dip bread slices in the mixture and cook on a buttered skillet until golden brown 
  (2-3 mins per side). Top with syrup, sugar, or fresh fruit for a delightful start to your 
  day. Elevate your breakfast with this delicious homemade French toast!</p>
  <div class="dishes-stars" id="frenchtoast-stars">
      <div>&#11088;</div>
      <div>&#11088;</div>
      <div>&#11088;</div>
      <div>&#11088;</div>
  </div>
  </div>
  </div>
  <div class="dishes">
      <div class="dishes-status">
          <div style="border-color:green;">&#129504;</div>
          <div>&#129505;</div>
          <div>&#128170;</div>
      </div>
      <div class="dishes-img">
          <img src="<?= $assets ; ?>/images-nutrition/greekyogurt.png" style="width:100%;margin-bottom:-16px;">
      </div>
      <div class="dishes-info">
      <h1>Greek Yogurt Parfait</h1>
      <p>Indulge in the wholesome delight of a Greek Yogurt Parfait, a harmonious symphony of 
      flavors and textures that make for a perfect morning indulgence. 
      This nutritious begins with velvety Greek yogurt, 
      providing a creamy and protein-packed base. Layers of vibrant, 
     natural sweetness.</p>
      <div class="dishes-stars">
          <div>&#11088;</div>
          <div>&#11088;</div>
          <div>&#11088;</div>
          <div>&#11088;</div>
          <div>&#11088;</div>
      </div>
      </div>
      </div>
  
      <div class="dishes">
          <div class="dishes-status">
              <div>&#129504;</div>
              <div style="border-color:green;">&#129505;</div>
              <div style="border-color:red;">&#128170;</div>
          </div>
          <div class="dishes-img">
              <img src="<?= $assets ; ?>/images-nutrition/avokado-toast.png" style="width:100%;margin-bottom:-16px;">
          </div>
          <div class="dishes-info">
          <h1>Avocado Toast</h1>
          <p>This breakfast classic not only delights the palate with its rich, buttery avocado goodness but also provides a 
      nutritious kick, delivering essential vitamins, healthy fats, and a burst of energy to kickstart your day. Avocado Toast is a delicious 
      embodiment of balance, delightful morning bite.</p>
          <div class="dishes-stars">
              <div>&#11088;</div>
              <div>&#11088;</div>
              <div>&#11088;</div>
          </div>
          </div>
          </div>
  
  </div>
  
  <div class="lunch-dishes" id="div2">
      <div class="dishes">
          <div class="dishes-status">
              <div style="border-color:red;">&#129504;</div>
              <div>&#129505;</div>
              <div style="border-color:green;">&#128170;</div>
          </div>
          <div class="dishes-img">
              <img src="<?= $assets ; ?>/images-nutrition/chicken sald.png" style="width:100%;margin-bottom:-16px;">
          </div>
          <div class="dishes-info">
          <h1>Grilled Chicken Salad</h1>
          <p>Savor the freshness of our Grilled Chicken Salad-a delightful mix of tender grilled chicken, crisp greens, cherry tomatoes, and cucumbers. 
          This protein-packed salad offers a burst of flavors, creating a satisfying and nutritious lunch option.</p>
          <div class="dishes-stars"  id="grill-stars">
              <div>&#11088;</div>
              <div>&#11088;</div>
              <div>&#11088;</div>
          </div>
          </div>
          </div>
  
          <div class="dishes">
              <div class="dishes-status">
                  <div style="border-color:green;">&#129504;</div>
                  <div>&#129505;</div>
                  <div style="border-color:green;">&#128170;</div>
              </div>
              <div class="dishes-img">
                  <img src="<?= $assets ; ?>/images-nutrition/burrito.png" style="width:100%;margin-bottom:-17px;">
              </div>
              <div class="dishes-info">
              <h1>Turkey and Avocado Wrap</h1>
              <p>Experience a burst of freshness with our Turkey and Avocado Wrap. Succulent slices slices of lean turkey meet the creamy richness of avocado, 
          nestled in a whole-grain wrap. It's the perfect choice for a delicious and nutritious lunch.</p>
              <div class="dishes-stars" id="turkey-stars" >
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
              </div>
              </div>
              </div>
              
          <div class="dishes">
              <div class="dishes-status">
                  <div style="border-color:green;">&#129504;</div>
                  <div style="border-color:green;">&#129505;</div>
                  <div style="border-color:green;">&#128170;</div>
              </div>
              <div class="dishes-img">
                  <img src="<?= $assets ; ?>/images-nutrition/shrimp.png" style="width:100%;margin-bottom:-28px;padding-top: 10px;">
              </div>
              <div class="dishes-info">
              <h1>Shrimp and Quinoa Salad</h1>
              <p>Savor our Shrimp and Quinoa Salad-a protein-packed blend of succulent shrimp, fluffy quinoa, cherry tomatoes, creamy avocado, and arugula. 
              Tossed in a light lemon vinaigrette, it's a refreshing and satisfying lunch choice, brimming with vibrant.</p>
              <div class="dishes-stars" id="shrimp-stars">
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
              </div>
              </div>
              </div>
  </div>
  
  <div class="dinner-dishes" id="div3">
  
          <div class="dishes">
              <div class="dishes-status">
                  <div style="border-color:green;">&#129504;</div>
                  <div style="border-color:green;">&#129505;</div>
                  <div style="border-color:green;">&#128170;</div>
              </div>
              <div class="dishes-img">
                  <img src="<?= $assets ; ?>/images-nutrition/salmon.png" style="width:100%;margin-bottom:-21.5px;padding-top: 5px;">
              </div>
              <div class="dishes-info">
              <h1>Baked Salmon</h1>
              <p>Indulge in our Baked Salmon with Roasted Vegetables-a symphony of succulent salmon paired with vibrant, oven-roasted veggies. 
          Seasoned to perfection, this dish is a delightful blend of rich omega-3s and caramelized goodness, offering a quick, wholesome, and flavorful dinner option. </p>
              <div class="dishes-stars" id="salmon-stars">
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
                  <div>&#11088;</div>
              </div>
              </div>
              </div>
  
              <div class="dishes">
                  <div class="dishes-status">
                      <div style="border-color:green;">&#129504;</div>
                      <div style="border-color:green;">&#129505;</div>
                      <div style="border-color:red;">&#128170;</div>
                  </div>
                  <div class="dishes-img">
                      <img src="<?= $assets ; ?>/images-nutrition/saup.png" style="width:100%;margin-bottom:-22.5px;padding-top: 5px;">
                  </div>
                  <div class="dishes-info">
                  <h1>Minestrone Soup</h1>
          <p>Delight in the heartiness of our Minestrone Soup-an inviting blend of seasonal vegetables, beans, and whole-grain pasta. 
      Bursting with nutrition and robust flavors, this classic Italian soup is a choice. Each spoonful brings the warmth 
      and goodness of a homemade favorite.</p>
                  <div class="dishes-stars" style="padding:20px 0px 5px 0;">
                      <div>&#11088;</div>
                      <div>&#11088;</div>
                      <div>&#11088;</div>
                  </div>
                  </div>
                  </div>
  
                  <div class="dishes">
                      <div class="dishes-status">
                          <div>&#129504;</div>
                          <div>&#129505;</div>
                          <div style="border-color:green;">&#128170;</div>
                      </div>
                      <div class="dishes-img">
                          <img src="<?= $assets ; ?>/images-nutrition/chicken breast.png" style="width:100%;margin-bottom:-26.5px;padding-top: 9px;">
                      </div>
                      <div class="dishes-info">
                      <h1>Chicken with Quinoa and Spinach</h1>
              <p>Indulge in the simplicity of our Grilled Chicken with Quinoa and Spinach. Grilled chicken meets the duo of quinoa and 
  spinach for a protein-packed and nutrient-rich. This balanced dish is a delightful and healthful dining experience.</p>
                      <div class="dishes-stars" id="quinoa-stars"> 
                          <div>&#11088;</div>
                          <div>&#11088;</div>
                          <div>&#11088;</div>
                      </div>
                      </div>
                      </div>
  </div>


<div class="rotate-phone"></div>
 <!--Nutrition JAVA SCRIPT file-link is HERE!-->
      <script src="<?= $assets ; ?>/javascript/functions-for-nutrition.js?v=<?php echo time(); ?>"></script>
      
</body>
</html>