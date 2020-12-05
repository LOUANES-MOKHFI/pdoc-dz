@extends('layouts.app')

@section('title')
  F.A.Q
@endsection
@section('header')

@endsection
@section('content')
    

    <div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="#">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">F.A.Q</span>
      </div>
    </div>

<div class="container py-3">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                @foreach(FAQ() as $faq)
                <div class="card">
                    <div class="card-header p-2" id="heading{{$faq->id}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                              {{$faq->id}}-{{$faq->question}}
                            </button>
                          </h5>
                    </div>
                    <div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#faqExample">
                        <div class="card-body">
                           {{$faq->reponse}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

@endsection
@section('footer')

@endsection