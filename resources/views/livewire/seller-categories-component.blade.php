            <div class="container">
                <h1>Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
                    </ul>
                </div>
            </div>

                <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Food<span>Categories</span></h2>
                    <i class="fa fa-image"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="services-lines full-services">
                        @foreach($scategories as $scategory)
                            <li>
                                <div class="item-service-line">
                                    <i class="fa"><a href=""><img class="icon-img"
                                     src="{{asset('assets/images/categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}" style="width: 60px; height: 60px"></a></i>
                                    <h5>{{$scategory->name}}</h5>
                                </div>
                            </li>
                        @endforeach                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_info content_resalt">
            <div class="container">
                <div class="row">
                    <div class="titles">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
