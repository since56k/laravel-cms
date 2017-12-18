<table class="table table-bordered">
	<thead>
		<tr>
			<td width="80">Action</td>
			<td>Title</td>
			<td width="120">Author</td>
			<td width="150">Category</td>
			<td width="170">Date</td>
		</tr>
	</thead>
	<tbody>

	  @foreach ($posts as $post)
				<tr>
					<td>
					{!! Form::open(['method' => 'DELETE', 'route' => ['admin.blog.destroy', $post->id]]) !!}
						<a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-xs btn-default">
							<i class="fa fa-edit"></i>
						</a>

						<button title="Delete" type="submit" class="btn btn-xs btn-danger">
							<i class="fa fa-times"></i>
						</button>
					{!! Form::close() !!}
					</td>
					<td>
						{{ $post->title }}
					</td>
					<td>
						{{ $post->author->name }}
					</td>
					<td>
						{{ $post->category->title }}
					</td>
					<td>
						<abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>
					</td>
				</tr>
	@endforeach

		
	</tbody>
</table>