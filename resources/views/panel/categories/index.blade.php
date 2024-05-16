@extends("panel.layout.app")

@section("content")
    <div class="card p-3">
        <div class="card-header">
            @if(session("success"))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{session("success")}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h3>Kategoriler</h3>
            <a href="{{ route('panel.categories.create') }}" class="btn btn-success">Kategori Oluştur</a>
        </div>
        <div class="card-body">
            <div class="card">
                <h5 class="card-header">Kategoriler</h5>
                <div class="table-responsive text-nowrap">
                     @if($categories->count()!=0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kategori adı</th>
                                <th>Durum</th>
                                <th>Oluşturma tarihi</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($categories as $c)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$c->name}}</strong></td>
                                    <td>
                                        @if($c->is_active==1)
                                            Aktif
                                        @else
                                            Pasif
                                        @endif
                                    </td>
                                    <td>
                                        {{$c->created_at}}
                                    </td>
                                    <td>
                                        <button class="btn btn-success">
                                            Güncelle
                                        </button>
                                        <button class="btn btn-danger">
                                            Sil
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @else
                         <p>Veri yok</p>
                     @endif

                </div>
            </div>
        </div>
    </div>
@endsection
