
<div class="row">
    <div class="col-12">
        @if($errors->any())
            <div class="alert alert-danger bg-white text-danger h5">
                <strong>Erro:</strong> &nbsp;{{$errors->first()}}
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-primary success bg-white text-primary h5">
                <i class="far fa-thumbs-up"></i>&nbsp;
                {!! \Session::get('success') !!}
            </div>
        @endif
        <hr>
    </div>
</div>