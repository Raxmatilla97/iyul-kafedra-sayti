<div class="table-responsive">
    <table class="table" id="gallereyaCategories-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Slug</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gallereyaCategories as $gallereyaCategory)
            <tr>
                <td>{{ $gallereyaCategory->title }}</td>
            <td>{{ $gallereyaCategory->slug }}</td>
                <td>
                    {!! Form::open(['route' => ['gallereyaCategories.destroy', $gallereyaCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gallereyaCategories.show', [$gallereyaCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gallereyaCategories.edit', [$gallereyaCategory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
