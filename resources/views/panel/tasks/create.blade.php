@extends("panel.layout.app")

@section("content")
    <div class="card p-5">

        <div class="cardHeader">
            <h1>Görev oluştur</h1>
        </div>

        <div class="cardHeader">
            <form action="{{ route('panel.addTask') }}" method="POST">
                @csrf
                <div>
                    <label for="title" class="form-label">Başlık</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Görev Başlığı" aria-describedby="defaultFormControlHelp">

                    <label for="content" class="form-label">İçerik</label>
                    <input type="text" name="content" class="form-control" id="content" placeholder="Görev İçeriği" aria-describedby="defaultFormControlHelp">

                    <label for="status" class="form-label">Durum</label>
                    <select name="status" id="status" class="form-control">
                        <option value="" selected disabled>Lütfen seçiniz</option>
                        <option value="1">Yapıldı</option>
                        <option value="3">Yapılıyor</option>
                        <option value="0">Yapılmadı</option>
                        <option value="4">Ertelendi</option>
                        <option value="5">İptal oldu</option>
                    </select>

                    <label for="deadline" class="form-label">Son Tarih</label>
                    <input type="datetime-local" name="deadline" class="form-control" id="deadline" placeholder="Son Tarih" aria-describedby="defaultFormControlHelp">

                    <button type="submit" class="btn btn-success mt-2">Kaydet</button>
                </div>
            </form>
        </div>

    </div>
@endsection
