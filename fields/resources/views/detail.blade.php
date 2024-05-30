

@extends('layouts.main')


@section('detail')
    {{-- new detail --}}
    <div id="detail">

        <div class = "card-wrapper">
            <div class = "card">
    
                <!-- card left -->
                <div class = "product-imgs">
                    <div class = "img-display">
                        <div class = "img-showcase">
                            @foreach($post->images as $image)
                                <img src="{{ asset('storage/'.$image->image) }}" alt="{{ $post->name }}">
                            @endforeach
                        </div>
                    </div>
                    <div class = "img-select">
                            @foreach($post->images as $image)
                                <div class = "img-item">
                                    <a href="#" data-id="{{ $loop->index+1 }}">
                                        <img src="{{ asset('storage/'.$image->image) }}" alt="{{ $post->name }}">
                                    </a>
                                </div>
                            @endforeach
                    </div>
                </div>
    
                <!-- card right -->
                <div class = "product-content">
                    <h2 class = "product-title">{{ $post->name}}</h2>
                    <a href = "/districts/{{ $districtId}}" class = "product-link">{{ $post->district->name }}</a>
                    <div class = "product-price">
                        <p class = "new-price">Harga per Jam: <span>Rp{{ $post->price }}</span></p>
                    </div>
        
                    <div class = "product-detail">
                        <h2>Alamat:</h2>
                        <p>{{ $post ->address }}</p>
                        <ul>
                        <li><i class='bx bx-current-location'></i> Kecamatan: <span data-feather='eye'> {{ $post->district->name }}</span></span></li>
                        <li><i class='bx bxs-buildings'></i> Fasilitas: <span>{{ $post->facility }}</span></li>
                        <li><i class='bx bxs-time-five'></i> Jam Buka Senin-Jumat: <span>{{ $post->timeweekdays }}</span></li>
                        <li><i class='bx bxs-time-five'></i> Jam Buka Sabtu-Minggu: <span>{{ $post->timeweekends }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item-bottom">
            {!!$post->map!!} 
        </div>
        
    </div>





    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage(){
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);        
    </script>


@endsection

