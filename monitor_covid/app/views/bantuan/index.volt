{{flash.output()}}
<div class="my-2 page-header row">
    <div class="col-6">
        <h2>Kategori: 
        {% if selected_kategori is defined %} {{selected_kategori.nama}}
        {% else %} Semua
        {% endif %}
        </h2>
    </div>
    <div class="col-6 text-right">
        {{ link_to('bantuan/create', '+ Tambah bantuan', 'class': 'btn btn-primary btn-large btn-success') }}
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Penyumbang</th>
                <th scope="col">Bantuan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            {% for bantu in bantuan %}
            <tr>
                <th scope="row">{{bantu.id}}</th>
                <td>{{bantu.transaksi.user.nama}}</td>
                <td>{{bantu.nama}}</td>
                <td>{{link_to('bantuan/kategori/'~bantu.kategori_id, bantu.kategori.nama)}}</td>
                <td>{{bantu.jumlah|number_format(1, ',', '.')}}</td>
                <td>{{bantu.satuan}}</td>
                <td>{{link_to('bantuan/details/'~bantu.id, 'Lihat detail transaksi')}}</td>
            </tr>
            {% endfor %}
            {% if bantuan|length == 0 %}
            <tr>
                <th colspan="7" class="text-center">Data bantuan tidak ditemukan</th>
            </tr>
            {% endif %}
        </tbody>
    </table>
</div>