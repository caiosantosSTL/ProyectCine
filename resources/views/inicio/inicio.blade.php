@extends('layouts.main')
@section('content')
<section class="section-text-white position-relative">
    <div class="d-background" data-image-src="http://via.placeholder.com/1920x1080" data-parallax="scroll"></div>
    <div class="d-background bg-theme-blacked"></div>
    <div class="mt-auto container position-relative">
        <div class="top-block-head text-uppercase">
            <h2 class="display-4">Ahora
                <span class="text-theme">en el Cine</span>
            </h2>
        </div>
        <div class="top-block-footer">
            <div class="slick-spaced slick-carousel" data-slick-view="navigation responsive-4">
                <div class="slick-slides">
                    @foreach($peliculas as $row)

                      <div class="slick-slide">
                          <article class="poster-entity" data-role="hover-wrap">
                              <div class="embed-responsive embed-responsive-poster">
                                  <img class="embed-responsive-item" src="http://via.placeholder.com/340x510" alt="" />
                              </div>
                              <div class="d-background bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show"></div>
                              <div class="d-over bg-highlight-bottom">
                                  <div class="collapse animated faster entity-play" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                      <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                          <span class="icon-content"><i class="fas fa-play"></i></span>
                                      </a>
                                  </div>
                                  <h4 class="entity-title">
                                      <a class="content-link" href="{{ route('verPelicula', $row->id) }}">{{$row->NomPeli}}</a>
                                  </h4>
                                  <div class="entity-category">
                                      <a class="content-link" href="movies-blocks.html">{{$row->NomGen}}</a>
                                  </div>
                                  <div class="entity-info">
                                      <div class="info-lines">
                                          <div class="info info-short">
                                              <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                                              <span class="info-text">{{$row->calificacion}}</span>
                                              <span class="info-rest">/10</span>
                                          </div>
                                          <div class="info info-short">
                                              <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                                              <span class="info-text">{{$row->duracion}}</span>
                                              <span class="info-rest">&nbsp;min</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </article>
                      </div>
                    @endforeach
                    </div>
                <div class="slick-arrows">
                    <div class="slick-arrow-prev">
                        <span class="th-dots th-arrow-left th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div class="slick-arrow-next">
                        <span class="th-dots th-arrow-right th-dots-animated">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-long">
    <div class="container">
      <button type="button" onclick="pachuca()" name="button">Pachuca</button>
      <button type="button" onclick="queretaro()" name="button">Querétaro</button>
      <div id="mapPach">
        <div id="mapidPach"></div>
      </div>
      <div id="mapQro">
        <div id="mapidQro"></div>
      </div>

        <hr>
        <div class="section-head">
            <h2 class="section-title text-uppercase">Ahora en los cinemas</h2>
            <p class="section-text">Dates: 13 - 15 february 2019</p>
        </div>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie2.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">Outsider</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">crime</a>,
                    <a class="content-link" href="movies-blocks.html">comedy</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">8,1</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">125</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Aenean molestie turpis eu aliquam bibendum. Nulla facilisi. Vestibulum quis risus in lorem suscipit tempor. Morbi consectetur enim vitae justo finibus consectetur. Mauris volutpat nunc dui, quis condimentum dolor efficitur et. Phasellus rhoncus porta nunc eu fermentum. Nullam vitae erat hendrerit, tempor arcu eget, eleifend tortor.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie1.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">Moonlight night</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">comedy</a>,
                    <a class="content-link" href="movies-blocks.html">horror</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">6,8</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">95</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultrices justo a pellentesque. Praesent venenatis dolor nec tempus lacinia. Donec ac condimentum dolor. Nullam sit amet nisl hendrerit, pharetra nulla convallis, malesuada diam. Donec ornare nisl eu lectus rhoncus, at malesuada metus rutrum. Aliquam a nisl vulputate, sodales ipsum aliquam, tempus purus. Suspendisse convallis, lectus nec vehicula sollicitudin, lorem sapien rhoncus dolor, vel lacinia urna velit ullamcorper nisi. Phasellus pellentesque, magna nec gravida feugiat, est magna suscipit ligula, vel porttitor nunc enim at nibh. Sed varius sit amet leo vitae consequat.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie2.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">Say no</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">sport</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">7,4</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">105</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Vivamus dolor ex, viverra ut facilisis et, euismod et quam. Aliquam sit amet mattis velit, ullamcorper venenatis magna. Aenean ac maximus magna. Proin pharetra venenatis tortor, ac suscipit est ultrices vitae. Mauris vulputate, nisl in lacinia dignissim, libero justo vehicula arcu, a porttitor quam erat ac dui. Suspendisse potenti. Maecenas sit amet interdum sem. Vestibulum sit amet volutpat mauris, ut gravida velit. Donec ultricies, eros ut finibus volutpat, enim ligula tempus enim, non bibendum libero tellus at velit. Aenean placerat egestas ullamcorper.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie2.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">Lonely rock</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">drama</a>,
                    <a class="content-link" href="movies-blocks.html">historical</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">7,1</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">113</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">In luctus ac nisi vel vulputate. Sed blandit augue ut ex eleifend, ac posuere dolor sollicitudin. Mauris tempus euismod mauris id semper. Vestibulum ut vulputate elit, id ultricies libero. Aenean laoreet mi augue, at iaculis nisi aliquam eu. Quisque nec ipsum vehicula diam egestas porttitor eu vitae ex. Curabitur auctor tortor elementum leo faucibus, sit amet imperdiet ante maximus. Nulla viverra tortor dignissim purus placerat dapibus nec ut orci. Quisque efficitur nulla quis pulvinar dapibus. Phasellus sodales tortor sit amet sagittis condimentum. Donec ac ultricies ex. In odio leo, rhoncus aliquam bibendum sit amet, varius sit amet nisl.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie2.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">Blick</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">comedy</a>,
                    <a class="content-link" href="movies-blocks.html">detective</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">8,7</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">130</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultrices justo a pellentesque. Praesent venenatis dolor nec tempus lacinia. Donec ac condimentum dolor. Nullam sit amet nisl hendrerit, pharetra nulla convallis, malesuada diam. Donec ornare nisl eu lectus rhoncus, at malesuada metus rutrum. Aliquam a nisl vulputate, sodales ipsum aliquam, tempus purus. Suspendisse convallis, lectus nec vehicula sollicitudin, lorem sapien rhoncus dolor, vel lacinia urna velit ullamcorper nisi. Phasellus pellentesque, magna nec gravida feugiat, est magna suscipit ligula, vel porttitor nunc enim at nibh. Sed varius sit amet leo vitae consequat.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie2.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">The match</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">romance</a>,
                    <a class="content-link" href="movies-blocks.html">historical</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">8,1</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">90</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Aenean molestie turpis eu aliquam bibendum. Nulla facilisi. Vestibulum quis risus in lorem suscipit tempor. Morbi consectetur enim vitae justo finibus consectetur. Mauris volutpat nunc dui, quis condimentum dolor efficitur et. Phasellus rhoncus porta nunc eu fermentum. Nullam vitae erat hendrerit, tempor arcu eget, eleifend tortor.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie4.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">In to the deep</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">historical</a>,
                    <a class="content-link" href="movies-blocks.html">adventure</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">9,8</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">169</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultrices justo a pellentesque. Praesent venenatis dolor nec tempus lacinia. Donec ac condimentum dolor. Nullam sit amet nisl hendrerit, pharetra nulla convallis, malesuada diam. Donec ornare nisl eu lectus rhoncus, at malesuada metus rutrum. Aliquam a nisl vulputate, sodales ipsum aliquam, tempus purus. Suspendisse convallis, lectus nec vehicula sollicitudin, lorem sapien rhoncus dolor, vel lacinia urna velit ullamcorper nisi. Phasellus pellentesque, magna nec gravida feugiat, est magna suscipit ligula, vel porttitor nunc enim at nibh. Sed varius sit amet leo vitae consequat.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="movie-line-entity">
            <div class="entity-poster" data-role="hover-wrap">
                <div class="embed-responsive embed-responsive-poster">
                    <img class="embed-responsive-item" src="../pictures/movie3.jpg" alt="" />
                </div>
                <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                    <div class="entity-play">
                        <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                            <span class="icon-content"><i class="fas fa-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entity-content">
                <h4 class="entity-title">
                    <a class="content-link" href="movie-info-sidebar-right.html">New world</a>
                </h4>
                <div class="entity-category">
                    <a class="content-link" href="movies-blocks.html">thriller</a>,
                    <a class="content-link" href="movies-blocks.html">horror</a>
                </div>
                <div class="entity-info">
                    <div class="info-lines">
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-star"></i></span>
                            <span class="info-text">9,1</span>
                            <span class="info-rest">/10</span>
                        </div>
                        <div class="info info-short">
                            <span class="text-theme info-icon"><i class="fas fa-clock"></i></span>
                            <span class="info-text">125</span>
                            <span class="info-rest">&nbsp;min</span>
                        </div>
                    </div>
                </div>
                <p class="text-short entity-text">Vivamus dolor ex, viverra ut facilisis et, euismod et quam. Aliquam sit amet mattis velit, ullamcorper venenatis magna. Aenean ac maximus magna. Proin pharetra venenatis tortor, ac suscipit est ultrices vitae. Mauris vulputate, nisl in lacinia dignissim, libero justo vehicula arcu, a porttitor quam erat ac dui. Suspendisse potenti. Maecenas sit amet interdum sem. Vestibulum sit amet volutpat mauris, ut gravida velit. Donec ultricies, eros ut finibus volutpat, enim ligula tempus enim, non bibendum libero tellus at velit. Aenean placerat egestas ullamcorper.
                </p>
            </div>
            <div class="entity-extra">
                <div class="text-uppercase entity-extra-title">Showtime</div>
                <div class="entity-showtime">
                    <div class="showtime-wrap">
                        <div class="showtime-item">
                            <span class="disabled btn-time btn" aria-disabled="true">11 : 30</span>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">13 : 25</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">16 : 07</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">19 : 45</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">21 : 30</a>
                        </div>
                        <div class="showtime-item">
                            <a class="btn-time btn" aria-disabled="false" href="#">23 : 10</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@stop
@section('scripts')
  <script>
      var mymapQro = L.map('mapidQro').setView([20.606428, -100.395748], 13);
      var mymapPach = L.map('mapidPach').setView([20.127730, -98.731743], 13);

      var marker = L.marker([20.606428, -100.395748]).addTo(mymapQro);
      var marker2 = L.marker([20.607673, -100.391714]).addTo(mymapQro);

      var marker3 = L.marker([20.129090, -98.735702]).addTo(mymapPach);
      var marker4 = L.marker([20.125580, -98.734455]).addTo(mymapPach);

      marker.bindPopup("<b>Cine Antea!</b><br><a href='https://creativecommons.org/licenses/by-sa/2.0/'>Entrar</a>.").openPopup();
      marker2.bindPopup("<b>Cine Esfera!</b><br><a href='https://creativecommons.org/licenses/by-sa/2.0/'>Entrar</a>.").openPopup();
      marker3.bindPopup("<b>Cine Esfera!</b><br><a href='https://creativecommons.org/licenses/by-sa/2.0/'>Entrar</a>.").openPopup();
      marker4.bindPopup("<b>Cine Esfera!</b><br><a href='https://creativecommons.org/licenses/by-sa/2.0/'>Entrar</a>.").openPopup();



      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          maxZoom: 18,
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/streets-v11',
          tileSize: 512,
          zoomOffset: -1
      }).addTo(mymapQro);

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          maxZoom: 18,
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/streets-v11',
          tileSize: 512,
          zoomOffset: -1
      }).addTo(mymapPach);

      function pachuca() {
        var pach = document.getElementById("mapPach");
        var qro = document.getElementById("mapQro");

        if (pach.style.display === "none") {
          pach.style.display = "block";
          qro.style.display = "none";
        } else {
          pach.style.display = "none";
        }
      }
      function queretaro() {
        var qro = document.getElementById("mapQro");
        var pach = document.getElementById("mapPach");

        if (qro.style.display === "none") {
          qro.style.display = "block";
          pach.style.display = "none";

        } else {
          qro.style.display = "none";
        }
      }
  </script>
@stop
