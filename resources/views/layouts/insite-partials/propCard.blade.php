<div class="aa-latest-properties-content">
    <div class="row">
        @foreach($lastProps as $prop)
            <div class="col-md-4">
            <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                    <img src="{{asset("img/item/1.jpg")}}"  alt="img">
                </a>
                <div class="aa-tag for-sale">
                    {{$prop['type']}}
                </div>
                <div class="aa-properties-item-content">
                    <div class="aa-properties-info">
                        @foreach(explode(',',($prop['features'])) as $detail)
                         <span>{{$detail}}</span>
                        @endforeach
                    </div>
                    <div class="aa-properties-about">
                        <h3><a href="">{{$prop['place']}}</a></h3>
                        <p>{{$prop['data']}}</p>
                    </div>
                    <div class="aa-properties-detial">
                    <span class="aa-price">
                      {{$prop['price']}}
                    </span>
                        <a href="{{route("Properties.Details",["id"=>$prop['id']])}}" class="aa-secondary-btn">View Details</a>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>