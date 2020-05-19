{{flash.output()}}
<div class="my-2 page-header">
    <h2>Tambah Bantuan</h2>
</div>

<div class="mt-5">
    {{form('bantuan/create')}}
        <fieldset>
            <div id="clone" class="row form-group">
                <div class="col-3">
                    <label for='nama[]'>
                        Nama Bantuan
                    </label>

                    <div class>
                        {{ text_field('nama[]', 'class':'form-control', 'required':'') }}
                    </div>
                </div>
                <div class="col-3">
                    <label for='kategori[]'>
                        Kategori Bantuan
                    </label>

                    <select class="custom-select" name="kategori[]">
                        <option selected disabled hidden required>Pilih kategori</option>
                        {% for kat in kategori %}
                            <option value="{{kat.id}}">{{kat.nama}}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class="col-3">
                    <label for='jumlah[]'>
                        Jumlah
                    </label>

                    <div class>
                        {{ numeric_field('jumlah[]', 'class':'form-control', 'step':'0.01', 'required':'') }}
                    </div>
                </div>
                <div class="col-2">
                    <label for='satuan[]'>
                        Satuan
                    </label>

                    <div class>
                        {{ text_field('satuan[]', 'class':'form-control', 'required':'') }}
                    </div>
                </div>
                <div class="col-1">
                    <button type="button" class="remove btn btn-light"><b>&times;</b></button>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button id="add" type="button" class="btn btn-success"><b>&plus;</b></button>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-4">
                    {{ submit_button('Simpan', 'class': 'my-3 btn btn-primary btn-block') }}
                </div>
            </div>
        </fieldset>
    {{endForm()}}
</div>

<script>
    $("#add").click(function() {
        $("#clone").clone(true).insertBefore("form > fieldset > div:nth-last-child(2)");
        return false;
    });

    $(".remove").click(function() {
        $(this).parent().parent().remove();
    });
</script>