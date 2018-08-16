    @extends('layouts.app')

    @section('content')
      @include('partials.page-header')

      <div class="slider area">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3" class></li>
                </ol>
      <div class="carousel-inner">

      
      
        <?php
        global $post;
    
        $myposts = get_posts( array(
            'posts_per_page' => 4,
            "category_name"=> "slider area"
        ) );
        $counter =0;
        if ( $myposts ) {
            foreach ( $myposts as $post ) : 
                setup_postdata( $post ); ?>
                <div class="carousel-item {{$counter === 0 ? 'active': ''}} ">
                <img class="d-block w-100" src="<?php echo  get_the_post_thumbnail_url();?>">
                  <div class="carousel-caption d-none d-md-block">
                          <h2 class="cap"> <?php the_title(); ?></h2>
                          <span class="learn">Learn More</span>
                        </div>
                </div>


            <?php 
                $counter++; 
              
            endforeach;
            wp_reset_postdata();
              }
              ?>

          </div>
          </div>


        //start services area

        <?php
        global $post;
    
        $myposts = get_posts( array(
            'posts_per_page' => 1,
            "category_name"=> "services area"
        ) );
        $counter =0;
        if ( $myposts ) {
            foreach ( $myposts as $post ) : 
                setup_postdata( $post ); ?>
              <div class="container">
                <div class="media m-content ">
              <img class="align-self-start mr-3 img-fluid" src="<?php echo  get_the_post_thumbnail_url();?>">
              <div class="media-body">
                <h2 class="mt-0"><?php the_title ()?></h2>
                <p><?php the_content () ?> </p>
                <span class="read">Continue Reading</span>
                </p>
              </div>
            </div>
                 
          </div>
            </div>

            <?php 
                 
              
            endforeach;
            wp_reset_postdata();
            }
            ?>

        
    

  @endsection

  
        
        
  
      
        