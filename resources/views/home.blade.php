@include('includes.header')

    <div class="container">
        <div class="row">

          @if(session('info'))
            <div class="alert alert-success">{{ session('info') }}</div>
          @endif
           
                <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Descryption</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(count($articles)>0)
                          @foreach ($articles->all() as $item)

                            <tr>
                              <th scope="row">{{ $item->id }}</th>
                              <td>{{ $item->title }}</td>
                              <td>{{ $item->description }}</td>
                              <td>
                                  <a href="{{ url("/read/{$item->id}") }}" class="badge badge-primary">Read </a> |
                                  <a href='{{ url("/update/{$item->id}") }}' class="badge badge-warning">Update </a> |
                                  <a href="{{ url("/delete/{$item->id}") }}" class="badge badge-danger">Delete </a>
                              </td>
                            </tr>

                          @endforeach
                          @endif
                        </tbody>
                      </table> 
                      {!! $articles->render() !!} 

        </div>
    </div>
   
@include('includes.footer')   