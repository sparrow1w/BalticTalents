<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
              <h2 class="post-title">
              </h2>
              <h3 class="post-subtitle">
                <?php the_content(); ?>
              </h3>
            <nav>
                <ul class="pager">
                <li><?php next_post_link('%link', __('Naujesnis', 'balta') ); ?></li>
                <li><?php previous_post_link('%link', __('Senesnis', 'balta') ); ?></li>
                </ul>
            </nav>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2017</p>
          </div> 
        </div>
    </div>
 </div>