@extends('layouts.app')

@section('content')
    
    <!-- Current posts -->
    @if (count($posts) > 0)
        <div class="panel panel-default">
            <div class="text-center panel-heading">
			ALL POSTS
            </div>

            <div class="panel-body">
                <table class="table table-striped post-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>POST</th>
                      
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($posts as $key=>$post)
							<tr>
                                <!-- post Name -->
                                <td class="table-text">
                                    <div>{{ $post->post_desc }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection