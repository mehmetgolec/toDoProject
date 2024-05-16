@extends("panel.layout.app")

@section("content")

<div class="card p-3">

    <div class="card-header">

        <h3>Kategori Oluştur</h3>
    </div>
    <div class="card-body">
        <form action="{{route("panel.categories.add")}}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kategori Adı</label>
            <input type="text" class="form-control"  placeholder="Lütfen kategori adı yazınız" name="category_name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label mt-3">Kategori Durumu</label>
            <select name="state" class="form-control">
                <option value="1">Aktif</option>
                <option value="0">Pasif</option>
            </select>
        </div>
        <button class="btn btn-success mt-2" type="submit">Kaydet</button>
        </form>
    </div>

</div>


@endsection
