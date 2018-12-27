@include('includes.header')

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                 <form method="POST" action="{{ url('/insert') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend>Insert Details</legend>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control-plaintext"  placeholder="Title">
                                </div>
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" id="description" class="form-control-plaintext"  placeholder="Descrption">
                                </div>
                                
                                <div class="col-sm-10 button-set">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  
                                    <a href="{{ url('/') }}" class="btn btn-warning">Back</a>
                                </div>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
   
@include('includes.footer')   