<?php 
	
/*
	Template Name: Home Page
*/
	
get_header(); ?>

<div class="container" id="change_color">
      <div class="padded">
        <div class="row">
          <div class="three fifths bounceInRight animated">
            <h1 class="zero museo-slab" v-bind:style="{color: selectedColorHex}">ยินดีต้อนรับเข้าสู่เว็บไซต์ Portfolio ของผมครับ</h1>
            <p class="quicksand" v-bind:style="{color: selectedColorHex2}">Quality is much better than quantity. One home run is much better than two doubles.</p>
          </div>
        </div>
      </div>
      <hr>
      <article class="row">
        <section  v-bind:style="bgc" class="two fourths right-one padded bounceInDown animated"><img src="<?php bloginfo('template_url'); ?>../images/Steve-Jobs-750x400.jpg" alt="">
          <?php 
                if( have_posts() ):
                    
                    while( have_posts() ): the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    <?php endwhile;
                    
                endif;
			
            ?>
        </section>
        <aside  class="one fourth left-two padded border-right bounceInLeft animated" >
          <p><b>Design website</b></p>
          <div class="row">
            <div class="one whole two-up-small-tablet one-up-mobile">
              <ul class="list">
                <li>
                <p>{{description}}</p>
                <input type="text" v-on:input="bgc.backgroundColor = $event.target.value" placeholder="ภาษาอังกฤษ"/>
                </li>
                <li>
                <p>เปลียนสีตัวอักษร Top bar Title</p>
                <div id="color-picker">
                <color-picker-select :color-options="colors" label="Select Color..." empty-option="None" input-id="color" v-model="selectedColorHex"></color-picker-select>

                </div>
                </li>
                <li>
                <p>เปลียนสีตัวอักษร Top bar tag p</p>
                <div id="color-picker">
                <color-picker-select :color-options="colors" label="Select Color..." empty-option="None" input-id="color" v-model="selectedColorHex2"></color-picker-select>

                </div>
                </li>
              </ul>
            </div>
          </div>
         
        </aside>
        <aside class="one fourth padded border-left bounceInRight animated">
          <h1>Right Sidebar</h1>
          <div class="row">
            <div class="one whole two-up-small-tablet one-up-mobile">
              <ul class="list">
                <li>Unordered list item #1</li>
                <li>Unordered list item #2</li>
                <li>Unordered list item #3</li>
                <li>Unordered list item #4</li>
              </ul>
            </div>
            <div class="one whole two-up-small-tablet one-up-mobile">
              <ol class="list">
                <li>Ordered list item #1</li>
                <li>Ordered list item #2</li>
                <li>Ordered list item #3</li>
              </ol>
            </div>
          </div>
          <hr>
          <h3>Right Sidebar Image Gallery</h3>
          <div class="row">
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e74c3c/ffffff/" alt=""></div>
          </div>
          <div class="pad-right pad-left">
            <p class="align-right">
              <button class="red">View more</button>
            </p>
          </div>
        </aside>
      </article>
      <article class="row bounceInUp animated">
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/f02475/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/1abc9c/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/34495e/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
      </article>
    </div>
   

<?php get_footer(); ?>