<tr @if($loop->even) class="bg-light" @endif>
    <th scope="row">{{$key}}</th>
    <td>{{$contact['firstname']}}</td>
    <td>{{$contact['lastname']}}</td>
    <td>{{$contact['email']}}</td>
    <td>{{$contact['company']}}</td>
    <td width="150">
        <a href="{{route('contacts.show',$key)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show">
            <i class="bi bi-eye-fill"></i>
        </a>
        <a href="{{route('contacts.create')}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit">
            <i class="bi bi-pencil-square"></i>
        </a>
        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')">
            <i class="bi bi-x-circle"></i>
        </a>
    </td>
</tr>
