@extends('mahasiswa')

@section('content')
<li>
            {{$nama1}},{{$nilai1}}
            <br>
            @switch($nilai1)
                @case("D")
                <div class="alert alert-success d-inline-block">tidak ikut ujian</div>
                @break
                @case("B")
                <div class="alert alert-success d-inline-block">good</div>
                @break
                @case("A")
                <div class="alert alert-success d-inline-block">perfect</div>
                @break
                @default
                <div class="alert alert-success d-inline-block">nilai tidak valid</div>
            @endswitch
</li>
@endsection