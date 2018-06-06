<?php

function getAllBlogPosts(){
  return array(
    1 =>  array( /*summer post*/
      "title" => "Goals to Accomplish This Summer",
      "body" => "
              <img src='images/IMG_7571.jpg' alt='fellowship' width= '500px' height= '400px'> <br>
                This summer, I will be staying in St. Louis, participating in the Less Annoying CRM Coding Fellowship program.
                Over the next two months, we'll be learning the basics of building a website and hopefully get to build our own.
                As I work here at LACRM, I hope to accomplish some other goals outside of just work and premed, learning to
                destress and have some fun exploring this summer!! <br>

                Besides making a website, I'm determined to utilize this summer and make the most out of the short break that I have.
                As a bunch of my friends happen to be staying here this year, we've basically made a bucket list of things that we
                want to do this summer.

                <ol style='list-style-type:1'>
                    <li>Get my doubles pierced</li>
                    <li>Six Flags</li>
                    <li>Go to Chicago</li>
                    <li>Exercise at least 4 times a week</li>
                    <li>Go stargazing</li>
                    <li>Get my driver's licensce</li>
                    <li>Marvel Marathon</li>
                    <li>Travel with June to Boston</li>
                </ol>

                <p>Although there really is not a huge chance that I'll be able to get all of this done along with working a full 9-5 job,
                  working part time at Kayaks, and taking MedPrep II - although it is still up for grabs - I hope to at least get some fun
                  time in with friends!!</p>
                ",
      "date" => "May 21st, 2018",
      "intro"=> "
            This summer, I will be staying in St. Louis, participating in the Less Annoying CRM Coding Fellowship program.
              Over the next two months, we'll be learning the basics of building a website and hopefully get to build our own.
              As I work here at LACRM, I hope to accomplish some other goals outside of just work and premed, learning to
              destress and have some fun exploring this summer!!
                ",
      "pics"=> "
          src='images/IMG_7571.jpg' alt='fellowship'
               "
              ),

    2 => array(/*may eats*/
      "title" => "May 2018 Eats",
      "body" => "
          It's been forever my goal to try to eat healthy and shed off some pounds. However, I haven't had much luck.
          With finals hitting beginning of May along with my six day break back at home, I've definitely managed to put on some weight after
          eating so much. As I'm finally getting into the routine of things here in St. Louis, I've been making an effort to cook not only to save
          money but also to eat healthier. The school year has definitely made me beyond dependent on sugar from all the cookies at the Whisper's Cafe,
          and I'm really hoping that I can kick this sugar addiction out of my life and replace some terrible eating habits with better ones.</p> <br>
      <div class='two'>
          <img src='images/IMG_3200.jpg'  alt='cooking' style='width:100%'>
      </div>
      <div class='two'>
          <img src='images/IMG_2988.jpg' alt='seafood' style='width:100%' height='310.5px'>
      </div> <br>

      <p> As I've been subletting from my friend who has just moved in, I definitely haven't had chances to experiment with different recipes.
          My meals have basically been consistent of chicken, spinach, and brocolli, with a scrambeled egg as my base. If I felt fancy or
          wanted a bit more food, I'd either add half an avocado or an extra boiled egg. And I can't ever forget my sriracha to top off the meal!
          I'm hoping that the rest of summer will be me experimenting a lot more with healthy recipes instead of repeating this same meal for the
          rest of my life, and hope to expand my range of food that I can cook. Although I may seem like I'm JUST eating healthy, I recently went
          back home for six days. Those six days were basically spent lounging around and stuffing my face with whatever food I could possibly find.
          From oysters and the Mardi Gras pasta at Papadeux (the best pasta and shrimp I've had to be honest) to boba and kbbq, I pushed my limits with
          how much food I could stuff in one sitting. I'll definitely be deprived of great boba and my mom's homemade Korean food, but I hope to explore
          the food scene in St. Louis a little more as I continue to work in the city for the rest of the summer! </p>
      </p>
                ",
      "date"=> "May 22nd, 2018",
      "intro"=> "It has been forever my goal to try to eat healthy CONSISTENTLY because CONSISTENCY is KEY. However, I haven't had much luck.
          With finals hitting beginning of May along with my six day break back at home, I've definitely managed to put on some weight after
          eating so much. As I am finally getting into the routine of things here in St. Louis, I've been making an effort to cook not only to save
          money but also to eat healthier! It has been a tough process trying to basically quit my sugar addiction, but here are some of the foods I got
          a taste of during the month of May!!<br>",
      "pics"=> "src='images/IMG_3034.jpg' alt='food'"
              ),

            );
}


/* Gets one specific post*/
function getPost($blogPostId){
  $AllPosts = getAllBlogPosts();
  return $AllPosts[$blogPostId];
}

 ?>
