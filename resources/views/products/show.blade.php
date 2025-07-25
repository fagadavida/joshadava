@extends('layouts.layout')

@section('content')

<div class="card md-12">
  {{-- <h2 class="card-header">Show Product</h2> --}}
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Price:</strong> <br/>
               NGN {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Details:</strong> <br/>
                {{ $product->detail }}
            </div>
        </div>
    </div>

  </div>
  {{-- ID Card Start --}}

	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="https://is4-ssl.mzstatic.com/image/thumb/Purple118/v4/62/cd/f5/62cdf5b2-a731-76ca-aa69-fe82c8a09d94/source/512x512bb.jpg">
			</div>
			<div class="photo" >
				<img src="{{ URL::to('') }}/Uploads/{{$product->image_path}}" alt="Passport" style="border-radius: 50%" />
			</div>
			<h2>{{ $product->name }}</h2>
			<div class="qr-code">

			</div>
			<h3>Student</h3>
      <h3>BT19GCS121</h3>
			<hr>
			<p><strong>NIIT University</strong> Neemrana, NH-8 Delhi-Jaipur highway <p>
			<p>District Alwar, Rajasthan <strong>301705</strong></p>
			<p>Ph: 01494-660600, 7073222393</p>

		</div>
	</div>

<br/>
<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
				<img src="https://is4-ssl.mzstatic.com/image/thumb/Purple118/v4/62/cd/f5/62cdf5b2-a731-76ca-aa69-fe82c8a09d94/source/512x512bb.jpg">
			</div>
			<div class="photo">

			</div>
			<h2>{{ $product->name }}</h2>
			<div class="qr-code" style="width: 100%; margin: auto;">
                {!! $product->qr_code !!}
			</div>
			<h3>Student</h3>
            <h3>BT19GCS121</h3>
			<hr>
			<p><strong>NIIT University</strong> Neemrana, NH-8 Delhi-Jaipur highway <p>
			<p>District Alwar, Rajasthan <strong>301705</strong></p>
			<p>Ph: 01494-660600, 7073222393</p>

		</div>
	</div>
</div>
@endsection
