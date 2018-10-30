<?php get_header(); ?>

<div class="container">
      <div class="padded">
        <div class="row">
          <div class="three fifths bounceInRight animated">
            <h1 class="zero museo-slab">Web Site Example Layout</h1>
            <p class="quicksand">Demonstrates Typography, Styled Lists, Buttons, Source Reordering, Grid Breakpoint Modifiers and Adapters</p>
          </div>
        </div>
      </div>
      <hr>
      <article class="row">
        <section class="two fourths right-one padded bounceInDown animated"><img src="http://placehold.it/750x400/2ecc71/ffffff/&amp;text=Main+Image" alt="">
          <?php 
                if( have_posts() ):
                    
                    while( have_posts() ): the_post(); ?>
                    
                        <h3><?php the_title(); ?></h3>
                        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
                        <p><?php the_excerpt(); ?></p>
                    <?php endwhile;
                    
                endif;
			
            ?>
        </section>
        <aside class="one fourth left-two padded border-right bounceInLeft animated">
          <h1>Left Sidebar</h1>
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
          <h3>Left Sidebar Image Gallery</h3>
          <div class="row">
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
            <div class="one half three-up-small-tablet two-up-mobile padded align-center"><img src="http://placehold.it/120x85/e67e22/ffffff/" alt=""></div>
          </div>
          <div class="pad-right pad-left">
            <p class="align-right">
              <button class="orange">View more</button>
            </p>
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