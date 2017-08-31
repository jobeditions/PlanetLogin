<div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                         @foreach($website as $web)
                            <img src="/{{$web->imageweb}}" alt="">
                         @endforeach                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->