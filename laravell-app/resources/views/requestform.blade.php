@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">test</div>

                <div class="card-body">
                    <form method="POST" action="http://localhost:1337">
                        

                        <div class="form-group row">
                            <label for="request" class="col-md-4 col-form-label text-md-right">Request</label>

                            <div class="col-md-8">
                                
                                <textarea name="request" id="request" cols="30" rows="10"></textarea>
                                @error('request')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Send Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
