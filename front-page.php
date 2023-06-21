<?php get_header();?>

<section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1>The Blog</h1>
          <div class="banner__grid">
            <div class="banner__main">
            <?php $cardLg = new WP_Query(array(
                'post_type' => 'post',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'name',
                        'terms' => 'card-lg-banner',
                        'include_children' => false,
                    ),
                )
            ))

            ?>
            <?php if($cardLg->have_posts()) : while($cardLg->have_posts()) : $cardLg->the_post()?>
              <article class="banner__story">
                 <?php if(has_post_thumbnail()){
                    the_post_thumbnail();
                 }?>
                <div class="banner__story__content">
                  <small>Oct 21, 2022</small>
                  <h2><?php the_title(); ?></h2>
                  <p>
                    
                    
                    <?php the_content(); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>">Read More...</a>
                </div>
              </article>
            <?php endwhile;
            else :
                echo "No Post!!!";
            endif;

            wp_reset_postdata();
            ?>

            </div>

            <div class="banner__sidebar">
            <?php $cardSm = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'name',
                        'terms' => 'card-sm-banner',
                        'include_children' => false,
                    ),
                )
            ))

            ?>
            <?php if($cardSm->have_posts()) : while($cardSm->have_posts()) : $cardSm->the_post()?>
              <div class="card__sm">
              <?php if(has_post_thumbnail()){
                    the_post_thumbnail('banner-sm');
                 }?>
                <div class="card__sm__content">
                  <small>May 21, 2010</small>
                  <h3><?php the_title(); ?></h3>
                  <a href="<?php the_permalink(); ?>">Read More...</a>
                </div>
              </div>
              <?php endwhile;
            else :
                echo "No Post!!!";
            endif;

            wp_reset_postdata();
            ?>

             
            </div>

          </div>
        </div>
      </div>
</section>

<section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
          <div class="card__md">
            <img src="./img/img-6.webp" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="./img/img-7.webp" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="./img/img-8.webp" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>
        </div>
      </div>
</section>

<section class="feature">
      <div class="feature__content">
        <h2>Feature New</h2>
        <h3 class="block__header">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga id
          perferendis quisquam error culpa non iure blanditiis placeat rem
          itaque autem nihil ducimus
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <img src="./img/img-9.webp" alt="" />
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
            <article class="card__lg">
              <img src="./img/img-10.webp" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="./img/img-11.webp" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="./img/img-12.webp" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>
          </div>
          <div class="feature__sidebar">
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
          </div>
        </div>
      </div>
</section>


<?php get_footer();?>