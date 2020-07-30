<h4>Friends</h4>

<ul class="list-group" style="display:inline-block; min-width:250px">
    @foreach (range(1, 5) as $index)
    <li class="list-group-item">
        <div>
            <img src="https://i.pravatar.cc/40" alt="" style="border-radius:50%; margin-right:10px">
            John Doe
        </div>
    </li>
    @endforeach
</ul>