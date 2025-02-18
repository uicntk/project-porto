<div class="card">
    <div class="card-content">
        <div class="text-side">
            <h2>ようこそ私の世界へ</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quasi qui totam corporis ea placeat quo laudantium blanditiis facilis quia deleniti perferendis, asperiores ad suscipit ab minima cupiditate. Corrupti, temporibus?</p>
        </div>
        <div class="image-side">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="swiper-slide" style="background-image:url(img/images/6.jfif)" href="{{URL::asset('img/images/6.jfif')}}"></a>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/1.png')}}" alt="Image 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/2.jpg')}}" alt="Image 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/3.jpg')}}" alt="Image 3" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/4.png')}}" alt="Image 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/5.jfif')}}" alt="Image 5" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/7.jpg')}}" alt="Image 7" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/8.jpg')}}" alt="Image 8" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{URL::asset('img/images/9.png')}}" alt="Image 9" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" >
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>