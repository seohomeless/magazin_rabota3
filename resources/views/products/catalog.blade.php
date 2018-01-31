@extends('layouts.main')

@section('content')


 

  <div class="row course-set courses__row">
    @foreach($product as $product)
      <article class="col-md-4 course-block course-block-lessons card" style="width: 18rem;">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16124679777%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16124679777%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22108.5%22%20y%3D%2297.2%22%3EIMAGE%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-body">
          <h3>
            <a href="{{ route('product.view', ['id' => $product->id]) }}">
              {{ $product->title }}
            </a>
          </h3>
          <p>Category: {{ $product -> category }} </p>
          <p>Price: ${{ priceFormat($product->price) }}</p>
        </div>
      </article>
    @endforeach
  </div>
@endsection
