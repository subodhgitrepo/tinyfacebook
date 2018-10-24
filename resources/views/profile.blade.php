@extends('layouts.app')

@section('content')
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New post Form -->
        <form action="{{ url('post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- post Name -->
            <div class="form-group">
                <label for="post" class="col-sm-3 control-label">post</label>

                <div class="col-sm-6">
                    <input type="text" name="post_desc" id="post-name" class="form-control">
                </div>
            </div>

            <!-- Add post Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> POST MY POST
                    </button>
                </div>
            </div>
        </form>
    </div>



    <!-- Current posts -->
    @if (count($posts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
			{{ Auth::user()->name }}'s recent 5 posts
            </div>

            <div class="panel-body">
                <table class="table table-striped post-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>POST</th>
                        <th>ACTION</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($posts as $key=>$post)
							
                            <tr>
                                <!-- post Name -->
                                <td class="table-text">
                                    <div>{{ $post->post_desc }}</div>
                                </td>

                                <td>
									<form action="{{ url('post/'.$post->id) }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
							
										<button type="submit" class="btn btn-danger">
											<i class="fa fa-trash"></i> Delete
										</button>
									</form>
								</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection